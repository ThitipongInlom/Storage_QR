<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Generate extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	    $this->load->library('ciqrcode');
	    $this->load->model('Generate_model');
		
	}

	public function print_qr()
	{
		$result = $this->Generate_model->saveadd_item();
		$qrcodeid = md5($result);
		$config['cacheable']	= true; //boolean, the default is true
		$config['quality']		= true; //boolean, the default is true
		$config['size']			= '1024'; //interger, the default is 1024
		$config['black']		= array(224,255,255); // array, default is array(255,255,255)
		$config['white']		= array(70,130,180); // array, default is array(0,0,0)
		$this->ciqrcode->initialize($config);
		$params['data'] = $result;
		$params['level'] = 'H';
		$params['size'] = 10;
		$nameqr = '123';
		$params['savename'] = FCPATH.'img_qr/'.$qrcodeid.'.png';
		$this->Generate_model->savename_item($result);
		$this->ciqrcode->generate($params);
	}

}

/* End of file generate.php */
/* Location: ./application/controllers/generate.php */
?>