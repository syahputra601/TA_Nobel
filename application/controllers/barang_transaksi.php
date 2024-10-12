<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang_transaksi extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
	}
	public function index()
	{

	}

	public function daftar_barang(){
		$this->load->model('model_barang');
		$data=array(
			'record' => $this->model_barang->read('t_barang')
			);

		$this->load->view('daftar_barang',$data);
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
			$this->load->view('form_barang');
		}

		}
	
	public function edit_barang($id=0){
		$this->load->model('model_barang');
		if($id != 0 && !empty($id)){
			$data = array(
				'record' =>$this->model_barang->edit($id, 't_barang')
			);
			$this->load->view('edit_barang',$data);

		}
		else{
			$data = array(
				'record' =>$this->model_barang->edit($id, 't_barang')
			);
			$this->load->view('edit_barang',$data);
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

}