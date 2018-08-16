<?php 
	Class Home extends CI_Controller{
		public function index(){
			$data['content']="home/index";
			$this->load->view("templates/admin/master",$data);

		}

		public function gioithieu(){
			$data['content']="home/gioithieu";
			$this->load->view("templates/admin/master",$data);
		}
	}

?>