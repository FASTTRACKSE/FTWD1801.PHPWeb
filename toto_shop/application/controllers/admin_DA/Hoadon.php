
	<?php	class Hoadon extends CI_Controller {
		public function index($cur_page=0) {
			 
			$this->load->model("Hoadon_model");
			$cur_page=$this->input->get("per_page"); 
			$this->load->library("pagination");
			$search=$this->input->get("search");
			$config['base_url']=base_url("index.php/admin_DA/hoadon/index?search=$search");
			$config['total_rows']=$this->Hoadon_model->count_rows($search);
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
			$data['content']="admin_DA/hoadon/index";
			$data['hoadon']=$this->Hoadon_model->get_search($search,$cur_page,$config['per_page']);
			$this->load->view("templates/admin_DA/master",$data);
			// echo "<pre>";
			// print_r($);
			// echo "</pre>"; die();

		}
		public function edit($id_hd) {
			$data["content"]="admin_DA/hoadon/edit";
			$this->load->model("Hoadon_model");
			$this->load->library('form_validation');
			$item= $this->Hoadon_model->get_info($id_hd);
			$data['item']=$item;
			
			$this->form_validation->set_rules("hoten","kh","required");
			if($this->form_validation->run()==FALSE){
				$this->load->view("templates/admin_DA/master",$data);
			}else{
				$hoten = $this->input->post('hoten');
				$sdt = $this->input->post('sdt');
				$email = $this->input->post('email');
				$thanhpho = $this->input->post('thanhpho');
				$huyen = $this->input->post('huyen');
				$diachi = $this->input->post('diachi');
				$hinhthuc = $this->input->post('hinhthuc');
				$tongtien = $this->input->post('tongtien');
				$ngay_tao = $this->input->post('ngay_tao');
				$id_kh = $this->input->post('id_kh');
				$trangthai = $this->input->post('trangthai');
				$ngay_giao = $this->input->post('ngay_giao');
				$id_cuahang_giao = $this->input->post('id_cuahang_giao');
				$data=array(
					'hoten'=>$hoten,
					'sdt'=>$sdt,
					'email'=>$email,
					'thanhpho'=>$thanhpho,
					'huyen'=>$huyen,
					'diachi'=>$diachi,
					'hinhthuc'=>$hinhthuc,
					'tongtien'=>$tongtien,
					'ngay_tao'=>$ngay_tao,
					'id_kh'=>$id_kh,
					'trangthai'=>$trangthai,
					'ngay_giao'=>$ngay_giao,
					'id_cuahang_giao'=>$id_cuahang_giao
					);
				$rs=$this->Hoadon_model->edit($data,$id_hd);
			if($rs) {
				$this->session->set_flashdata("msg",'sửa thành công');
				redirect("admin_DA/hoadon/index");
			}else{
				redirect("admin_DA/hoadon/edit/$id_hd");
			}
			}
		}
		public function add() {
			$data["content"]="admin_DA/hoadon/add";
			$this->load->model("Hoadon_model");
			$this->load->library('form_validation');
			$this->form_validation->set_rules("hoten","kh","required");
			if($this->form_validation->run()==false){
				$this->load->view("templates/admin_DA/master",$data);	
			}else{
				$data= array(
					'hoten'=>$this->input->post("hoten"),
					'sdt'=>$this->input->post("sdt"),
					'email'=>$this->input->post("email"),
					'thanhpho'=>$this->input->post("thanhpho"),
					'huyen'=>$this->input->post("huyen"),
					'diachi'=>$this->input->post("diachi"),
					'hinhthuc'=>$this->input->post("hinhthuc"),
					'tongtien'=>$this->input->post("tongtien"),
					'ngay_tao'=>$this->input->post("ngay_tao"),
					'id_kh'=>$this->input->post("id_kh"),
					'trangthai'=>$this->input->post("trangthai"),
					'ngay_giao'=>$this->input->post("ngay_giao"),
					'id_cuahang_giao'=>$this->input->post("id_cuahang_giao")
				);
				$rs=$this->Hoadon_model->add($data);
				if($rs) {
				$this->session->set_flashdata("msg",'thêm thành công');
				redirect("admin_DA/hoadon/index");
			}else{
				redirect("admin_DA/hoadon/add");
			}
			}
		}
		public function delete($id_hd) {
			$data['content']="admin_DA/hoadon/delete";
			$data['id_hd']=$id_hd;
			$this->load->view("templates/admin_DA/master",$data);
			// $data["content"]="admin_DA/users";
			// $this->load->view("templates/admin_DA/master",$data);

	}
	public function do_delete($id_hd){
		$this->load->model("Hoadon_model");
		$rs=$this->Hoadon_model->delete($id_hd);
		if($rs) {
			redirect("admin_DA/hoadon/index");
		}else {
			redirect("admin_DA/hoadon/delete/$id_hd");
		}
	}
	}