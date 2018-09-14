<?php
		class Login extends CI_Controller{
			public function index() {
				$this->load->library("form_validation");
				$this->form_validation->set_rules("username",'Tài khoản',"required");
				$this->form_validation->set_rules("password",'Mật khẩu',"required");
				if($this->form_validation->run()==FALSE){
					$this->load->view("admin/login/index");
				} else {
					$this->load->model("Users_model");

					$username=$this->input->post("username");
					$password=$this->input->post("password");
					$ketqua=$this->Users_model->check_user($username,$password);
					if($ketqua!=NULL) {
						
						$this->session->set_userdata("user",$ketqua);
						redirect("admin/aboutme/index");

					}else {
						$this->session->set_flashdata("msg",'đăng nhập thất bại');
						redirect("admin/login/index");
					}
				}
			}
			public function Logout() {
				$this->session->unset_userdata("user");
				redirect("admin/login/index");
			}
		}
?>