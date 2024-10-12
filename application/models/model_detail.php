<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_detail extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function create($table,$data){
		$this->db->insert($table,$data);
	}

	public function read($table){
		$this->db->from($table);
		$this->db->order_by('notransaksi','DESC');
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

	public function edit($id,$table){
		$this->db->where('notransaksi',$id);
		$query=$this->db->get($table);
		if($query->num_rows() > 0){
			$data = $query->row();
			$query->free_result();
		}
		else{
			$data = NULL;
		}
		return $data;
	}

	public function update($id,$data,$table){
		$this->db->where('notransaksi',$id);
		$this->db->update($table,$data);
	}

	public function delete($id,$table){
		$this->db->where('notransaksi',$id);
		$this->db->delete($table);
	}

	public function total_rows($table){
		return $this->db->count_all_results($table);
	}
}