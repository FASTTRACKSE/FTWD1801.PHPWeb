<?php
	class ConNguoi{
		var $mat='';
		var $mui='';
		var $mieng='';
		function suy_nghi($noidung){
			$this->mieng=$noidung;
		}
		public static function noi(){
			return $this->mieng;
		}
	}
	

?>
