
	<?php	class Danhsachsize extends MY_Controller {
		public function index($cur_page=0) {
			 
			$this->load->model("Danhsachsize_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("index.php/admin_DA/danhsachsize/index?search=$search");
			$config['total_rows']=$this->Danhsachsize_model->count_rows($search);
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
			$data['content']="admin_DA/danhsachsize/index";
			$data['danhsachsize']=$this->Danhsachsize_model->get_search($search,$cur_page,$config['per_page']);
			$this->load->view("templates/admin_DA/master",$data);
			// echo "<pre>";
			// print_r($);
			// echo "</pre>"; die();

		}
		public function edit($id_size) {
			$data["content"]="admin_DA/danhsachsize/edit";
			$this->load->model("Danhsachsize_model");
			$this->load->library('form_validation');
			$item= $this->Danhsachsize_model->get_info($id_size);
			$data['item']=$item;
			$this->form_validation->set_rules("ten","size","required");
			if($this->form_validation->run()==FALSE){
				$this->load->view("templates/admin_DA/master",$data);
			}else{
				$ten = $this->input->post('ten');
				$data=array(
					'ten'=>$ten,
					);
				$rs=$this->Danhsachsize_model->edit($data,$id_size);
			if($rs) {
				$this->session->set_flashdata("msg",'sửa thành công');
				redirect("admin_DA/danhsachsize/index");
			}else{
				redirect("admin_DA/danhsachsize/edit/$id_size");
			}
			}
		}
		public function add() {
			$data["content"]="admin_DA/danhsachsize/add";
			$this->load->model("Danhsachsize_model");
			$this->load->library('form_validation');
			$this->form_validation->set_rules("ten","cửa hàng","required");
			if($this->form_validation->run()==false){
				$this->load->view("templates/admin_DA/master",$data);	
			}else{
				$data= array(
					'ten'=>$this->input->post("ten"),
				);
				$rs=$this->Danhsachsize_model->add($data);
				if($rs) {
				$this->session->set_flashdata("msg",'thêm thành công');
				redirect("admin_DA/danhsachsize/index");
			}else{
				redirect("admin_DA/danhsachsize/add");
			}
			}
		}
		public function delete($id_size) {
			$data['content']="admin_DA/danhsachsize/delete";
			$data['id_size']=$id_size;
			$this->load->view("templates/admin_DA/master",$data);
			// $data["content"]="admin_DA/users";
			// $this->load->view("templates/admin_DA/master",$data);

	}
	public function do_delete($id_size){
		$this->load->model("Danhsachsize_model");
		$rs=$this->Danhsachsize_model->delete($id_size);
		if($rs) {
			redirect("admin_DA/danhsachsize/index");
		}else {
			redirect("admin_DA/danhsachsize/delete/$id_size");
		}
	}
	}