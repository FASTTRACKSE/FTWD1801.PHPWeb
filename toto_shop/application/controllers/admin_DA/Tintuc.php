<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tintuc extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index($cur_page=0)
	{
		
		$this->load->model("Tintuc_model");
		$cur_page=$this->input->get("per_page"); 
		$this->load->library("pagination");
		$search=$this->input->get("search");
		$config['base_url']=base_url("index.php/admin_DA/tintuc/index?search=$search");
		$config['total_rows']=$this->Tintuc_model->count_rows($search);
		$config['per_page']=5;
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
		$data['content']="admin_DA/tintuc/index";
		$data['tinh']=$this->Tintuc_model->get_search($search,$cur_page,$config['per_page']);
		$this->load->view("templates/admin_DA/master",$data);
	}

	public function add() {
			$data["content"]="admin_DA/tintuc/add";
			$this->load->model("Tintuc_model");
			$this->load->library('form_validation');
			$this->form_validation->set_rules("ckfinder","Nội dung","required");
			if($this->form_validation->run()==false){
				$this->load->view("templates/admin_DA/master",$data);	
			}else{
				$data= array(
					'noidung'=>$this->input->post("ckfinder"),
				);
				$rs=$this->Tintuc_model->add($data);
				if($rs) {
				$this->session->set_flashdata("msg",'thêm thành công');
				redirect("admin_DA/tintuc/index");
			}else{
				redirect("admin_DA/tintuc/add");
			}
			}
		}

}

/* End of file Tintuc.php */
/* Location: ./application/controllers/Tintuc.php */