<?php
	class demo extends CI_Controller {
		public function index() {
			$this->load->model("about_me_model");
			$rs=$this->about_me_model->get_all();
			echo "<pre>";
			var_dump($rs->result_array());
			echo "</pre>";
		}
		public function contact() {
			$this->load->model("Contact_model");
			$rs=$this->Contact_model->get_all();
			echo "<pre>";
			var_dump($rs);
			echo "</pre>";
		}
	}
?> 