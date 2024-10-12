<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_laporan extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function create($table,$data){
		$this->db->insert($table,$data);
	}

	public function read($table){
		$this->db->from($table);
		$this->db->order_by('kodebarang','DESC');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
			$query->free_result();
		}
		else{
			$data = NULL;
		}
		return $data;
	}

	
}