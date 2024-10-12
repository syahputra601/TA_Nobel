<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->model('model_laporan');
		$data=array(
			'record' => $this->model_laporan->read('t_barang')
			);

		$this->load->view('laporan',$data);
	}

	public function laporan_barang(){
		$this->load->model('model_laporan');
		$data=array(
			'record' => $this->model_laporan->read('t_barang')
			);

		$this->load->view('laporan',$data);
	}

	
}