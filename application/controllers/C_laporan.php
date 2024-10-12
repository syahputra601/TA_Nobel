<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_laporan extends CI_Controller{
	function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $this->load->view('cetak_detail');
        
    }
}
