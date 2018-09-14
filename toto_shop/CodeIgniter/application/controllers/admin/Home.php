<?php
class Home extends CI_Controller {
	public function index() {
		// $this->load->model('Users_model');
		// $this->Users_model->get
		$data['content']="users";
		$this->load->view("templates/admin/master",$data);
	}
	public function edit() {
			$data['content']="edit";
			$this->load->view("templates/admin/master",$data);
		}
	public function delete() {
			$data['content']="delete";
			$this->load->view("templates/admin/master",$data);
		}
	public function add() {
			$data['content']="add";
			$this->load->view("templates/admin/master",$data);
		}
}