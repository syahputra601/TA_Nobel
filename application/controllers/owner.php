<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class owner extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->view('tampilan/header_owner');
		$this->load->view('tampilan/footer');
	}


	public function laporan_barang(){
		$this->load->model('model_laporan');
		$data=array(
			'record' => $this->model_laporan->read('t_barang')
			);

		$this->load->view('owner/laporan_barang',$data);
	}

	public function transaksi(){
		$this->load->model('model_transaksi');
		$data=array(
			'record' => $this->model_transaksi->read('t_detail')
			);

		$this->load->view('owner/transaksi',$data);
	}
	
}