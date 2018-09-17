
	<?php	class Huyen extends MY_Controller {
		public function index($cur_page=0) {
			 
			$this->load->model("Huyen_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("index.php/admin_DA/huyen/index?search=$search");
			$config['total_rows']=$this->Huyen_model->count_rows($search);
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
			$data['content']="admin_DA/huyen/index";
			$data['huyen']=$this->Huyen_model->get_search($search,$cur_page,$config['per_page']);
			$this->load->view("templates/admin_DA/master",$data);
			// echo "<pre>";
			// print_r($);
			// echo "</pre>"; die();

		}
		public function edit($id_huyen) {
			$data["content"]="admin_DA/huyen/edit";
			$this->load->model("Huyen_model");
			$this->load->library('form_validation');
			$item= $this->Huyen_model->get_info($id_huyen);
			$data['item']=$item;
			$this->form_validation->set_rules("ten","huyện","required");
			if($this->form_validation->run()==FALSE){
				$this->load->view("templates/admin_DA/master",$data);
			}else{
				$ten = $this->input->post('ten');
				$id_tinh = $this->input->post('id_tinh');
				$data=array(
					'ten'=>$ten,
					'id_tinh'=>$id_tinh
					);
				$rs=$this->Huyen_model->edit($data,$id_huyen);
			if($rs) {
				$this->session->set_flashdata("msg",'sửa thành công');
				redirect("admin_DA/huyen/index");
			}else{
				redirect("admin_DA/huyen/edit/$id_huyen");
			}
			}
		}
		public function add() {
			$data["content"]="admin_DA/huyen/add";
			$this->load->model("Huyen_model");
			$this->load->library('form_validation');
			$this->form_validation->set_rules("ten","huyện","required");
			if($this->form_validation->run()==false){
				$this->load->view("templates/admin_DA/master",$data);	
			}else{
				$data= array(
					'ten'=>$this->input->post("ten"),
					'id_tinh'=>$this->input->post("id_tinh")
				);
				$rs=$this->Huyen_model->add($data);
				if($rs) {
				$this->session->set_flashdata("msg",'thêm thành công');
				redirect("admin_DA/huyen/index");
			}else{
				redirect("admin_DA/huyen/add");
			}
			}
		}
		public function delete($id_huyen) {
			$data['content']="admin_DA/huyen/delete";
			$data['id_huyen']=$id_huyen;
			$this->load->view("templates/admin_DA/master",$data);
			// $data["content"]="admin_DA/users";
			// $this->load->view("templates/admin_DA/master",$data);

	}
	public function do_delete($id_huyen){
		$this->load->model("Huyen_model");
		$rs=$this->Huyen_model->delete($id_huyen);
		if($rs) {
			redirect("admin_DA/huyen/index");
		}else {
			redirect("admin_DA/huyen/delete/$id_huyen");
		}
	}
	}