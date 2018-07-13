<?php 
	require "dv.php";
	class Pig extends Animal{
		public function eat(){
			parent::eat();
			echo "con heo dang an cam";
		}
	}
	$heo= new Pig();
	$heo->eat(); 
?>