<?php
class hinhtron implements hinh{
	var $bankinh=0;
	function hienThi(){
		echo "Đây là hình tròn! ";
	}
	function dienTich(){
		return $this->bankinh*$this->bankinh*3.14;
	}
}