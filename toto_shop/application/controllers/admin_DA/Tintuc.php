<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tintuc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['content'] = 'admin_DA/tintuc/index';
		$this->load->view("templates/admin_DA/master",$data);
	}

}

/* End of file Tintuc.php */
/* Location: ./application/controllers/Tintuc.php */