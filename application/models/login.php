<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Model{
	public function login($where='')
	{
		$data=$this->db->query("SELECT * FROM t_user ".$where);
		return $data->result_array();
	}
}