<?php

	class Danhsachsize_model extends CI_Model {
		var $table="ds_size";
		var $primarykey="id_size";
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_danhsachsize() {
			$this->load->database();
			$this->db->select("*");
			//$this->db->where("id_size_contact>=",$number);
			$rs = $this->db->get("ds_size");
			return $rs->result_array();

		}
		public function count_rows($search){
			$this->db->where("id_size like '%$search%'");
			return $this->db->count_all_results('ds_size'); 
		}
		public function get_search($search,$cur_page,$per_page){
			$this->db->where("ten like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function edit ($arr,$id_size){
			$this->db->where("id_size=$id_size");
			return $this->db->update($this->table,$arr);
		}
	public function get_info($id_size) {
			$this->load->database();
			$this->db->where("id_size=$id_size");
			// $this->db->where('id_size',$id_size);
			$rs = $this->db->get("ds_size");
			return $rs->result_array();
			// return $rs->row_array(); // lấy 1 dòng dữ liệu từ database
		}
		public function add ($arr) {
			return $this->db->insert($this->table,$arr);
		}
		public function delete($id_size) {
			$this->db->where('id_size', $id_size);
			return $this->db->delete('ds_size');
		}
	}