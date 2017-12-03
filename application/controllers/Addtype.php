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
		$list = $this->Addtype_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $item) {
            $no++;
            $row = array();
            $row[] = $item->typeitem_id;
            $row[] = $item->typeitem_data;
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Addtype_model->count_all(),
                        "recordsFiltered" => $this->Addtype_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
	}

	public function Save_Addtype()
	{
		$this->Addtype_model->Save_addtype();
	}

}

/* End of file Addtype.php */
/* Location: ./application/controllers/Addtype.php */ ?>