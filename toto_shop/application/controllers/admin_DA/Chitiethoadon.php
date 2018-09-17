
	<?php	class Chitiethoadon extends MY_Controller {
		public function index($cur_page=0) {
			 
			$this->load->model("Chitiethoadon_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("index.php/admin_DA/chitiethoadon/index?search=$search");
			$config['total_rows']=$this->Chitiethoadon_model->count_rows($search);
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
			$data['content']="admin_DA/chitiethoadon/index";
			$data['chitiethoadon']=$this->Chitiethoadon_model->get_search($search,$cur_page,$config['per_page']);
			$this->load->view("templates/admin_DA/master",$data);
			// echo "<pre>";
			// print_r($);
			// echo "</pre>"; die();

		}
		public function edit($id) {
			$data["content"]="admin_DA/chitiethoadon/edit";
			$this->load->model("Chitiethoadon_model");
			$this->load->library('form_validation');
			$item= $this->Chitiethoadon_model->get_info($id);
			$data['item']=$item;
			$this->form_validation->set_rules("id_hd","hd","required");
			if($this->form_validation->run()==FALSE){
				$this->load->view("templates/admin_DA/master",$data);
			}else{
				$id_hd = $this->input->post('id_hd');
				$id_sp = $this->input->post('id_sp');
				$soluong = $this->input->post('soluong');
				$id_size = $this->input->post('id_size');
				$data=array(
					'id_hd'=>$id_hd,
					'id_sp'=>$id_sp,
					'soluong'=>$soluong,
					'id_size'=>$id_size
					);
				$rs=$this->Chitiethoadon_model->edit($data,$id);
			if($rs) {
				$this->session->set_flashdata("msg",'sửa thành công');
				redirect("admin_DA/chitiethoadon/index");
			}else{
				redirect("admin_DA/chitiethoadon/edit/$id");
			}
			}
		}
		public function add() {
			$data["content"]="admin_DA/chitiethoadon/add";
			$this->load->model("Chitiethoadon_model");
			$this->load->library('form_validation');
			$this->form_validation->set_rules("id_hd","hd","required");
			if($this->form_validation->run()==false){
				$this->load->view("templates/admin_DA/master",$data);	
			}else{
				$data= array(
					'id_hd'=>$this->input->post("id_hd"),
					'id_sp'=>$this->input->post("id_sp"),
					'soluong'=>$this->input->post("soluong"),
					'id_size'=>$this->input->post("id_size")
				);
				$rs=$this->Chitiethoadon_model->add($data);
				if($rs) {
				$this->session->set_flashdata("msg",'thêm thành công');
				redirect("admin_DA/chitiethoadon/index");
			}else{
				redirect("admin_DA/chitiethoadon/add");
			}
			}
		}
		public function delete($id) {
			$data['content']="admin_DA/chitiethoadon/delete";
			$data['id']=$id;
			$this->load->view("templates/admin_DA/master",$data);
			// $data["content"]="admin_DA/users";
			// $this->load->view("templates/admin_DA/master",$data);

	}
	public function do_delete($id){
		$this->load->model("Chitiethoadon_model");
		$rs=$this->Chitiethoadon_model->delete($id);
		if($rs) {
			redirect("admin_DA/chitiethoadon/index");
		}else {
			redirect("admin_DA/chitiethoadon/delete/$id");
		}
	}
	}