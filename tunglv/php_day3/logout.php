<?php
	session_start();
	if (isset($_SESSION["userlogin"])) {
		unset($_SESSION["userlogin"]);
		echo "da login";
		header("location:demo1.html");
	} else {
		echo "co login dau ma login";
		header("location:https://www.google.com.vn");

	}
	
?>
