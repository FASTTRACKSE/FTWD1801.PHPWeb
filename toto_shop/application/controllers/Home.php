<?php
class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Sanpham_model");
		$this->load->model("Hinhanh_model");
		$this->load->model("Tintuc_model");
		$this->load->library("cart");
		$this->load->helper(array('url', 'form'));
		$this->load->model("Home_model");
	}
	public function index() {
		$rs=$this->Sanpham_model->get_sanphamtrangchu();
		$rs2=$this->Hinhanh_model->get_hinhanh();
		$rs1=$this->Sanpham_model->get_sanpham1();
		$sanphamhangdau=$this->Sanpham_model->get_sanphamhangdau();
		$tintuc=$this->Tintuc_model->get_tintuc();
		$data["sanphamtrangchu"]=$rs;
		$data["hinhanh"]=$rs2;
		$data["sanpham1"]=$rs1;
		$data["sanphamhangdau"]=$sanphamhangdau;
		$data["tintuc"]=$tintuc;
		$data['content']="home/index";
		$this->load->view("templates/frontend/master",$data);
	}
	public function donam(){
			$this->load->model("Sanpham_model");
			$rs=$this->Sanpham_model->get_donam();
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("home/donam?search=$search");
			$config['total_rows']=$this->Sanpham_model->count_rows($search);
			$config['per_page']=12;
			$config['page_query_string']=TRUE;
			$config['full_tag_open']="<ul class='pagination'>";
			$config['full_tag_close']="</ul>";
			$config['first_tag_open']="<li class='pagination_button'>";
			$config['first_tag_close']="</li>";
			$config['last_tag_open']="<li class='pagination_button'>";
			$config['last_tag_close']="</li>";
			$config['num_tag_open']=$config['prev_tag_open']=$config['next_tag_open']="<li class='pagination_button'>";
			$config['num_tag_close']=$config['prev_tag_close']=$config['next_tag_close']="</li>";
			$config['cur_tag_open']="<li class='pagination_button active'><a href='#'>";
			$config['cur_tag_close']="</a></li>";
			$this->pagination->initialize($config);
			$data['content']="home/donam";
			$data["donam"]=$rs;
			$data['donam']=$this->Sanpham_model->get_search($search,$cur_page,$config['per_page']);
			$this->load->view("templates/frontend/master",$data);
	}

	public function chitietsanpham($id_sp){
		$rs=$this->Sanpham_model->get_chitietsanpham($id_sp);
		$rs1=$this->Sanpham_model->get_sanphamcungdanhmuc();
		$data['chitiet'] = $this->Sanpham_model->getListImage($id_sp);
		$data["chitietsanpham"]=$rs;
		$data["sanphamcungdanhmuc"]=$rs1;
		$data['content']="home/chitietsanpham";
		$this->load->view("templates/frontend/master",$data);
		// echo "<pre>";
		// print_r($rs);
		// echo "</pre>";die();
	}
	public function tintuc() {
		$rs=$this->Tintuc_model->get_tintuc2();
		$tintuc=$this->Tintuc_model->get_tintuc();
		$data['tintuc2']=$rs;
		$data["tintuc"]=$tintuc;
		$data['content']="home/tintuc";
		$this->load->view("templates/frontend/master",$data);
		// echo "<pre>";
		// print_r($rs);
		// echo "</pre>";die();
	}
	public function donu(){
		$this->load->model("Sanpham_model");
			$rs=$this->Sanpham_model->get_donu();
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("home/donu?search=$search");
			$config['total_rows']=$this->Sanpham_model->count_rows($search);
			$config['per_page']=12;
			$config['page_query_string']=TRUE;
			$config['full_tag_open']="<ul class='pagination'>";
			$config['full_tag_close']="</ul>";
			$config['first_tag_open']="<li class='pagination_button'>";
			$config['first_tag_close']="</li>";
			$config['last_tag_open']="<li class='pagination_button'>";
			$config['last_tag_close']="</li>";
			$config['num_tag_open']=$config['prev_tag_open']=$config['next_tag_open']="<li class='pagination_button'>";
			$config['num_tag_close']=$config['prev_tag_close']=$config['next_tag_close']="</li>";
			$config['cur_tag_open']="<li class='pagination_button active'><a href='#'>";
			$config['cur_tag_close']="</a></li>";
			$this->pagination->initialize($config);
			$data['content']="home/donu";
			$data["donu"]=$rs;
			$data['donu']=$this->Sanpham_model->get_search2($search,$cur_page,$config['per_page']);
			$this->load->view("templates/frontend/master",$data);
		// echo "<pre>";
		// print_r($rs);
		// echo "</pre>";die();
	}
	public function aothunnam(){
			$this->load->model("Sanpham_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("home/aothunnam?search=$search");
			$config['total_rows']=$this->Sanpham_model->count_rows($search);
			$config['per_page']=12;
			$config['page_query_string']=TRUE;
			$config['full_tag_open']="<ul class='pagination'>";
			$config['full_tag_close']="</ul>";
			$config['first_tag_open']="<li class='pagination_button'>";
			$config['first_tag_close']="</li>";
			$config['last_tag_open']="<li class='pagination_button'>";
			$config['last_tag_close']="</li>";
			$config['num_tag_open']=$config['prev_tag_open']=$config['next_tag_open']="<li class='pagination_button'>";
			$config['num_tag_close']=$config['prev_tag_close']=$config['next_tag_close']="</li>";
			$config['cur_tag_open']="<li class='pagination_button active'><a href='#'>";
			$config['cur_tag_close']="</a></li>";
			$this->pagination->initialize($config);
			$rs=$this->Sanpham_model->get_aothunnam();
			$data['content']="home/aothunnam";
			$data["aothunnam"]=$rs;
			$data['aothunnam']=$this->Sanpham_model->get_search3($search,$cur_page,$config['per_page']);
			$this->load->view("templates/frontend/master",$data);
			// echo "<pre>";
			// print_r($rs);
			// echo "</pre>";die();
	}
	public function aosominam(){
			$this->load->model("Sanpham_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("home/aosominam?search=$search");
			$config['total_rows']=$this->Sanpham_model->count_rows($search);
			$config['per_page']=12;
			$config['page_query_string']=TRUE;
			$config['full_tag_open']="<ul class='pagination'>";
			$config['full_tag_close']="</ul>";
			$config['first_tag_open']="<li class='pagination_button'>";
			$config['first_tag_close']="</li>";
			$config['last_tag_open']="<li class='pagination_button'>";
			$config['last_tag_close']="</li>";
			$config['num_tag_open']=$config['prev_tag_open']=$config['next_tag_open']="<li class='pagination_button'>";
			$config['num_tag_close']=$config['prev_tag_close']=$config['next_tag_close']="</li>";
			$config['cur_tag_open']="<li class='pagination_button active'><a href='#'>";
			$config['cur_tag_close']="</a></li>";
			$this->pagination->initialize($config);
			$rs=$this->Sanpham_model->get_aosominam();
			$data['content']="home/aosominam";
			$data["aosominam"]=$rs;
			$data['aosominam']=$this->Sanpham_model->get_search4($search,$cur_page,$config['per_page']);
			$this->load->view("templates/frontend/master",$data);
			// echo "<pre>";
			// print_r($rs);
			// echo "</pre>";die();
	}
	public function quanjean_nam(){
			$this->load->model("Sanpham_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("home/quanjean_nam?search=$search");
			$config['total_rows']=$this->Sanpham_model->count_rows($search);
			$config['per_page']=12;
			$config['page_query_string']=TRUE;
			$config['full_tag_open']="<ul class='pagination'>";
			$config['full_tag_close']="</ul>";
			$config['first_tag_open']="<li class='pagination_button'>";
			$config['first_tag_close']="</li>";
			$config['last_tag_open']="<li class='pagination_button'>";
			$config['last_tag_close']="</li>";
			$config['num_tag_open']=$config['prev_tag_open']=$config['next_tag_open']="<li class='pagination_button'>";
			$config['num_tag_close']=$config['prev_tag_close']=$config['next_tag_close']="</li>";
			$config['cur_tag_open']="<li class='pagination_button active'><a href='#'>";
			$config['cur_tag_close']="</a></li>";
			$this->pagination->initialize($config);
			$rs=$this->Sanpham_model->get_quanjean_nam();
			$data['content']="home/quanjean_nam";
			$data["quanjean_nam"]=$rs;
			$data['quanjean_nam']=$this->Sanpham_model->get_search5($search,$cur_page,$config['per_page']);
			$this->load->view("templates/frontend/master",$data);
			// echo "<pre>";
			// print_r($rs);
			// echo "</pre>";die();
	}
	public function quankaki_nam(){
			$this->load->model("Sanpham_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("home/quankaki_nam?search=$search");
			$config['total_rows']=$this->Sanpham_model->count_rows($search);
			$config['per_page']=12;
			$config['page_query_string']=TRUE;
			$config['full_tag_open']="<ul class='pagination'>";
			$config['full_tag_close']="</ul>";
			$config['first_tag_open']="<li class='pagination_button'>";
			$config['first_tag_close']="</li>";
			$config['last_tag_open']="<li class='pagination_button'>";
			$config['last_tag_close']="</li>";
			$config['num_tag_open']=$config['prev_tag_open']=$config['next_tag_open']="<li class='pagination_button'>";
			$config['num_tag_close']=$config['prev_tag_close']=$config['next_tag_close']="</li>";
			$config['cur_tag_open']="<li class='pagination_button active'><a href='#'>";
			$config['cur_tag_close']="</a></li>";
			$this->pagination->initialize($config);
			$rs=$this->Sanpham_model->get_quankaki_nam();
			$data['content']="home/quankaki_nam";
			$data["quankaki_nam"]=$rs;
			$data['quankaki_nam']=$this->Sanpham_model->get_search6($search,$cur_page,$config['per_page']);
			$this->load->view("templates/frontend/master",$data);
			// echo "<pre>";
			// print_r($rs);
			// echo "</pre>";die();
	}
	public function quanjogger_nam(){
			$this->load->model("Sanpham_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("home/quanjogger_nam?search=$search");
			$config['total_rows']=$this->Sanpham_model->count_rows($search);
			$config['per_page']=12;
			$config['page_query_string']=TRUE;
			$config['full_tag_open']="<ul class='pagination'>";
			$config['full_tag_close']="</ul>";
			$config['first_tag_open']="<li class='pagination_button'>";
			$config['first_tag_close']="</li>";
			$config['last_tag_open']="<li class='pagination_button'>";
			$config['last_tag_close']="</li>";
			$config['num_tag_open']=$config['prev_tag_open']=$config['next_tag_open']="<li class='pagination_button'>";
			$config['num_tag_close']=$config['prev_tag_close']=$config['next_tag_close']="</li>";
			$config['cur_tag_open']="<li class='pagination_button active'><a href='#'>";
			$config['cur_tag_close']="</a></li>";
			$this->pagination->initialize($config);
			$rs=$this->Sanpham_model->get_quanjogger_nam();
			$data['content']="home/quanjogger_nam";
			$data["quanjogger_nam"]=$rs;
			$data['quanjogger_nam']=$this->Sanpham_model->get_search7($search,$cur_page,$config['per_page']);
			$this->load->view("templates/frontend/master",$data);
			// echo "<pre>";
			// print_r($rs);
			// echo "</pre>";die();
	}
	public function quanshort_nam(){
			$this->load->model("Sanpham_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("home/quanshort_nam?search=$search");
			$config['total_rows']=$this->Sanpham_model->count_rows($search);
			$config['per_page']=12;
			$config['page_query_string']=TRUE;
			$config['full_tag_open']="<ul class='pagination'>";
			$config['full_tag_close']="</ul>";
			$config['first_tag_open']="<li class='pagination_button'>";
			$config['first_tag_close']="</li>";
			$config['last_tag_open']="<li class='pagination_button'>";
			$config['last_tag_close']="</li>";
			$config['num_tag_open']=$config['prev_tag_open']=$config['next_tag_open']="<li class='pagination_button'>";
			$config['num_tag_close']=$config['prev_tag_close']=$config['next_tag_close']="</li>";
			$config['cur_tag_open']="<li class='pagination_button active'><a href='#'>";
			$config['cur_tag_close']="</a></li>";
			$this->pagination->initialize($config);
			$rs=$this->Sanpham_model->get_quanshort_nam();
			$data['content']="home/quanshort_nam";
			$data["quanshort_nam"]=$rs;
			$data['quanshort_nam']=$this->Sanpham_model->get_search8($search,$cur_page,$config['per_page']);
			$this->load->view("templates/frontend/master",$data);
			// echo "<pre>";
			// print_r($rs);
			// echo "</pre>";die();
	}
	public function aokieu_nu(){
			$this->load->model("Sanpham_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("home/aokieu_nu?search=$search");
			$config['total_rows']=$this->Sanpham_model->count_rows($search);
			$config['per_page']=12;
			$config['page_query_string']=TRUE;
			$config['full_tag_open']="<ul class='pagination'>";
			$config['full_tag_close']="</ul>";
			$config['first_tag_open']="<li class='pagination_button'>";
			$config['first_tag_close']="</li>";
			$config['last_tag_open']="<li class='pagination_button'>";
			$config['last_tag_close']="</li>";
			$config['num_tag_open']=$config['prev_tag_open']=$config['next_tag_open']="<li class='pagination_button'>";
			$config['num_tag_close']=$config['prev_tag_close']=$config['next_tag_close']="</li>";
			$config['cur_tag_open']="<li class='pagination_button active'><a href='#'>";
			$config['cur_tag_close']="</a></li>";
			$this->pagination->initialize($config);
			$rs=$this->Sanpham_model->get_aokieu_nu();
			$data['content']="home/aokieu_nu";
			$data["aokieu_nu"]=$rs;
			$data['aokieu_nu']=$this->Sanpham_model->get_search9($search,$cur_page,$config['per_page']);
			$this->load->view("templates/frontend/master",$data);
			// echo "<pre>";
			// print_r($rs);
			// echo "</pre>";die();
	}
	public function dam_nu(){
			$this->load->model("Sanpham_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("home/dam_nu?search=$search");
			$config['total_rows']=$this->Sanpham_model->count_rows($search);
			$config['per_page']=12;
			$config['page_query_string']=TRUE;
			$config['full_tag_open']="<ul class='pagination'>";
			$config['full_tag_close']="</ul>";
			$config['first_tag_open']="<li class='pagination_button'>";
			$config['first_tag_close']="</li>";
			$config['last_tag_open']="<li class='pagination_button'>";
			$config['last_tag_close']="</li>";
			$config['num_tag_open']=$config['prev_tag_open']=$config['next_tag_open']="<li class='pagination_button'>";
			$config['num_tag_close']=$config['prev_tag_close']=$config['next_tag_close']="</li>";
			$config['cur_tag_open']="<li class='pagination_button active'><a href='#'>";
			$config['cur_tag_close']="</a></li>";
			$this->pagination->initialize($config);
			$rs=$this->Sanpham_model->get_dam_nu();
			$data['content']="home/dam_nu";
			$data["dam_nu"]=$rs;
			$data['dam_nu']=$this->Sanpham_model->get_search10($search,$cur_page,$config['per_page']);
			$this->load->view("templates/frontend/master",$data);
			// echo "<pre>";
			// print_r($rs);
			// echo "</pre>";die();
	}
	public function chan_vay(){
			$this->load->model("Sanpham_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("home/chan_vay?search=$search");
			$config['total_rows']=$this->Sanpham_model->count_rows($search);
			$config['per_page']=12;
			$config['page_query_string']=TRUE;
			$config['full_tag_open']="<ul class='pagination'>";
			$config['full_tag_close']="</ul>";
			$config['first_tag_open']="<li class='pagination_button'>";
			$config['first_tag_close']="</li>";
			$config['last_tag_open']="<li class='pagination_button'>";
			$config['last_tag_close']="</li>";
			$config['num_tag_open']=$config['prev_tag_open']=$config['next_tag_open']="<li class='pagination_button'>";
			$config['num_tag_close']=$config['prev_tag_close']=$config['next_tag_close']="</li>";
			$config['cur_tag_open']="<li class='pagination_button active'><a href='#'>";
			$config['cur_tag_close']="</a></li>";
			$this->pagination->initialize($config);
			$rs=$this->Sanpham_model->get_chan_vay();
			$data['content']="home/chan_vay";
			$data["chan_vay"]=$rs;
			$data['chan_vay']=$this->Sanpham_model->get_search11($search,$cur_page,$config['per_page']);
			$this->load->view("templates/frontend/master",$data);
			// echo "<pre>";
			// print_r($rs);
			// echo "</pre>";die();
	}
	public function somi_nu(){
			$this->load->model("Sanpham_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("home/somi_nu?search=$search");
			$config['total_rows']=$this->Sanpham_model->count_rows($search);
			$config['per_page']=12;
			$config['page_query_string']=TRUE;
			$config['full_tag_open']="<ul class='pagination'>";
			$config['full_tag_close']="</ul>";
			$config['first_tag_open']="<li class='pagination_button'>";
			$config['first_tag_close']="</li>";
			$config['last_tag_open']="<li class='pagination_button'>";
			$config['last_tag_close']="</li>";
			$config['num_tag_open']=$config['prev_tag_open']=$config['next_tag_open']="<li class='pagination_button'>";
			$config['num_tag_close']=$config['prev_tag_close']=$config['next_tag_close']="</li>";
			$config['cur_tag_open']="<li class='pagination_button active'><a href='#'>";
			$config['cur_tag_close']="</a></li>";
			$this->pagination->initialize($config);
			$rs=$this->Sanpham_model->get_somi_nu();
			$data['content']="home/somi_nu";
			$data["somi_nu"]=$rs;
			$data['somi_nu']=$this->Sanpham_model->get_search12($search,$cur_page,$config['per_page']);
			$this->load->view("templates/frontend/master",$data);
			// echo "<pre>";
			// print_r($rs);
			// echo "</pre>";die();
	}
	public function quanjean_nu(){
			$this->load->model("Sanpham_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("home/quanjean_nu?search=$search");
			$config['total_rows']=$this->Sanpham_model->count_rows($search);
			$config['per_page']=12;
			$config['page_query_string']=TRUE;
			$config['full_tag_open']="<ul class='pagination'>";
			$config['full_tag_close']="</ul>";
			$config['first_tag_open']="<li class='pagination_button'>";
			$config['first_tag_close']="</li>";
			$config['last_tag_open']="<li class='pagination_button'>";
			$config['last_tag_close']="</li>";
			$config['num_tag_open']=$config['prev_tag_open']=$config['next_tag_open']="<li class='pagination_button'>";
			$config['num_tag_close']=$config['prev_tag_close']=$config['next_tag_close']="</li>";
			$config['cur_tag_open']="<li class='pagination_button active'><a href='#'>";
			$config['cur_tag_close']="</a></li>";
			$this->pagination->initialize($config);
			$rs=$this->Sanpham_model->get_quanjean_nu();
			$data['content']="home/quanjean_nu";
			$data["quanjean_nu"]=$rs;
			$data['quanjean_nu']=$this->Sanpham_model->get_search13($search,$cur_page,$config['per_page']);
			$this->load->view("templates/frontend/master",$data);
			// echo "<pre>";
			// print_r($rs);
			// echo "</pre>";die();
	}
	public function quanshort_nu(){
			$this->load->model("Sanpham_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("home/quanshort_nu?search=$search");
			$config['total_rows']=$this->Sanpham_model->count_rows($search);
			$config['per_page']=12;
			$config['page_query_string']=TRUE;
			$config['full_tag_open']="<ul class='pagination'>";
			$config['full_tag_close']="</ul>";
			$config['first_tag_open']="<li class='pagination_button'>";
			$config['first_tag_close']="</li>";
			$config['last_tag_open']="<li class='pagination_button'>";
			$config['last_tag_close']="</li>";
			$config['num_tag_open']=$config['prev_tag_open']=$config['next_tag_open']="<li class='pagination_button'>";
			$config['num_tag_close']=$config['prev_tag_close']=$config['next_tag_close']="</li>";
			$config['cur_tag_open']="<li class='pagination_button active'><a href='#'>";
			$config['cur_tag_close']="</a></li>";
			$this->pagination->initialize($config);
			$rs=$this->Sanpham_model->get_quanshort_nu();
			$data['content']="home/quanshort_nu";
			$data["quanshort_nu"]=$rs;
			$data['quanshort_nu']=$this->Sanpham_model->get_search14($search,$cur_page,$config['per_page']);
			$this->load->view("templates/frontend/master",$data);
			// echo "<pre>";
			// print_r($rs);
			// echo "</pre>";die();
	}
	public function quanthun_nu(){
			$this->load->model("Sanpham_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("home/quanthun_nu?search=$search");
			$config['total_rows']=$this->Sanpham_model->count_rows($search);
			$config['per_page']=12;
			$config['page_query_string']=TRUE;
			$config['full_tag_open']="<ul class='pagination'>";
			$config['full_tag_close']="</ul>";
			$config['first_tag_open']="<li class='pagination_button'>";
			$config['first_tag_close']="</li>";
			$config['last_tag_open']="<li class='pagination_button'>";
			$config['last_tag_close']="</li>";
			$config['num_tag_open']=$config['prev_tag_open']=$config['next_tag_open']="<li class='pagination_button'>";
			$config['num_tag_close']=$config['prev_tag_close']=$config['next_tag_close']="</li>";
			$config['cur_tag_open']="<li class='pagination_button active'><a href='#'>";
			$config['cur_tag_close']="</a></li>";
			$this->pagination->initialize($config);
			$rs=$this->Sanpham_model->get_quanthun_nu();
			$data['content']="home/quanthun_nu";
			$data["quanthun_nu"]=$rs;
			$data['quanthun_nu']=$this->Sanpham_model->get_search15($search,$cur_page,$config['per_page']);
			$this->load->view("templates/frontend/master",$data);
			// echo "<pre>";
			// print_r($rs);
			// echo "</pre>";die();
	}



	public function shopping_cart()
	{	
		$rs=$this->Sanpham_model->get_sanphamquantam();
		$data["sanphamquantam"]=$rs;
		$data['items'] = $this->cart->contents();
		$data['content']="home/shopping_cart";
		$this->load->view("templates/frontend/master",$data);
	}
	public function insert($id_sp){
        //Show thong tin chi tiet gio hang
        $product = $this->Home_model->getShopIdBy($id_sp);
		$data = array(
        'id'      => $product->id_sp,
        'qty'     => 1,
        'price'   => $product->gia,
        'name'    => $product->tensp,
        'option' => array(
        	'img'=> $product->hinhanh,
        	'size'=>$product->size,
        	'rating'=>$product->rating
        	)
 		);
			// echo "<pre>";
			// var_dump($this->cart->insert($data));
			// echo "<pre>";
		 if($this->cart->insert($data)){
             redirect('http://localhost/FTWD1801.PHPWeb/toto_shop/Home');
        }else{
            redirect('Home');
        }
	}

	public function delete($rowid)
    {	
    	$this->cart->update(array('rowid' => $rowid, 'qty' => 0));
		redirect('Home/shopping_cart');
    }

	public function updateCart()
	{
		$i = 1;

		foreach ($this->cart->contents() as $item) 
		{
			$this->cart->update(array(
				'rowid' => $item['rowid'], 
				'qty' => $_POST['qty'.$i],
				 'size' => $_POST['option']['size'])
		);
			$i++;
		}
		$data['items'] = $this->cart->contents();
		$data['content']="home/shopping_cart";
		$this->load->view("templates/frontend/master",$data);
	}

	public function checkoutthanhcong()
	{	
		$data['content']="home/checkoutthanhcong";
		$this->load->view("templates/frontend/master",$data);
	}

	public function addCheckOut()
	{	
		
		$data['content']='home/checkout';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('hovaten', 'Họ Và Tên', 'required');
		$this->form_validation->set_rules('sodienthoai', 'Số Điện Thoại', 'required');
		$this->form_validation->set_rules('diachi', 'Địa Chỉ', 'required');
		$this->form_validation->set_rules('xaphuong', 'Xã/Phường', 'required');
		$this->form_validation->set_rules('huyenquan', 'Huyện/Quận', 'required');
		$this->form_validation->set_rules('tinhthanhpho', 'Tỉnh/Thành Phố', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/frontend/master',$data);
		}
		else
		{
			$add = array(
				'hovaten'=>$this->input->post('hovaten'),
				'sodienthoai' => $this->input->post('sodienthoai'),
				'diachi'=>$this->input->post('diachi'),
				'xaphuong'=>$this->input->post('xaphuong'),
				'huyenquan'=>$this->input->post('huyenquan'),
				'tinhthanhpho'=>$this->input->post('tinhthanhpho')
			);

			$id_kh = $this->Home_model->addKhachHang($add);
			$total = $this->cart->total();
			$arr = array(
				'tongtien' => $total,
				'ngay_tao' => date('Y-m-d'),
				'id_kh' =>$id_kh

			);
			$id_hd = $this->Home_model->addHoaDon($arr);
			//
			
			foreach ($this->cart->contents() as $value) {
				$array = array(
					'id_hd' => $id_hd,
					'id_sp' => $value['id'],
					'soluong' => $value['qty'],
					'id_size'=>$value['option']['size']


				);
				$sr = $this->Home_model->addHoaDonChiTiet($array);
				if ($rs) {
				redirect('home/checkoutthanhcong');
				} else {
				redirect('home/checkout');
				}
			};
			//
			$this->cart->destroy();
			// echo "thanh cong";
		}
	}
}