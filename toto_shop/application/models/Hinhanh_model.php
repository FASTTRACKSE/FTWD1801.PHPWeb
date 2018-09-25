<?php

	class Hinhanh_model extends CI_Model {
		var $table="list_image";
		var $primarykey="id";
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_hinhanh() {
			$this->db->select("*");
			//$this->db->where("id_contact>=",$number);
			$rs = $this->db->get("list_image",4,0);
			return $rs->result_array();
			// print_r($rs);

		}
		public function get_hinhanh1() {
			$this->db->select("*");
			//$this->db->where("id_contact>=",$number);
			$rs = $this->db->get("list_image");
			return $rs->result_array();
			// print_r($rs);

		}
		public function get_anhchitietsanpham() {
			$this->db->select("*");
			$chitiet = $this->db->get("list_image",1,4);
			return $chitiet->result_array();
		}
		public function get_donam() {
			$this->db->select("*");
			$rs2 = $this->db->get("list_image",1,5);
			return $rs2->result_array();
		}
		public function count_rows($search){
			$this->db->where("id like '%$search%'");
			return $this->db->count_all_results('list_image'); 
		}
		public function get_search($search,$cur_page,$per_page){
			$this->db->where("tensanpham like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function edit ($arr,$id){
			$this->db->where("id=$id");
			return $this->db->update($this->table,$arr);
		}
	public function get_info($id) {
			$this->load->database();
			$this->db->where("id=$id");
			// $this->db->where('id',$id);
			$rs = $this->db->get("list_image");
			return $rs->result_array();
			// return $rs->row_array(); // lấy 1 dòng dữ liệu từ database
		}
		public function add ($arr) {
			return $this->db->insert($this->table,$arr);
		}
		public function delete($id) {
			$this->db->where('id', $id);
			return $this->db->delete('list_image');
		}
	}
