<?php
	session_start();
	if (isset($_SESSION["userlogin"])) {
		echo $_SESSION["userlogin"]."da login user";
	} else {
		echo "ban phai dang nhap";
	}
	
?>