<?php 
	require "connguoi.php";
	 class laptrinhvien extends ConNguoi{
		static  $name;
		var $tuoi;
		function __construct(){
			echo "Hello";
		}
		var $bangcap="";
		var $chuyennganh="";
		public static function noi(){
			//echo "hello";
			return "Lập trình viên đẹp trai";
		}
		public static function nge(){
			return self::noi();
		}
	}
	echo laptrinhvien::nge();

?>