<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller{

	protected $username_temp;
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('model_user');
	}
	public function register(){
		$this->load->library('form_validation');
		$this->form_validation->set_message('required','{field} masih kosong njir');
		$this->form_validation->set_message('valid_email','email yang bener njir');
		$this->form_validation->set_message('min_lenght','kurang dari 6 njir');
		$this->form_validation->set_error_delimiters('<apan class="alert">','</span>');

		if($this->form_validation->run('register') == FALSE){
			$this->load->view('form_register');
		}
		else{
			$this->load->model('model_user');
			$this->model_user->user_register($this->input->post(NULL,TRUE));
			$this->load->view('register_sukses');
		}
	}


	public function username_check($str){
		$this->load->model('model_user');
		if($this->model_user->exist_row_check('user',$str) > 0){
			$this->form_validation->set_message('username_check','username sudah digunakan');
			return FALSE;
		}
		else{
			return TRUE;
		}
	}

	public function login(){
		$this->load->library('form_validation');
		$input = $this->input->post(NULL,TRUE);
		$this->username_temp = @$input['username'];

		if($this->model_user->get_user_detail($this->username_temp) == FALSE){
			$this->load->view('login');
		}
		else{
			$this->load->library('session');
			$user_detail = $this->model_user->get_user_detail($this->username_temp);
			if($user_detail->level == 'admin'){
				$login_data = array(
					'username' => $input['username'],
					'login_status' => TRUE
				);
				$this->session->set_userdata($login_data);
				redirect(base_url('admin/index'));
			}else if($user_detail->level == 'kasir'){
				$login_data = array(
					'username' => $input['username'],
					'login_status' => TRUE
				);
				$this->session->set_userdata($login_data);
				redirect(base_url('kasir/index'));
			}else{
				$login_data = array(
					'username' => $input['username'],
					'login_status' => TRUE
				);
				$this->session->set_userdata($login_data);
				redirect(base_url('owner/index'));
			}
		}		
	}

	public function password_check($str){
		$this->load->model('model_user');
		$user_detail = $this->model_user->get_user_detail($this->username_temp);
		if($user_detail){
			if($user_detail->password == crypt($str,$user_detail->password)){
			return TRUE;
			}
			else{
				$this->form_validation->set_message('password_check','Maaf Login Anda Gagal');
				return FALSE;
			}
		}
		else{
				$this->form_validation->set_message('password_check','Tidak Terdaftar');
				return FALSE;
		}
	}

	public function logout(){
		$this->load->library('session');
		$this->session->sess_destroy();
		redirect(base_url('c_login/login'));
	}
}