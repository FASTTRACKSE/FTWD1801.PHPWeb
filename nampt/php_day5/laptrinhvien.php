<?php 
	require "connguoi.php";
	
	class LapTrinhVien extends ConNguoi
	{
	    var $bangcap='';
	    var $chungchi='';
	}
	$person1 = new LapTrinhVien();
	echo $person1->mieng = ' Hello world';


 ?>