<?php

	class Tinh_model extends CI_Model {
		var $table="tinh";
		var $primarykey="id_tinh";
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_tinh() {
			$this->load->database();
			$this->db->select("*");
			//$this->db->where("id_tinh_contact>=",$number);
			$rs = $this->db->get("tinh");
			return $rs->result_array();

		}
		public function count_rows($search){
			$this->db->where("id_tinh like '%$search%'");
			return $this->db->count_all_results('tinh'); 
		}
		public function get_search($search,$cur_page,$per_page){
			$this->db->where("ten like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function edit ($arr,$id_tinh){
			$this->db->where("id_tinh=$id_tinh");
			return $this->db->update($this->table,$arr);
		}
	public function get_info($id_tinh) {
			$this->load->database();
			$this->db->where("id_tinh=$id_tinh");
			// $this->db->where('id_tinh',$id_tinh);
			$rs = $this->db->get("tinh");
			return $rs->result_array();
			// return $rs->row_array(); // lấy 1 dòng dữ liệu từ database
		}
		public function add ($arr) {
			return $this->db->insert($this->table,$arr);
		}
		public function delete($id_tinh) {
			$this->db->where('id_tinh', $id_tinh);
			return $this->db->delete('tinh');
		}
	}