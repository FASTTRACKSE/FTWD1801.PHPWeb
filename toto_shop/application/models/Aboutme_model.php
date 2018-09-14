<?php

	class Aboutme_model extends CI_Model {
		var $table="aboutme";
		var $primarykey="id_aboutme";
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_aboutme() {
			$this->load->database();
			$this->db->select("*");
			//$this->db->where("id_contact>=",$number);
			$rs = $this->db->get("aboutme");
			return $rs->row_array();

		}
		public function edit ($arr,$id_aboutme){
			$this->db->where("id_aboutme=$id_aboutme");
			return $this->db->update($this->table,$arr);
		}
	public function get_info($id_aboutme) {
			$this->load->database();
			$this->db->where("id_aboutme=$id_aboutme");
			// $this->db->where('id',$id);
			$rs = $this->db->get("aboutme");
			return $rs->result_array();
			// return $rs->row_array(); // lấy 1 dòng dữ liệu từ database
		}
		public function delete($id_aboutme) {
			$this->db->where('id_aboutme', $id_aboutme);
			return $this->db->delete('aboutme');
		}
	}