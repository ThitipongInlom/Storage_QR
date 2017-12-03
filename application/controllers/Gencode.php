<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Gencode extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
		$this->load->model('Generate_model');
	}

	public function alert_get()
	{
		$result = $this->Generate_model->getall_alert();
		echo json_encode($result);
	}

	public function index()
	{
		$this->load->view('theme/head');
		$this->load->view('gencode');
		$this->load->view('theme/footer');
	}

	public function raedcode($id)
	{
		$this->Generate_model->set_raedalert($id);
		$item = $this->Generate_model->view_item($id);
		$data = array(
        'pageid' => $id,
    	'item_data' => $item);
		$this->load->view('theme/head');
		$this->load->view('radecode', $data);
		$this->load->view('theme/footer');
	}

	public function ajaxgetitem_all()
	{
		$list = $this->Generate_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $item) {
            $img = '<img src="'.base_url().'img_qr/'.$item->item_imgname.'" height="50" width="50">';

            $row = array();
            $row[] = $item->item_id;
            $row[] = $item->item_name;
            $row[] = $item->item_mac;
            $row[] = $img;
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Generate_model->count_all(),
                        "recordsFiltered" => $this->Generate_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
	}

}

/* End of file Gencode.php */
/* Location: ./application/controllers/Gencode.php */
?>