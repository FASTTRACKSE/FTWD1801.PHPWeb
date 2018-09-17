<?php
class Home extends CI_Controller {
	public function index() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$this->load->view("home/index",$data);
	}
}