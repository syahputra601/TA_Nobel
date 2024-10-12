<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu_transaksi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('pdf');
	}
	public function index()
	{

	}

	public function daftar_detail(){
		$this->load->model('model_detail');
		$data=array(
			'record' => $this->model_detail->read('t_detail')
			);

		$this->load->view('daftar_detail',$data);
	}

	public function tambah_detail(){
		$aksi = $this->uri->segment(3);
		if($aksi == 'kirim'){
			$post=$this->input->post();
			$this->load->model('model_detail');
			$data= array(
				'notransaksi' => $post['no'],
				'tanggalpemesanan' => $post['tanggal'],
				'namacustomer' => $post['nama'],
				'alamat' => $post['alamat'],
				'kodebarang' => $post['kode'],
				'namabarang' => $post['nama'],
				'harga' => $post['harga'],
				'qtypemesanan' => $post['qty'],
				'total' => $post['total'],
				'grandtotal' => $post['grand']
			);

			$this->model_detail->create('t_detail',$data);
			//$this->session->set_flashdata('message','<script type="text/javascript">alert("data berhasil dimasukan")</script>');
			redirect(base_url('menu_transaksi/daftar_detail'));
		}
		else{
			$this->load->view('form_detail');
		}

		}
	
	public function edit_detail($id=0){
		$this->load->model('model_detail');
		if($id != 0 && !empty($id)){
			$data = array(
				'record' =>$this->model_detail->edit($id, 't_detail')
			);
			$this->load->view('edit_detail',$data);

		}
		else{
			$data = array(
				'record' =>$this->model_detail->edit($id, 't_detail')
			);
			$this->load->view('edit_detail',$data);
		}
	}

	public function print_detail($id=0){
		$this->load->model('model_detail');
		if($id != 0 && !empty($id)){
			$data = array(
				'record' =>$this->model_detail->edit($id, 't_detail')
			);
			$this->load->view('cetak_detail',$data);

		}
		else{
			$data = array(
				'record' =>$this->model_detail->edit($id, 't_detail')
			);
			$this->load->view('cetak_detail',$data);
		}
	}

	public function update_detail(){
		$post=$this->input->post();
		$this->load->model('model_detail');
		$data= array(
				'tanggalpemesanan' => $post['tanggal'],
				'namacustomer' => $post['customer'],
				'alamat' => $post['alamat'],
				'kodebarang' => $post['kode'],
				'namabarang' => $post['nm'],
				'harga' => $post['harga'],
				'qtypemesanan' => $post['qty'],
				'total' => $post['total'],
				'grandtotal' => $post['grand'],
		);
		$this->model_detail->update($post['no'],$data,'t_detail');
		redirect(base_url('menu_transaksi/daftar_detail'));
	}

	public function delete_detail($id=0){
		$this->load->model('model_detail');
		$this->model_detail->delete($id, 't_detail');
		redirect(base_url('menu_transaksi/daftar_detail'));
	}
}