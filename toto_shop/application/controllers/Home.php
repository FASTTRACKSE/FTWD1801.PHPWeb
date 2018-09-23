<?php
class Home extends CI_Controller {
	public function index() {
		$this->load->model("Sanpham_model");
		$this->load->model("Hinhanh_model");
		$this->load->model("Tintuc_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$rs2=$this->Hinhanh_model->get_hinhanh();
		$rs1=$this->Sanpham_model->get_sanpham1();
		$sanphamhangdau=$this->Sanpham_model->get_sanphamhangdau();
		$tintuc=$this->Tintuc_model->get_tintuc();
		$data["sanpham"]=$rs;
		$data["hinhanh"]=$rs2;
		$data["sanpham1"]=$rs1;
		$data["sanphamhangdau"]=$sanphamhangdau;
		$data["tintuc"]=$tintuc;
		$data['content']="home/index";
		$this->load->view("templates/frontend/master",$data);
		// echo "<pre>";
		// print_r($tintuc);
		// echo "</pre>"; die();
	}
} 
	