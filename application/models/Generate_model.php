<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Generate_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function Gropalert($nameitemadd)
	{
		$query = $this->db->get('user');
		foreach ($query->result() as $row)
		{
		$sql = array(
			'alert_detail' => "เพิ่มสินค้าใหม่ $nameitemadd",
			'alert_username' => $row->user_id,
			'alert_status' => 'N',
			'alert_icon' => 'fa fa-archive',
			'alert_color' => 'text-green');
		$this->db->insert('alert', $sql);
		}
		return;
	}

	public function saveadd_item()
	{
		$nameitemadd = $this->input->post('name');
		$this->Gropalert($nameitemadd);
		$sql  = array(
			'item_name' => $this->input->post('name'),
			'item_mac'  => $this->input->post('mac'));
		$this->db->insert('item', $sql);
		$item_id = $this->db->insert_id();
		return  $item_id;
	}

	public function savename_item($id)
	{	
		$newid  = md5($id);
		$rename = $newid.'.png';
		$data = array(
        'item_imgname' => $rename);
		$this->db->where('item_id', $id);
		$this->db->update('item', $data);
		return;
	}

	public function getitem_all()
	{
		$query = $this->db->get('item');
		$result = $query->result();
		return $result;
	}

	public function getall_alert()
	{
		$id = $this->input->post('id_alert');
		$query = $this->db->get_where('alert', array('alert_username' => $id, 'alert_status'=>'N'));
		$result = $query->result();
		$num = $query->num_rows();
		$obj = array(
			'result' => $result, 
			'num' => $num);
		return $obj;
	}

	public function view_item($id)
	{
		$query = $this->db->get_where('item', array(
			'item_id' => $id));
		$result = $query->result();
		return $result;
	}

}

/* End of file Generate_model.php */
/* Location: ./application/models/Generate_model.php */
?>