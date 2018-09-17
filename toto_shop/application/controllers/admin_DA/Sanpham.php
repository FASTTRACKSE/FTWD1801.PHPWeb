
	<?php	class Sanpham extends MY_Controller {
		public function index($cur_page=0) {
			 
			$this->load->model("Sanpham_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("index.php/admin_DA/sanpham/index?search=$search");
			$config['total_rows']=$this->Sanpham_model->count_rows($search);
			$config['per_page']=10;
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
			$data['content']="admin_DA/sanpham/index";
			$data['sanpham']=$this->Sanpham_model->get_search($search,$cur_page,$config['per_page']);
			$this->load->view("templates/admin_DA/master",$data);
			// echo "<pre>";
			// print_r($);
			// echo "</pre>"; die();

		}
		public function edit($id_sp) {
			$data["content"]="admin_DA/sanpham/edit";
			$this->load->model("Sanpham_model");
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$item= $this->Sanpham_model->get_info($id_sp);
			$data['item']=$item;
			
			$this->form_validation->set_rules("tensp","sp","required");
			if($this->form_validation->run()==FALSE){
				$this->load->view("templates/admin_DA/master",$data);
			}else{
				$tensp = $this->input->post('tensp');
				$loai_sp = $this->input->post('loai_sp');
				$rating = $this->input->post('rating');
				$gia = $this->input->post('gia');
				// $hinhanh = $this->input->post('hinhanh');
        		$config['upload_path'] = 'uploads';
        		$config['allowed_types'] = 'gif|jpg|png';
        		$config['file_name'] = $_FILES['hinhanh']['name'];

        		$this->load->library('upload', $config);
        		$this->upload->initialize($config);

        		$this->upload->do_upload('hinhanh');
          		$uploadData = $this->upload->data();
          		$hinhanh = $uploadData['file_name'];
        
				$data=array(
					'tensp'=>$tensp,
					'loai_sp'=>$loai_sp,
					'rating'=>$rating,
					'gia'=>$gia,
					'hinhanh'=>$hinhanh
				);
				$rs=$this->Sanpham_model->edit($data,$id_sp);
			if($rs) {
				$this->session->set_flashdata("msg",'sửa thành công');
				redirect("admin_DA/sanpham/index");
			}else{
				redirect("admin_DA/sanpham/edit/$id_sp");
			}
			}
		}
		public function add() {
			$data["content"]="admin_DA/sanpham/add";
			$this->load->model("Sanpham_model");
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules("tensp","sản phẩm","required");
			if($this->form_validation->run()==false){
				$this->load->view("templates/admin_DA/master",$data);	
			}else{
				$config['upload_path'] = 'uploads';
        		$config['allowed_types'] = 'gif|jpg|png';
        		$config['file_name'] = $_FILES['hinhanh']['name'];

        		$this->load->library('upload', $config);
        		$this->upload->initialize($config);

        		$this->upload->do_upload('hinhanh');
          		$uploadData = $this->upload->data();
          		$hinhanh = $uploadData['file_name'];
          		$tensp = $this->input->post('tensp');
				$loai_sp = $this->input->post('loai_sp');
				$rating = $this->input->post('rating');
				$gia = $this->input->post('gia');

				$data= array(
					'tensp'=>$tensp,
					'loai_sp'=>$loai_sp,
					'rating'=>$rating,
					'gia'=>$gia,
					'hinhanh'=>$hinhanh
					
				);
				$rs=$this->Sanpham_model->add($data);
				if($rs) {
				$this->session->set_flashdata("msg",'thêm thành công');
				redirect("admin_DA/sanpham/index");
			}else{
				redirect("admin_DA/sanpham/add");
			}
			}
		}
		public function delete($id_sp) {
			$data['content']="admin_DA/sanpham/delete";
			$data['id_sp']=$id_sp;
			$this->load->view("templates/admin_DA/master",$data);
			// $data["content"]="admin_DA/users";
			// $this->load->view("templates/admin_DA/master",$data);

	}
	public function do_delete($id_sp){
		$this->load->model("Sanpham_model");
		$rs=$this->Sanpham_model->delete($id_sp);
		if($rs) {
			redirect("admin_DA/sanpham/index");
		}else {
			redirect("admin_DA/sanpham/delete/$id_sp");
		}
	}
	}