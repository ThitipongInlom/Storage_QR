<?php  
class session_user 
{
    public function __construct() {
        $this->CI = & get_instance();
        $this->CI->load->library('session');
    }
	public function set_session($result)
	{
		$data = array(
			'user_id' => $result->user_id);
		return $data;
	}
	
	public function unset_session()
	{
		session_unset();
		return;
	}
}
?>