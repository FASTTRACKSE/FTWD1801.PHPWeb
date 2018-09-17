<?php
		class My_controller extends CI_Controller{
			public function __construct(){
				parent::__construct();
				if($this->session->has_userdata(
					'user')==FALSE) {
					redirect("admin_DA/login/index");
				}
			}
		}
?>