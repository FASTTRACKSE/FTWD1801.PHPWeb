<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tintuc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tintuc_model');
	}
	public function index()
	{
		$data['content']='admin_DA/tintuc/index';
		$this->load->view('templates/admin_DA/master',$data);
		$arr = array(
			'noidung' => $this->input->post('ckfinder')
		);
		$this->load->model('Tintuc_model');
		$re = $this->Tintuc_model->insertData($arr);
		if ($re) {
			echo "thanh cong";
		} else {
			echo "that bai";
		}
	}
}

/* End of file Tintuc.php */
/* Location: ./application/controllers/Tintuc.php */