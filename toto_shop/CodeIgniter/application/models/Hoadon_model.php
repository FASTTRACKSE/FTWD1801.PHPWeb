<?php

	class Hoadon_model extends CI_Model {
		var $table="hoadon";
		var $primarykey="id_hd";
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_hoadon() {
			$this->load->database();
			$this->db->select("*");
			//$this->db->where("id_hd_contact>=",$number);
			$rs = $this->db->get("hoadon");
			return $rs->result_array();

		}
		public function count_rows($search){
			$this->db->where("id_hd like '%$search%'");
			return $this->db->count_all_results('hoadon'); 
		}
		public function get_search($search,$cur_page,$per_page){
			$this->db->where("hoten like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function edit ($arr,$id_hd){
			$this->db->where("id_hd=$id_hd");
			return $this->db->update($this->table,$arr);
		}
	public function get_info($id_hd) {
			$this->load->database();
			$this->db->where("id_hd=$id_hd");
			// $this->db->where('id_hd',$id_hd);
			$rs = $this->db->get("hoadon");
			return $rs->result_array();
			// return $rs->row_array(); // lấy 1 dòng dữ liệu từ database
		}
		public function add ($arr) {
			return $this->db->insert($this->table,$arr);
		}
		public function delete($id_hd) {
			$this->db->where('id_hd', $id_hd);
			return $this->db->delete('hoadon');
		}
	}