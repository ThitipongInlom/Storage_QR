<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Generate_model extends CI_Model {

	var $table = 'item';
    var $column_order = array(null, 'item_id','item_name','item_mac','item_imgname'); 
    var $column_search = array('item_id'); 
    var $order = array('item_id' => 'asc'); 

	public function __construct()
	{
		parent::__construct();
		
	}

	private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

	public function Gropalert($nameitemadd,$item_id)
	{
		$query = $this->db->get('user');
		foreach ($query->result() as $row)
		{
		$sql = array(
			'alert_detail' => "เพิ่มสินค้าใหม่ $nameitemadd",
			'alert_username' => $row->user_id,
			'alert_status' => 'N',
			'alert_icon' => 'fa fa-archive',
			'alert_color' => 'text-green',
			'alert_item_id'=> $item_id);
		$this->db->insert('alert', $sql);
		}
		return;
	}

	public function saveadd_item()
	{
		$nameitemadd = $this->input->post('name');
		$sql  = array(
			'item_name' => $this->input->post('name'),
			'item_mac'  => $this->input->post('mac'));
		$this->db->insert('item', $sql);
		$item_id = $this->db->insert_id();
		$this->Gropalert($nameitemadd,$item_id);
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

	public function set_raedalert($id)
	{
		$data = array(
        'alert_status' => 'D');
        $user = $this->session->user_id;
		$this->db->where('alert_item_id', $id);
		$this->db->where('alert_username', $user);
		$this->db->update('alert', $data);
		return;
	}

}

/* End of file Generate_model.php */
/* Location: ./application/models/Generate_model.php */
?>