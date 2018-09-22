<?php
	class Shop extends CI_Controller {
		public function __construct() 
		{
			parent::__construct();
			$this->load->model('Sanpham_model');
			$this->load->model('Loaisanpham_model');
			$this->load->library('cart');
		}
		public function insert()
		{
			$rs=$this->Sanpham_model->get_sanpham();
			var_dump($rs);die();
			$data = array(
				'id_sp' => $rs['id_sp'],
				'tensp' => $rs['tensp'],
				// 'soluong'=1,
				'rating' => $rs['rating'],
				'gia' => $rs['gia'],
				'hinhanh' => $rs['hinhanh'],
			);
			var_dump($this->cart->insert($data));
		}
		public function showCart 
		{
			$data['items']=$this->cart->contents();
			$data['total']=$this->cart->total();
			echo "<pre>";
			print_r($data['items']);
			echo "</pre>";
		}
	}
?>