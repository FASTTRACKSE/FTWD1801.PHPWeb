
	<?php	class Khachhang extends MY_Controller {
		public function index($cur_page=0) {
			 
			$this->load->model("Khachhang_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("index.php/admin_DA/khachhang/index?search=$search");
			$config['total_rows']=$this->Khachhang_model->count_rows($search);
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
			$data['content']="admin_DA/khachhang/index";
			$data['khachhang']=$this->Khachhang_model->get_search($search,$cur_page,$config['per_page']);
			$this->load->view("templates/admin_DA/master",$data);
			// echo "<pre>";
			// print_r($);
			// echo "</pre>"; die();

		}
		public function edit($id_kh) {
			$data["content"]="admin_DA/khachhang/edit";
			$this->load->model("Khachhang_model");
			$this->load->library('form_validation');
			$item= $this->Khachhang_model->get_info($id_kh);
			$data['item']=$item;
			$this->form_validation->set_rules("tenkh","khách hàng","required");
			if($this->form_validation->run()==FALSE){
				$this->load->view("templates/admin_DA/master",$data);
			}else{
				$tenkh = $this->input->post('tenkh');
				$diachi = $this->input->post('diachi');
				$sdt = $this->input->post('sdt');
				$cmnd = $this->input->post('cmnd');
				$email = $this->input->post('email');
				$level = $this->input->post('level');
				$data=array(
					'tenkh'=>$tenkh,
					'diachi'=>$diachi,
					'sdt'=>$sdt,
					'cmnd'=>$cmnd,
					'email'=>$email,
					'level'=>$level
					);
				$rs=$this->Khachhang_model->edit($data,$id_kh);
			if($rs) {
				$this->session->set_flashdata("msg",'sửa thành công');
				redirect("admin_DA/khachhang/index");
			}else{
				redirect("admin_DA/khachhang/edit/$id_kh");
			}
			}
		}
		public function add() {
			$data["content"]="admin_DA/khachhang/add";
			$this->load->model("Khachhang_model");
			$this->load->library('form_validation');
			$this->form_validation->set_rules("tenkh","khách hàng","required");
			if($this->form_validation->run()==false){
				$this->load->view("templates/admin_DA/master",$data);	
			}else{
				$data= array(
					'tenkh'=>$this->input->post("tenkh"),
					'diachi'=>$this->input->post("diachi"),
					'sdt'=>$this->input->post("sdt"),
					'cmnd'=>$this->input->post("cmnd"),
					'email'=>$this->input->post("email"),
					'level'=>$this->input->post("level")
				);
				$rs=$this->Khachhang_model->add($data);
				if($rs) {
				$this->session->set_flashdata("msg",'thêm thành công');
				redirect("admin_DA/khachhang/index");
			}else{
				redirect("admin_DA/khachhang/add");
			}
			}
		}
		public function delete($id_kh) {
			$data['content']="admin_DA/khachhang/delete";
			$data['id_kh']=$id_kh;
			$this->load->view("templates/admin_DA/master",$data);
			// $data["content"]="admin_DA/users";
			// $this->load->view("templates/admin_DA/master",$data);

	}
	public function do_delete($id_kh){
		$this->load->model("Khachhang_model");
		$rs=$this->Khachhang_model->delete($id_kh);
		if($rs) {
			redirect("admin_DA/khachhang/index");
		}else {
			redirect("admin_DA/khachhang/delete/$id_kh");
		}
	}
	}