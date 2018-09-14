<?php
public function add()
	{
		$data['content']='view_creat_users';
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'tai khoan', 'required');
		$this->form_validation->set_rules('password', 'mat khau', 'required');
		$this->form_validation->set_rules('fullname', 'Ho Ten', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/master',$data);
		}
		else
		{
			$name= $this->input->post('username');
			$password= $this->input->post('password');	
			$fullname= $this->input->post('fullname');
			$role= $this->input->post('role');
			$status= $this->input->post('status');
			$add= array(
				'username'=>$name,
				'password'=>$password,
				'fullname'=>$fullname,
				'role'=>$role,
				'status'=>$status
			);
			$this->load->model("admin/Users_model");
			$rs= $this->Users_model->add($add);
			if ($rs) {
				$this->session->set_flashdata('msg','Them Thanh Cong');
				redirect('admin/Aboutme/users');
			} else {
				redirect('admin/Aboutme/add');
			}
		}

public function add($arr)
		{
			return $this->db->insert('users',$arr);
		}
		?>