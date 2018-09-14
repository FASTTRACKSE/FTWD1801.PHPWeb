<?php

	class Contact_model extends CI_Model {
		var $table="contact";
		var $primarykey="id_contact";
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_contact() {
			$this->load->database();
			$this->db->select("*");
			//$this->db->where("id_contact>=",$number);
			$rs = $this->db->get("contact");
			return $rs->result_array();
		}
		public function count_rows($search){
			$this->db->where("id_contact like '%$search%'");
			return $this->db->count_all_results('contact'); 
		}
		public function get_search($search,$cur_page,$per_page){
			$this->db->where("name like '%$search%'");
			return $this->db->get($this->table,$per_page,$cur_page)->result_array();
		}
		public function edit ($arr,$id_contact){
			$this->db->where("id_contact=$id_contact");
			return $this->db->update($this->table,$arr);
		}
	public function get_info($id_contact) {
			$this->load->database();
			$this->db->where("id_contact=$id_contact");
			// $this->db->where('id',$id);
			$rs = $this->db->get("contact");
			return $rs->result_array();
			// return $rs->row_array(); // lấy 1 dòng dữ liệu từ database
		}
		public function add ($arr) {
			return $this->db->insert($this->table,$arr);
		}
		public function delete($id_contact) {
			$this->db->where('id_contact', $id_contact);
			return $this->db->delete('contact');
		}
	}