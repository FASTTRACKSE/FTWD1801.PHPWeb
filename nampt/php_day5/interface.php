<?php 
	interface a {
		function pa () ;
	}
	class b implements a{
		function pa (){
			echo 'Phương thức của a';
		}
	}
	$c = new b ();
	$c->pa();
 ?>