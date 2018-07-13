<?php 
	require "animal.php";
	class Pig extends Animal
	{
	    function eat(){
	    	parent::eat();
	    	echo 'Con heo đang ăn';
	    }
	}
	$heo = new Pig();
	$heo->eat();


 ?>