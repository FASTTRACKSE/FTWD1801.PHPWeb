<?php
	class ConNguoi{
		var $mat='';
		var $mui='';
		var $mieng='';
		function suy_nghi($noidung){
			$this->mieng=$noidung;
		}
		function noi(){
			return $this->mieng;
		}
	}
	

?>
