<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();	
	}

	public function login_model()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		// encode md5 password
		$password_md5 = md5($password);
		// query user and pass if have return num_rows;
		$query = $this->db->get_where('user', array(
			'user_username' => $username,
			'user_password' => $password_md5));
		$result = $query->num_rows();
		$row = $query->row();
		$data = array(
    			'result' => $result,
    			'row' => $row);
		return $data;
	}

}

?>