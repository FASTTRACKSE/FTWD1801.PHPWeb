
	<?php	class Khosanpham extends MY_Controller {
		public function index($cur_page=0) {
			 
			$this->load->model("Khosanpham_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("index.php/admin_DA/khosanpham/index?search=$search");
			$config['total_rows']=$this->Khosanpham_model->count_rows($search);
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
			$data['content']="admin_DA/khosanpham/index";
			$data['khosanpham']=$this->Khosanpham_model->get_search($search,$cur_page,$config['per_page']);
			$this->load->view("templates/admin_DA/master",$data);
			// echo "<pre>";
			// print_r($);
			// echo "</pre>"; die();

		}
		public function edit($id) {
			$data["content"]="admin_DA/khosanpham/edit";
			$this->load->model("Khosanpham_model");
			$this->load->library('form_validation');
			$item= $this->Khosanpham_model->get_info($id);
			$data['item']=$item;
			$this->form_validation->set_rules("id_sp","sp","required");
			if($this->form_validation->run()==FALSE){
				$this->load->view("templates/admin_DA/master",$data);
			}else{
				$id_sp = $this->input->post('id_sp');
				$soluong = $this->input->post('soluong');
				$ngay_nhap = $this->input->post('ngay_nhap');
				$id_cuahang = $this->input->post('id_cuahang');
				$soluong_con = $this->input->post('soluong_con');
				$data=array(
					'id_sp'=>$id_sp,
					'soluong'=>$soluong,
					'ngay_nhap'=>$ngay_nhap,
					'id_cuahang'=>$id_cuahang,
					'soluong_con'=>$soluong_con,
					);
				$rs=$this->Khosanpham_model->edit($data,$id);
			if($rs) {
				$this->session->set_flashdata("msg",'sửa thành công');
				redirect("admin_DA/khosanpham/index");
			}else{
				redirect("admin_DA/khosanpham/edit/$id");
			}
			}
		}
		public function add() {
			$data["content"]="admin_DA/khosanpham/add";
			$this->load->model("Khosanpham_model");
			$this->load->library('form_validation');
			$this->form_validation->set_rules("id_sp","sp","required");
			if($this->form_validation->run()==false){
				$this->load->view("templates/admin_DA/master",$data);	
			}else{
				$data= array(
					'id_sp'=>$this->input->post("id_sp"),
					'soluong'=>$this->input->post("soluong"),
					'ngay_nhap'=>$this->input->post("ngay_nhap"),
					'id_cuahang'=>$this->input->post("id_cuahang"),
					'soluong_con'=>$this->input->post("soluong_con"),
				);
				$rs=$this->Khosanpham_model->add($data);
				if($rs) {
				$this->session->set_flashdata("msg",'thêm thành công');
				redirect("admin_DA/khosanpham/index");
			}else{
				redirect("admin_DA/khosanpham/add");
			}
			}
		}
		public function delete($id) {
			$data['content']="admin_DA/khosanpham/delete";
			$data['id']=$id;
			$this->load->view("templates/admin_DA/master",$data);
			// $data["content"]="admin_DA/users";
			// $this->load->view("templates/admin_DA/master",$data);

	}
	public function do_delete($id){
		$this->load->model("Khosanpham_model");
		$rs=$this->Khosanpham_model->delete($id);
		if($rs) {
			redirect("admin_DA/khosanpham/index");
		}else {
			redirect("admin_DA/khosanpham/delete/$id");
		}
	}
	}