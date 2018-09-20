<?php
class Home extends CI_Controller {
	public function index() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/index";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function giohang() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/giohang";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function chitietsanpham() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/chitietsanpham";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function donam() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/donam";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function thanhtoan() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/thanhtoan";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function donu() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/donu";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function aothun_nam() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/aothun_nam";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function thuntayngan_nam() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/thuntayngan_nam";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function thuntaydai_nam() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/thuntaydai_nam";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function thuntayngan_nu() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/thuntayngan_nu";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function thuntaydai_nu() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/thuntaydai_nu";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function aothun_nu() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/aothun_nu";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function quankaki_nam() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/quankaki_nam";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function quanjean_nam() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/quanjean_nam";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function quanjogger_nam() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/quanjogger_nam";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function aosomi_nam() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/aosomi_nam";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function somitayngan_nam() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/somitayngan_nam";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function somitaydai_nam() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/somitaydai_nam";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function quanshort_nam() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/quanshort_nam";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function shortkaki_nam() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/shortkaki_nam";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function shortjean_nam() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/shortjean_nam";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function shortthun_nam() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/shortthun_nam";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function aokieu_nu() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/aokieu_nu";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function dam_nu() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/dam_nu";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function chanvay_nu() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/chanvay_nu";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function quanshort_nu() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/quanshort_nu";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function quanjean_nu() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/quanjean_nu";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function quanthun_nu() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/quanthun_nu";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function aosomi_nu() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/aosomi_nu";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function somitaydai_nu() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/somitaydai_nu";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function somitayngan_nu() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/somitayngan_nu";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function dangnhap() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/dangnhap";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
	public function dangki() {
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->get_sanpham();
		$data["sanpham"]=$rs;
		$data['content']="home/dangki";
		// $data['content1']="home/index"
		// $this->load->view("home/index",$data);
		$this->load->view("templates/frontend/master",$data);
	}
}