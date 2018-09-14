<?php	class contact extends MY_Controller {
		public function index($cur_page=0) {
			$this->load->model("Contact_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("index.php/admin/contact/index?search=$search");
			$config['total_rows']=$this->Contact_model->count_rows($search);
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
			$data['content']="admin/contact/index";
			$data['contact']=$this->Contact_model->get_search($search,$cur_page,$config['per_page']);
			$this->load->view("templates/admin/master",$data);
		}
		public function edit($id_contact) {
			$data["content"]="admin/contact/edit";
			$this->load->model("Contact_model");
			$this->load->library('form_validation');
			$item= $this->Contact_model->get_info($id_contact);
			$data['item']=$item;
			
			$this->form_validation->set_rules("name","Họ tên","required");
			if($this->form_validation->run()==FALSE){
				$this->load->view("templates/admin/master",$data);
			}else{
				$name = $this->input->post('name');
				$email = $this->input->post('email');
				$address = $this->input->post('address');
				$phone = $this->input->post('phone');
				$content = $this->input->post('content');
				$status = $this->input->post('status');
				if(empty($name)) {
					$password=$item['name'];
				}
				$data=array(
					'name'=>$name,
					'email'=>$email,
					'address'=>$address,
					'phone'=>$phone,
					'content'=>$content,
					'status'=>$status
				);
				$rs=$this->Contact_model->edit($data,$id);
			if($rs) {
				$this->session->set_flashdata("msg",'sửa thành công');
				redirect("admin/contact/index");
			}else{
				redirect("admin/contact/edit/$id_contact");
			}
			}
		}
		public function add() {
			$data["content"]="admin/contact/add";
			$this->load->model("Contact_model");
			$this->load->library('form_validation');
			$this->form_validation->set_rules("name","Tài khoản","required");
			if($this->form_validation->run()==false){
				$this->load->view("templates/admin/master",$data);	
			}else{
				$data= array(
					'name'=>$this->input->post("name"),
					'email'=>$this->input->post("email"),
					'address'=>$this->input->post("address"),
					'phone'=>$this->input->post("phone"),
					'content'=>$this->input->post("content"),
					'status'=>$this->input->post("status")
				);
				$rs=$this->Contact_model->add($data);
				if($rs) {
				$this->session->set_flashdata("msg",'thêm thành công');
				redirect("admin/contact/index");
			}else{
				redirect("admin/contact/add");
			}
			}
		}
		public function delete($id_contact) {
			$data['content']="admin/contact/delete";
			$data['id_contact']=$id_contact;
			$this->load->view("templates/admin/master",$data);
			// $data["content"]="admin/users";
			// $this->load->view("templates/admin/master",$data);

	}
	public function do_delete($id_contact){
		$this->load->model("Contact_model");
		$rs=$this->Contact_model->delete($id_contact);
		if($rs) {
			redirect("admin/contact/index");
		}else {
			redirect("admin/contact/delete/$id_contact");
		}
	}
	}