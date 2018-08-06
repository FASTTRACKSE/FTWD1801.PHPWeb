
<form action="index.php" method="POST">
	username: <input type="text" name="username"><br>
	password: <input type="password" name="password"><br>
	<input type="submit" name="login" >
</form>
<?php
	if (isset($_POST['login'])) {
		//require "libraries.php";
		$username=$_POST['username'];
		$password=$_POST['password'];

	    //$sql = "INSERT INTO `bt1` (`username`, `password`) VALUES ('vohoai', '12345')";
		$sql = "SELECT * FROM bt1 WHERE username='$username' AND  password='$password'";
		
		$mysqli=connectDB();
		$result= $mysqli->query($sql);
		if($result->num_rows){
			echo "Login success";
		}else{
			echo "Username or password incorrect";
		}
	}
?>
<?php
	function connectDB(){
		$mysqli = new mysqli("localhost","root",'','btday8');
		$mysqli->set_charset('utf8');
		if($mysqli->connect_errno){
			return $mysqli->error;
		}else{
			return $mysqli;
		}
	}
?>
