<?php 
	require "connguoi.php";
	class laptrinhvien extends ConNguoi {
		var $bangcap="";
		var $chuyennganh="";
	} 
$person= new laptrinhvien();
$person->suy_nghi('hom nay chan qua');
$person->mieng="that la vui";
echo $person->noi();
?>