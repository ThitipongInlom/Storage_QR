<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Welcome_model');
	    $this->load->library('session_user');
		
	}

	public function index()
	{
		$this->load->view('welcome_message');

	}

	public function Login()
	{
		$result = $this->Welcome_model->login_model();
		// if result == 1  --200-- OK
		if ($result['result'] == '1') {
			$dataset = $this->session_user->set_session($result['row']);
			$this->session->set_userdata($dataset);
			echo '1';
		}
	}
}
