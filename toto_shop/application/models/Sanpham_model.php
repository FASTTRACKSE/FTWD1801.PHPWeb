<?php

	class Sanpham_model extends CI_Model {
		var $table="sanpham";
		var $primarykey="id_sp";
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_sanpham() {
			$rs = $this->db->get("sanpham",8,20);
			return $rs->result_array();
		}
		public function get_sanpham1() {
			$rs1 = $this->db->get("sanpham",8,108);
			return $rs1->result_array();
		}
		public function get_sanphamhangdau() {
			$sanphamhangdau = $this->db->get("sanpham",8,127);
			return $sanphamhangdau->result_array();
		}

		public function count_rows($search){
			$this->db->where("id_sp like '%$search%'");
			return $this->db->count_all_results('sanpham'); 
		}
		public function get_search($search,$cur_page,$per_page){
			$this->db->where("tensp like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function edit ($arr,$id_sp){
			$this->db->where("id_sp=$id_sp");
			return $this->db->update($this->table,$arr);
		}
	public function get_info($id_sp) {
			$this->load->database();
			$this->db->where("id_sp=$id_sp");
			// $this->db->where('id_sp',$id_sp);
			$rs = $this->db->get("sanpham");
			return $rs->result_array();
			// return $rs->row_array(); // lấy 1 dòng dữ liệu từ database
		}
		public function add ($arr) {
			return $this->db->insert($this->table,$arr);
		}
		public function delete($id_sp) {
			$this->db->where('id_sp', $id_sp);
			return $this->db->delete('sanpham');
		}
	}