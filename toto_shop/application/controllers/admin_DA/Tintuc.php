<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tintuc extends CI_Controller {

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
		$config['base_url']=base_url("admin_DA/tintuc/index?search=$search");
		$config['total_rows']=$this->Tintuc_model->count_rows($search);
		$config['per_page']=1;
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
		$data['tintuc']=$this->Tintuc_model->get_search($search,$cur_page,$config['per_page']);
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

	public function delete($id) {
		$data['content']="admin_DA/tintuc/delete";
		$data['id']=$id;
		$this->load->view("templates/admin_DA/master",$data);
	}

	public function do_delete($id){
		$this->load->model("Tintuc_model");
		$rs=$this->Tintuc_model->delete($id);
		if($rs) {
			redirect("admin_DA/tintuc/index");
		}else {
			redirect("admin_DA/tintuc/delete/$id");
		}
	}

	public function edit($id) {
		$data["content"]="admin_DA/tintuc/edit";
		$this->load->model("Tintuc_model");
		$this->load->library('form_validation');
		$item= $this->Tintuc_model->get_info($id);
		$data['item']=$item;
		$this->form_validation->set_rules("ckfinder","Nội dung","required");
		if($this->form_validation->run()==FALSE){
			$this->load->view("templates/admin_DA/master",$data);
		}else{
		$ckfinder = $this->input->post('ckfinder');
		$data=array(
			'noidung'=>$ckfinder,
			);
		$rs = $this->Tintuc_model->edit($data,$id);
		if($rs) {
			$this->session->set_flashdata("msg",'sửa thành công');
			redirect("admin_DA/tintuc/index");
		}else{
			redirect("admin_DA/tintuc/edit/$id");
		    }
			}
		}
}

/* End of file Tintuc.php */
/* Location: ./application/controllers/Tintuc.php */