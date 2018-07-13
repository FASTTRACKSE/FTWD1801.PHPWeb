<?php
session_start();
if (isset($_POST["user"]) && isset($_POST["pass"])) {
	$u = $_POST["user"];
	$p = $_POST["pass"];
	if ($u == "vui" && $p == "123") {
		$_SESSION["userlogin"] = $u;
		echo "thanh cong";
	} else {
		echo "sai ures or pass";
	}
}

?>