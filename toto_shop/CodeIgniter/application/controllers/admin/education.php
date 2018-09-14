<?php	class education extends MY_Controller {
		public function index($cur_page=0) {
			$this->load->model("Education_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("index.php/admin/education/index?search=$search");
			$config['total_rows']=$this->Education_model->count_rows($search);
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
			$data['content']="admin/education/index";
			$data['education']=$this->Education_model->get_search($search,$cur_page,$config['per_page']);
			$this->load->view("templates/admin/master",$data);
			// echo "<pre>";
			// var_dump($users);
			// echo "</pre>";
		}
		public function edit($id) {
			$data["content"]="admin/education/edit";
			$this->load->model("Education_model");
			$this->load->library('form_validation');
			$item= $this->Education_model->get_info($id);
			$data['item']=$item;
			
			$this->form_validation->set_rules("name","Họ tên","required");
			if($this->form_validation->run()==FALSE){
				$this->load->view("templates/admin/master",$data);
			}else{
				$name = $this->input->post('name');
				$year_start = $this->input->post('year_start');
				$year_end = $this->input->post('year_end');
				if(empty($name)) {
					$password=$item['name'];
				}
				$data=array(
					'name'=>$name,
					'year_start'=>$year_start,
					'year_end'=>$year_end
				);
				$rs=$this->Education_model->edit($data,$id);
			if($rs) {
				$this->session->set_flashdata("msg",'sửa thành công');
				redirect("admin/education/index");
			}else{
				redirect("admin/education/edit/$id");
			}
			}
		}
		public function add() {
			$data["content"]="admin/education/add";
			$this->load->model("Education_model");
			$this->load->library('form_validation');
			$this->form_validation->set_rules("name","Tài khoản","required");
			if($this->form_validation->run()==false){
				$this->load->view("templates/admin/master",$data);	
			}else{
				$data= array(
					'name'=>$this->input->post("name"),
					'year_start'=>$this->input->post("year_start"),
					'year_end'=>$this->input->post("year_end")
				);
				$rs=$this->Education_model->add($data);
				if($rs) {
				$this->session->set_flashdata("msg",'thêm thành công');
				redirect("admin/education/index");
			}else{
				redirect("admin/education/add");
			}
			}
		}
		public function delete($id) {
			$data['content']="admin/education/delete";
			$data['id']=$id;
			$this->load->view("templates/admin/master",$data);
			// $data["content"]="admin/users";
			// $this->load->view("templates/admin/master",$data);

	}
	public function do_delete($id){
		$this->load->model("Education_model");
		$rs=$this->Education_model->delete($id);
		if($rs) {
			redirect("admin/education/index");
		}else {
			redirect("admin/education/delete/$id");
		}
	}
	}