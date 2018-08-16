<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test extends CI_Controller {



	public function index()
	{
		$data['content'] ='admin.php';
		
		
		$this->load->view('templates/master',$data);
	}
	public function charts()
	{
		$data['content'] ='charts.php';
		$this->load->view('templates/master', $data);
	}

}

/* End of file test.php */
/* Location: ./application/controllers/test.php */
