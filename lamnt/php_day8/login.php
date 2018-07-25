
<form action ="" method="POST">
	Username: <input type="text" name="username"><br>
	Password: <input type="password" name="password"><br>
	<input type="submit" name="login" value="Login">
</form>

<?php 
	if(isset($_POST['login'])){
		require "libraries.php";
		$username=$_POST['username'];
		$password=$_POST['password'];
		sql = "INSERT INTO users(username,password) VALUES('','')";
		$sql = "SELECT * FROM users WHERE username='$username' AND  password='$password'";
		$mysqli=connectDB();
		$result= $mysqli->query($sql);
		if($result->num_rows){
			echo "Login success";
		}else{
			echo "Username or password incorrect";
		}
	}
?>