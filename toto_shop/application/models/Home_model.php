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

	// public function allCheckOut()
	// {
	// 	$query=$this->db->get('thongtinkhachhang');
	// 	return $query->result_array();
	// }

	public function addKhachHang($id)
	{
		 $this->db->insert('thongtinkhachhang',$id);
		 return $this->db->insert_id();
	}
	public function addHoaDon($arr)
	{
		 $this->db->insert('hoadon',$arr);
		 return $this->db->insert_id();
	}
	public function addHoaDonChiTiet($arr)
	{
		return $this->db->insert('chitiethoadon',$arr);
		  
	}

	// public function ds_size()
	// {
	// 	$query = $this->db->get('ds_size');
	// 	$mang_ds = array();
	// 	foreach ($query->result_array() as $item) {
	// 		$mang_ds[$item['id_size']] = $item['ten'];
	// 	}
	// 	return $mang_ds;
	// }

}

/* End of file  */
/* Location: ./application/models/ */