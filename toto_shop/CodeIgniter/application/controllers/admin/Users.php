<?php	class Users extends MY_Controller {
		public function index($cur_page=0) {
			 
			$this->load->model("Users_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("index.php/admin/users/index?search=$search");
			$config['total_rows']=$this->Users_model->count_rows($search);
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
			$data['content']="admin/users/index";
			$data['users']=$this->Users_model->get_search($search,$cur_page,$config['per_page']);
			$this->load->view("templates/admin/master",$data);

			// echo "<pre>";
			// var_dump($users);
			// echo "</pre>";
		}
		public function add() {
			$data["content"]="admin/users/add";
			$this->load->model("Users_model");
			$this->load->library('form_validation');
			$this->form_validation->set_rules("username","Tài khoản","required");
			if($this->form_validation->run()==false){
				$this->load->view("templates/admin/master",$data);	
			}else{
				$item= array(
					'username'=>$this->input->post("username"),
					'password'=>$this->input->post("password"),
					'fullname'=>$this->input->post("fullname"),
					'role'=>$this->input->post("role"),
					'status'=>$this->input->post("status")
				);
				$rs=$this->Users_model->add($item);
				if($rs) {
				$this->session->set_flashdata("msg",'thêm thành công');
				redirect("admin/users/index");
			}else{
				redirect("admin/users/add");
			}
			}
			


		}
		public function edit($id) {

			$data["content"]="home/edit";
			$this->load->model("Users_model");
			$this->load->library('form_validation');
			$item= $this->Users_model->get_info($id);
			$data['item']=$item;
			
			$this->form_validation->set_rules("fullname","Họ tên","required");
			if($this->form_validation->run()==FALSE){
				$this->load->view("templates/admin/master",$data);
			}else{
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$fullname = $this->input->post('fullname');
				$role = $this->input->post('role');
				$status = $this->input->post('status');
				if(empty($password)) {
					$password=$item['password'];
				}
				$data=array(
					'password'=>$password,
					'fullname'=>$fullname,
					'role'=>$role,
					'status'=>$status
				);
				$rs=$this->Users_model->edit($data,$id);
			if($rs) {
				$this->session->set_flashdata("msg",'sửa thành công');
				redirect("admin/users/index");
			}else{
				redirect("admin/users/edit/$id");
			}
			}
			
			// echo "<pre>";
			// var_dump($rs);
			// echo "</pre>";
		}
		public function delete($id) {
			$data['content']="admin/users/delete";
			$data['id']=$id;
			$this->load->view("templates/admin/master",$data);
			// $data["content"]="admin/users";
			// $this->load->view("templates/admin/master",$data);

	}
	public function do_delete($id){
		$this->load->model("Users_model");
		$rs=$this->Users_model->delete($id);
		if($rs) {
			redirect("admin/users/index");
		}else {
			redirect("admin/users/delete/$id");
		}
	}
}
?> 