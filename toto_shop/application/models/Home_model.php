<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function all()
	{
		$query=$this->db->get('sanpham');
		return $query->result_array();
	}
	public function getShopIdBy($id_sp)
	{
		$this->db->where('id_sp', $id_sp);
		return $this->db->get('sanpham')->row();
	}

}

/* End of file  */
/* Location: ./application/models/ */