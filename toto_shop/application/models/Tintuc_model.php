<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tintuc_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_tinh() {
			$this->db->select("*");
			$rs = $this->db->get("tintuc");
			return $rs->result_array();
	}
	public function count_rows($search){
		$this->db->where("id like '%$search%'");
		return $this->db->count_all_results('tintuc'); 
	}
	public function get_search($search,$cur_page,$per_page){
		$this->db->where("noidung like '%$search%'");
		return $this->db->get('tintuc',$per_page,$cur_page)->result_array();
	}

	public function add ($arr) {
			return $this->db->insert('tintuc',$arr);
		}

}

/* End of file Tintuc_model.php */
/* Location: ./application/models/Tintuc_model.php */