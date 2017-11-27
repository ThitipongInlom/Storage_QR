<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addtype extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
	}

	public function index()
	{
		$this->load->view('theme/head');
		$this->load->view('addtypeitem');
		$this->load->view('theme/footer');
	}

}

/* End of file Addtype.php */
/* Location: ./application/controllers/Addtype.php */ ?>