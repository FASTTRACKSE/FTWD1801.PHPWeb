<?php 
require "hinh.php";
class hinhchunhat implements hinh{
	var $chieudai=0;
	var $chieurong=0;
	function hienThi(){
		echo "Đây là hình chữ nhật! ";
	}
	function dienTich(){
		return $this->chieudai*$this->chieurong;
	}
}