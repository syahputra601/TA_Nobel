<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('pdf');
	}
	public function index()
	{
		$this->load->view('tampilan/header_kasir');
		$this->load->view('tampilan/footer');
	}

	public function daftar_detail(){
		$this->load->model('model_detail');
		$data=array(
			'record' => $this->model_detail->read('t_detail')
			);

		$this->load->view('kasir/daftar_detail',$data);
	}

	public function tambah_detail(){
		$aksi = $this->uri->segment(3);
		if($aksi == 'kirim'){
			$post=$this->input->post();
			$this->load->model('model_detail');
			$data= array(
				'notransaksi' => $post['no'],
				'tanggalpemesanan' => date('d-m-Y'),
				'namacustomer' => $post['nama'],
				'alamat' => $post['alamat'],
				'kodebarang' => $post['kode'],
				'namabarang' => $post['barang'],
				'harga' => $post['harga'],
				'qtypemesanan' => $post['qty'],
				'total' => $post['total'],
				'grandtotal' => $post['grand']
			);

			$this->model_detail->create('t_detail',$data);
			//$this->session->set_flashdata('message','<script type="text/javascript">alert("data berhasil dimasukan")</script>');
			redirect(base_url('kasir/daftar_detail'));
		}
		else{
			$this->load->view('kasir/form_detail');
		}

		}
	
	public function edit_detail($id=0){
		$this->load->model('model_detail');
		if($id != 0 && !empty($id)){
			$data = array(
				'record' =>$this->model_detail->edit($id, 't_detail')
			);
			$this->load->view('kasir/edit_detail',$data);

		}
		else{
			$data = array(
				'record' =>$this->model_detail->edit($id, 't_detail')
			);
			$this->load->view('kasir/edit_detail',$data);
		}
	}

	public function print_detail($id=0){
		$this->load->model('model_detail');
		if($id != 0 && !empty($id)){
			$data = array(
				'record' =>$this->model_detail->edit($id, 't_detail')
			);
			$this->load->view('kasir/cetak_detail',$data);

		}
		else{
			$data = array(
				'record' =>$this->model_detail->edit($id, 't_detail')
			);
			$this->load->view('kasir/cetak_detail',$data);
		}
	}

	public function update_detail(){
		$post=$this->input->post();
		$this->load->model('model_detail');
		$data= array(
				'tanggalpemesanan' => date('d-m-Y'),
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
		redirect(base_url('kasir/daftar_detail'));
	}

	public function delete_detail($id=0){
		$this->load->model('model_detail');
		$this->model_detail->delete($id, 't_detail');
		redirect(base_url('kasir/daftar_detail'));
	}


	public function laporan_barang(){
		$this->load->model('model_laporan');
		$data=array(
			'record' => $this->model_laporan->read('t_barang')
			);

		$this->load->view('kasir/laporan_barang',$data);
	}


}
