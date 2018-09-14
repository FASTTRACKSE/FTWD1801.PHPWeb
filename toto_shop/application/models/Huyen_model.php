<?php

	class Huyen_model extends CI_Model {
		var $table="huyen";
		var $primarykey="id_huyen";
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_huyen() {
			$this->load->database();
			$this->db->select("*");
			//$this->db->where("id_huyen_contact>=",$number);
			$rs = $this->db->get("huyen");
			return $rs->result_array();

		}
		public function count_rows($search){
			$this->db->where("id_huyen like '%$search%'");
			return $this->db->count_all_results('huyen'); 
		}
		public function get_search($search,$cur_page,$per_page){
			$this->db->where("ten like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function edit ($arr,$id_huyen){
			$this->db->where("id_huyen=$id_huyen");
			return $this->db->update($this->table,$arr);
		}
	public function get_info($id_huyen) {
			$this->load->database();
			$this->db->where("id_huyen=$id_huyen");
			// $this->db->where('id_huyen',$id_huyen);
			$rs = $this->db->get("huyen");
			return $rs->result_array();
			// return $rs->row_array(); // lấy 1 dòng dữ liệu từ database
		}
		public function add ($arr) {
			return $this->db->insert($this->table,$arr);
		}
		public function delete($id_huyen) {
			$this->db->where('id_huyen', $id_huyen);
			return $this->db->delete('huyen');
		}
	}