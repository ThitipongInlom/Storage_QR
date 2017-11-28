<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addtype extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Addtype_model');
	}

	public function index()
	{
		$this->load->view('theme/head');
		$this->load->view('addtypeitem');
		$this->load->view('theme/footer');
	}

	public function Get_itemtype()
	{
		$this->Addtype_model->Get_addtype();
	}

	public function Save_Addtype()
	{
		$this->Addtype_model->Save_addtype();
	}

}

/* End of file Addtype.php */
/* Location: ./application/controllers/Addtype.php */ ?>