<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Generate extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	    $this->load->library('ciqrcode');
		
	}

	public function print_qr()
	{
		$config['cacheable']	= true; //boolean, the default is true
		$config['quality']		= true; //boolean, the default is true
		$config['size']			= '1024'; //interger, the default is 1024
		$config['black']		= array(224,255,255); // array, default is array(255,255,255)
		$config['white']		= array(70,130,180); // array, default is array(0,0,0)
		$this->ciqrcode->initialize($config);

		$params['data'] = 'This is a text to encode become QR Code';
		$params['level'] = 'H';
		$params['size'] = 10;
		$params['savename'] = FCPATH.'img_qr/'.'rr.png';
		$this->ciqrcode->generate($params);
		echo base_url();
		echo '<img src="'.base_url().'img_qr/'.'rr.png" />';
	}

}

/* End of file generate.php */
/* Location: ./application/controllers/generate.php */
?>