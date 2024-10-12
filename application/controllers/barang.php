<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang_masuk extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
	}
	public function index()
	{

	}

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
			redirect(base_url('admin/barang_masuk/daftar_masuk'));
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
		redirect(base_url('admin/barang_masuk/daftar_masuk'));
	}

	public function delete_masuk($id=0){
		$this->load->model('model_masuk');
		$this->model_masuk->delete($id, 't_masuk');
		redirect(base_url('admin/barang_masuk/daftar_masuk'));
	}
}