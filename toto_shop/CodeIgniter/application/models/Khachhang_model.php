<?php

	class Khachhang_model extends CI_Model {
		var $table="khachhang";
		var $primarykey="id_kh";
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_khachhang() {
			$this->load->database();
			$this->db->select("*");
			//$this->db->where("id_kh_contact>=",$number);
			$rs = $this->db->get("khachhang");
			return $rs->result_array();

		}
		public function count_rows($search){
			$this->db->where("id_kh like '%$search%'");
			return $this->db->count_all_results('khachhang'); 
		}
		public function get_search($search,$cur_page,$per_page){
			$this->db->where("tenkh like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function edit ($arr,$id_kh){
			$this->db->where("id_kh=$id_kh");
			return $this->db->update($this->table,$arr);
		}
	public function get_info($id_kh) {
			$this->load->database();
			$this->db->where("id_kh=$id_kh");
			// $this->db->where('id_kh',$id_kh);
			$rs = $this->db->get("khachhang");
			return $rs->result_array();
			// return $rs->row_array(); // lấy 1 dòng dữ liệu từ database
		}
		public function add ($arr) {
			return $this->db->insert($this->table,$arr);
		}
		public function delete($id_kh) {
			$this->db->where('id_kh', $id_kh);
			return $this->db->delete('khachhang');
		}
	}