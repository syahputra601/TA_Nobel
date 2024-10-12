<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('session','mainlib'));
		$this->mainlib->logged_in();
		if($this->session->userdata('username') == NULL){
			redirect(base_url('user/login'));
		}
	}
	public function index()
	{
		$this->load->view('tampilan/header_admin');
	}

	public function daftar_barang(){
		$this->load->model('model_barang');
		$data=array(
			'record' => $this->model_barang->read('t_barang')
			);

		$this->load->view('admin/daftar_barang',$data);
	}

	public function tambah_barang(){
		$aksi = $this->uri->segment(3);
		if($aksi == 'kirim'){
			$post=$this->input->post();
			$this->load->model('model_barang');
			$data= array(
				'kodebarang' => $post['kode'],
				'namabarang' => $post['barang'],
				'kodejenis' => $post['jenis'],
				'harga' => $post['harga'],
				'stok' => $post['stok']
			);

			$this->model_barang->create('t_barang',$data);
			//$this->session->set_flashdata('message','<script type="text/javascript">alert("data berhasil dimasukan")</script>');
			redirect(base_url('admin/daftar_barang'));
		}
		else{
			$this->load->view('admin/form_barang');
		}

		}
	
	public function edit_barang($id=0){
		$this->load->model('model_barang');
		if($id != 0 && !empty($id)){
			$data = array(
				'record' =>$this->model_barang->edit($id, 't_barang')
			);
			$this->load->view('admin/edit_barang',$data);

		}
		else{
			$data = array(
				'record' =>$this->model_barang->edit($id, 't_barang')
			);
			$this->load->view('admin/edit_barang',$data);
		}
	}

	public function update_barang(){
		$post=$this->input->post();
		$this->load->model('model_barang');
		$data= array(
			'namabarang'=>$post['barang'],
			'kodejenis'=>$post['jenis'],
			'harga'=>$post['harga'],
			'stok'=>$post['stok']
		);
		$this->model_barang->update($post['kode'],$data,'t_barang');
		redirect(base_url('admin/daftar_barang'));
	}

	public function delete_barang($id=0){
		$this->load->model('model_barang');
		$this->model_barang->delete($id, 't_barang');
		redirect(base_url('admin/daftar_barang'));
	}

/////////////////////////////////////////////////////////////////////////

	public function daftar_user(){
		$this->load->model('model_user');
		$data=array(
			'record' => $this->model_user->read('t_user')
			);

		$this->load->view('admin/daftar_user',$data);
	}

	public function tambah_user(){
		$aksi = $this->uri->segment(3);
		if($aksi == 'kirim'){
			$post=$this->input->post();
			$this->load->model('model_user');
			$data= array(
				'iduser' => $post['user'],
				'username' => $post['username'],
				'password' => $post['password'],
				'email' => $post['email'],
				'level' => $post['level']
			);

			$this->model_user->create('t_user',$data);
			//$this->session->set_flashdata('message','<script type="text/javascript">alert("data berhasil dimasukan")</script>');
			redirect(base_url('admin/daftar_user'));
		}
		else{
			$this->load->view('admin/form_user');
		}

		}

		public function delete_user($id=0){
		$this->load->model('model_user');
		$this->model_user->delete($id, 't_user');
		redirect(base_url('admin/daftar_user'));
	}

	public function edit_user($id=0){
		$this->load->model('model_user');
		if($id != 0 && !empty($id)){
			$data = array(
				'record' =>$this->model_user->edit($id, 't_user')
			);
			$this->load->view('admin/edit_user',$data);

		}
		else{
			$data = array(
				'record' =>$this->model_user->edit($id, 't_user')
			);
			$this->load->view('admin/edit_user',$data);
		}
	}

	public function update_user(){
		$post=$this->input->post();
		$this->load->model('model_user');
		$data= array(
			'username'=>$post['username'],
			'password'=>$post['password'],
			'email'=>$post['email'],
			'level'=>$post['level']
		);
		$this->model_user->update($post['user'],$data,'t_user');
		redirect(base_url('admin/daftar_user'));
	}
	//////////////////////////////////////////////////////////////////////
	/////////////////////////////////////////////////////////////

	public function daftar_masuk(){
		$this->load->model('model_masuk');
		$data=array(
			'record' => $this->model_masuk->read('t_masuk')
			);

		$this->load->view('admin/daftar_masuk',$data);
	}

	public function tambah_masuk(){
		$aksi = $this->uri->segment(3);
		if($aksi == 'kirim'){
			$post=$this->input->post();
			$this->load->model('model_masuk');
			$data= array(
				'kodebarang' => $post['kbarang'],
				'namabarang' => $post['nbarang'],
				'namasupplier' => $post['namasupplier'],
				'tanggal' => $post['tg'],
				'Harga' => $post['hrg'],
				'stok' => $post['stk'],
				'jumlahmasuk' => $post['jmasuk'],
				'stokakhir' => $post['stokakhir']
			);

			$this->model_masuk->create('t_masuk',$data);
			//$this->session->set_flashdata('message','<script type="text/javascript">alert("data berhasil dimasukan")</script>');
			redirect(base_url('admin/daftar_masuk'));
		}
		else{
			$this->load->view('admin/form_masuk');
		}

		}
	
	public function edit_masuk($id=0){
		$this->load->model('model_masuk');
		if($id != 0 && !empty($id)){
			$data = array(
				'record' =>$this->model_masuk->edit($id, 't_masuk')
			);
			$this->load->view('admin/edit_masuk',$data);

		}
		else{
			$data = array(
				'record' =>$this->model_masuk->edit($id, 't_masuk')
			);
			$this->load->view('admin/edit_masuk',$data);
		}
	}

	public function update_masuk(){
		$post=$this->input->post();
		$this->load->model('model_masuk');
		$data= array(
				'namabarang' => $post['nbarang'],
				'namasupplier' => $post['namasupplier'],
				'tanggal' => $post['tg'],
				'Harga' => $post['Hrg'],
				'stok' => $post['stk'],
				'jumlahmasuk' => $post['jmasuk'],
				'stokakhir' => $post['stokakhir']
		);
		$this->model_masuk->update($post['kodebarang'],$data,'t_masuk');
		redirect(base_url('admin/daftar_masuk'));
	}

	public function delete_masuk($id=0){
		$this->load->model('model_masuk');
		$this->model_masuk->delete($id, 't_masuk');
		redirect(base_url('admin/daftar_masuk'));
	}



}
