<?php

	class Cuahang_model extends CI_Model {
		var $table="cuahang";
		var $primarykey="id_cuahang";
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_cuahang() {
			$this->load->database();
			$this->db->select("*");
			//$this->db->where("id_cuahang_contact>=",$number);
			$rs = $this->db->get("cuahang");
			return $rs->result_array();

		}
		public function count_rows($search){
			$this->db->where("id_cuahang like '%$search%'");
			return $this->db->count_all_results('cuahang'); 
		}
		public function get_search($search,$cur_page,$per_page){
			$this->db->where("ten like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function edit ($arr,$id_cuahang){
			$this->db->where("id_cuahang=$id_cuahang");
			return $this->db->update($this->table,$arr);
		}
	public function get_info($id_cuahang) {
			$this->load->database();
			$this->db->where("id_cuahang=$id_cuahang");
			// $this->db->where('id_cuahang',$id_cuahang);
			$rs = $this->db->get("cuahang");
			return $rs->result_array();
			// return $rs->row_array(); // lấy 1 dòng dữ liệu từ database
		}
		public function add ($arr) {
			return $this->db->insert($this->table,$arr);
		}
		public function delete($id_cuahang) {
			$this->db->where('id_cuahang', $id_cuahang);
			return $this->db->delete('cuahang');
		}
	}