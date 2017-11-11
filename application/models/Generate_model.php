<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Generate_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function saveadd_item()
	{
		$sql  = array(
			'item_name' => $this->input->post('name'),
			'item_mac'  => $this->input->post('mac'));
		$this->db->insert('item', $sql);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
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

}

/* End of file Generate_model.php */
/* Location: ./application/models/Generate_model.php */
?>