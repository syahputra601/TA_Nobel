<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan_transaksi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_transaksi');
	}
	public function index()
	{

		$data=array(
			'record' => $this->model_transaksi->read('t_detail')
			);

		$this->load->view('transaksi',$data);
	}

	public function transaksi(){
		$this->load->model('model_transaksi');
		$data=array(
			'record' => $this->model_transaksi->read('t_detail')
			);

		$this->load->view('transaksi',$data);
	}

	

		}
	

