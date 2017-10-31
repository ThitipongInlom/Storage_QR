<?php  
class qr_code
{
    public function __construct() {
        $this->CI = & get_instance();
        $this->CI->load->library('session');
    }

    public function create_qrcode()
    {
    	include echo base_url().'/assets/phpqrcode/qrlib.php';
    }

}
?>