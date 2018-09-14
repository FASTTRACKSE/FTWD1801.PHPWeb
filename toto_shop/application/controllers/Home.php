<?php
class Home extends CI_Controller {
	public function index() {
		$this->load->model("Aboutme_model");
			
		$rs=$this->Aboutme_model->get_aboutme();
		$data["aboutme"]=$rs;
		// echo "<pre>";
		// print_r($rs);
		// echo "</pre>";
		//  die();
		$this->load->model("Education_model");

		$rs2=$this->Education_model->get_education();
		$data["education"]=$rs2;
		$this->load->view("home/index",$data);
		// echo "<pre>";
		// print_r($rs2);
		// echo "</pre>";
		}

	}
?>
