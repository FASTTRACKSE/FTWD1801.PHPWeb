<?php 
	require "connguoi.php";
	class laptrinhvien extends ConNguoi{
		var $name;
		var $tuoi;
		function __construct(){
			echo "Hello";
		}
		var $bangcap="";
		var $chuyennganh="";
		function noi(){
			//echo "hello";
			return "Lập trình viên đẹp trai";
		}
		function nge(){
			echo "hello";
		}
	}

	$person = new laptrinhvien();
?>