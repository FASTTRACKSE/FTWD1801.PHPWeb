
	<?php	class Hinhanh extends MY_Controller {
		public function index($cur_page=0) {
			 
			$this->load->model("Hinhanh_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("index.php/admin_DA/hinhanh/index?search=$search");
			$config['total_rows']=$this->Hinhanh_model->count_rows($search);
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
			$data['content']="admin_DA/hinhanh/index";
			$data['hinhanh']=$this->Hinhanh_model->get_search($search,$cur_page,$config['per_page']);
			$this->load->view("templates/admin_DA/master",$data);
			// echo "<pre>";
			// print_r($);
			// echo "</pre>"; die();

		}
		public function edit($id) {
			$data["content"]="admin_DA/hinhanh/edit";
			$this->load->model("Hinhanh_model");
			$this->load->library('form_validation');
			$item= $this->Hinhanh_model->get_info($id);
			$data['item']=$item;
			$this->form_validation->set_rules("tensanpham","hình ảnh","required");
			if($this->form_validation->run()==FALSE){
				$this->load->view("templates/admin_DA/master",$data);
			}else{
				// $image = $this->input->post('image');
				$config['upload_path'] = 'uploads';
        		$config['allowed_types'] = 'gif|jpg|png';
        		$config['file_name'] = $_FILES['image']['name'];

        		$this->load->library('upload', $config);
        		$this->upload->initialize($config);

        		$this->upload->do_upload('image');
          		$uploadData = $this->upload->data();
          		$image = $uploadData['file_name'];
        		$tensanpham = $this->input->post('tensanpham');
        		$id_sp = $this->input->post('id_sp');
				$data=array(
					'image'=>$image,
					'tensanpham'=>$tensanpham,
					'id_sp'=>$id_sp
					);
				$rs=$this->Hinhanh_model->edit($data,$id);
			if($rs) {
				$this->session->set_flashdata("msg",'sửa thành công');
				redirect("admin_DA/hinhanh/index");
			}else{
				redirect("admin_DA/hinhanh/edit/$id");
			}
			}
		}
		public function add() {
			$data["content"]="admin_DA/hinhanh/add";
			$this->load->model("Hinhanh_model");
			$this->load->library('form_validation');
			$this->form_validation->set_rules("tensanpham","hình ảnh","required");
			if($this->form_validation->run()==false){
				$this->load->view("templates/admin_DA/master",$data);	
			}else{
				$config['upload_path'] = 'uploads';
        		$config['allowed_types'] = 'gif|jpg|png';
        		$config['file_name'] = $_FILES['image']['name'];

        		$this->load->library('upload', $config);
        		$this->upload->initialize($config);

        		$this->upload->do_upload('image');
          		$uploadData = $this->upload->data();
          		$image = $uploadData['file_name'];
        		$tensanpham = $this->input->post('tensanpham');
        		$id_sp = $this->input->post('id_sp');
				$data=array(
					'image'=>$image,
					'tensanpham'=>$tensanpham,
					'id_sp'=>$id_sp
					);
				$rs=$this->Hinhanh_model->add($data);
				if($rs) {
				$this->session->set_flashdata("msg",'thêm thành công');
				redirect("admin_DA/hinhanh/index");
			}else{
				redirect("admin_DA/hinhanh/add");
			}
			}
		}
		public function delete($id) {
			$data['content']="admin_DA/hinhanh/delete";
			$data['id']=$id;
			$this->load->view("templates/admin_DA/master",$data);
			// $data["content"]="admin_DA/users";
			// $this->load->view("templates/admin_DA/master",$data);

	}
	public function do_delete($id){
		$this->load->model("Hinhanh_model");
		$rs=$this->Hinhanh_model->delete($id);
		if($rs) {
			redirect("admin_DA/hinhanh/index");
		}else {
			redirect("admin_DA/hinhanh/delete/$id");
		}
	}
}
