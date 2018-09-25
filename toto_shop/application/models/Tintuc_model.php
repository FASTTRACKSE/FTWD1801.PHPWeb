<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tintuc_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_tintuc() {
			$this->db->select("*");
			$tintuc = $this->db->get("tintuc",3,0);
			return $tintuc->result_array();
	}
	public function get_tintuc2() {
			$this->db->select("*");
			$tintuc2 = $this->db->get("tintuc",1,0);
			return $tintuc2->result_array();
	}
	public function count_rows($search){
		$this->db->where("id like '%$search%'");
		return $this->db->count_all_results('tintuc'); 
	}
	public function get_search($search,$cur_page,$per_page){
		$this->db->where("tieude like '%$search%'");
		return $this->db->get('tintuc',$per_page,$cur_page)->result_array();
	}

	public function add ($arr) {
		return $this->db->insert('tintuc',$arr);
	}

	public function delete($id) {
		$this->db->where('id', $id);
		return $this->db->delete('tintuc');
	}

	public function edit ($arr,$id){
		$this->db->where("id = $id");
		return $this->db->update('tintuc',$arr);
	}
	public function get_info($id) {
		$this->load->database();
		$this->db->where("id = $id");
		$rs = $this->db->get("tintuc");
		return $rs->result_array();
	}
}

/* End of file Tintuc_model.php */
/* Location: ./application/models/Tintuc_model.php */