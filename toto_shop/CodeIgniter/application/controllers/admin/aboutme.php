<?php	class aboutme extends MY_Controller {
		public function index() {
			$this->load->model("Aboutme_model");
			$aboutme=$this->Aboutme_model->get_aboutme();
			$data["aboutme"]=$aboutme;
			$data["content"]="admin/aboutme/index";
			$this->load->view("templates/admin/master",$data);
			// echo "<pre>";
			// var_dump($users);
			// echo "</pre>";
		}
		public function edit($id_aboutme) {
			$data["content"]="admin/aboutme/edit";
			$this->load->model("Aboutme_model");
			$this->load->library('form_validation');
			$item= $this->Aboutme_model->get_info($id_aboutme);
			$data['item']=$item;
			
			$this->form_validation->set_rules("name","Họ tên","required");
			if($this->form_validation->run()==FALSE){
				$this->load->view("templates/admin/master",$data);
			}else{
				$name = $this->input->post('name');
				$detail = $this->input->post('detail');
				$phone = $this->input->post('phone');
				$address = $this->input->post('address');
				$sex = $this->input->post('sex');
				$facebook = $this->input->post('facebook');
				$skype = $this->input->post('skype');
				$twitter = $this->input->post('twitter');
				$birthday = $this->input->post('birthday');
				if(empty($name)) {
					$password=$item['name'];
				}
				$data=array(
					'name'=>$name,
					'detail'=>$detail,
					'phone'=>$phone,
					'address'=>$address,
					'sex'=>$sex,
					'facebook'=>$facebook,
					'skype'=>$skype,
					'twitter'=>$twitter,
					'birthday'=>$birthday
				);
				$rs=$this->Aboutme_model->edit($data,$id_aboutme);
			if($rs) {
				$this->session->set_flashdata("msg",'sửa thành công');
				redirect("admin/aboutme/index");
			}else{
				redirect("admin/aboutme/edit/$id_aboutme");
			}
			}
		}
		public function delete($id_aboutme) {
			$data['content']="admin/aboutme/delete";
			$data['id_aboutme']=$id_aboutme;
			$this->load->view("templates/admin/master",$data);
			// $data["content"]="admin/users";
			// $this->load->view("templates/admin/master",$data);

	}
	public function do_delete($id_aboutme){
		$this->load->model("Aboutme_model");
		$rs=$this->Aboutme_model->delete($id_aboutme);
		if($rs) {
			redirect("admin/aboutme/index");
		}else {
			redirect("admin/aboutme/delete/$id_aboutme");
		}
	}
	}