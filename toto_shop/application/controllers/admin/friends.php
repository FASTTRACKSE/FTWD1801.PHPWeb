<?php	class friends extends MY_Controller {
		public function index($cur_page=0) {
			$this->load->model("Friends_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("index.php/admin/friends/index?search=$search");
			$config['total_rows']=$this->Friends_model->count_rows($search);
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
			$data['content']="admin/friends/index";
			$data['friends']=$this->Friends_model->get_search($search,$cur_page,$config['per_page']);
			$this->load->view("templates/admin/master",$data);
			// echo "<pre>";
			// var_dump($users);
			// echo "</pre>";
		}
		public function edit($id) {
			$data["content"]="admin/friends/edit";
			$this->load->model("Friends_model");
			$this->load->library('form_validation');
			$item= $this->Friends_model->get_info($id);
			$data['item']=$item;
			
			$this->form_validation->set_rules("name","Họ tên","required");
			if($this->form_validation->run()==FALSE){
				$this->load->view("templates/admin/master",$data);
			}else{
				$name = $this->input->post('name');
				$detail = $this->input->post('detail');
				$level = $this->input->post('level');
				if(empty($name)) {
					$password=$item['name'];
				}
				$data=array(
					'name'=>$name,
					'detail'=>$detail,
					'level'=>$level
				);
				$rs=$this->Friends_model->edit($data,$id);
			if($rs) {
				$this->session->set_flashdata("msg",'sửa thành công');
				redirect("admin/friends/index");
			}else{
				redirect("admin/friends/edit/$id");
			}
			}
		}
		public function add() {
			$data["content"]="admin/friends/add";
			$this->load->model("Friends_model");
			$this->load->library('form_validation');
			$this->form_validation->set_rules("name","Tài khoản","required");
			if($this->form_validation->run()==false){
				$this->load->view("templates/admin/master",$data);	
			}else{
				$data= array(
					'name'=>$this->input->post("name"),
					'detail'=>$this->input->post("detail"),
					'level'=>$this->input->post("level")
				);
				$rs=$this->Friends_model->add($data);
				if($rs) {
				$this->session->set_flashdata("msg",'thêm thành công');
				redirect("admin/friends/index");
			}else{
				redirect("admin/friends/add");
			}
			}
		}
		public function delete($id) {
			$data['content']="admin/friends/delete";
			$data['id']=$id;
			$this->load->view("templates/admin/master",$data);
			// $data["content"]="admin/users";
			// $this->load->view("templates/admin/master",$data);

	}
	public function do_delete($id){
		$this->load->model("Friends_model");
		$rs=$this->Friends_model->delete($id);
		if($rs) {
			redirect("admin/friends/index");
		}else {
			redirect("admin/friends/delete/$id");
		}
	}
	}