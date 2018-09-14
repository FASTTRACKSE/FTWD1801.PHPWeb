<?php

	class Khosanpham_model extends CI_Model {
		var $table="kho_sp";
		var $primarykey="id";
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_khosanpham() {
			$this->load->database();
			$this->db->select("*");
			//$this->db->where("id_contact>=",$number);
			$rs = $this->db->get("kho_sp");
			return $rs->result_array();

		}
		public function count_rows($search){
			$this->db->where("id like '%$search%'");
			return $this->db->count_all_results('kho_sp'); 
		}
		public function get_search($search,$cur_page,$per_page){
			$this->db->where("id_sp like '%$search%'");
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
			$rs = $this->db->get("kho_sp");
			return $rs->result_array();
			// return $rs->row_array(); // lấy 1 dòng dữ liệu từ database
		}
		public function add ($arr) {
			return $this->db->insert($this->table,$arr);
		}
		public function delete($id) {
			$this->db->where('id', $id);
			return $this->db->delete('kho_sp');
		}
	}