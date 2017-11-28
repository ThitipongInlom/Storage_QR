<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Addtype_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();	
	}

	public function Get_addtype()
	{
		$query = $this->db->get('typeitem');
		$result = $query->result();
		echo json_encode($result);
	}

	public function Save_addtype()
	{
		$sql  = array(
			'typeitem_data' => $this->input->post('Type'));
		$this->db->insert('typeitem', $sql);
		$item_id = $this->db->insert_id();
	}

}

/* End of file Addtype_model.php */
/* Location: ./application/models/Addtype_model.php */
?>