<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Gencode extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
		$this->load->model('Generate_model');
	}

	public function index()
	{
		$itemall = $this->Generate_model->getitem_all();
		$data = array(
			'item_all' => $itemall);
		$this->load->view('theme/head');
		$this->load->view('gencode', $data);
		$this->load->view('theme/footer');
	}

	public function raedcode($id)
	{
		$data = array(
        'pageid' => $id);
		$this->load->view('theme/head');
		$this->load->view('radecode', $data);
		$this->load->view('theme/footer');
	}

}

/* End of file Gencode.php */
/* Location: ./application/controllers/Gencode.php */
?>