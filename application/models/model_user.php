<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function user_register($input){
		$this->load->helper('site_helper');
		$encrypt_password = bCrypt($input['password'],12);
		$array_user = array(
			'username' => $input['username'],
			'password' => $encrypt_password,
			'email' => $input['email'],
			'active_since' => date('Y-m-d') 
		);
		$this->db->insert('t_user',$array_user);
	}

	public function exist_row_check($field,$data){
		$this->db->where($field,$data);
		$this->db->from('t_user');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function get_user_detail($username){
		$this->db->where('username',$username);
		$query = $this->db->get('t_user');

		if($query->num_rows() > 0){
			$data = $query->row();
			$query->free_result();
		}
		else{
			$data = NULL;
		}
		return $data;
	}

	public function read($table){
		$this->db->from($table);
		$this->db->order_by('iduser','DESC');
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
		$this->db->where('iduser',$id);
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
		$this->db->where('iduser',$id);
		$this->db->update($table,$data);
	}

	public function delete($id,$table){
		$this->db->where('iduser',$id);
		$this->db->delete($table);
	}

	public function total_rows($table){
		return $this->db->count_all_results($table);
	}
}