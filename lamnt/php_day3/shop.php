
<form action="dathoa.php" method="POST">
	id <input type ="text" name="id">
	ten <input type="text" name="ten">
	gia<input type="text" name="gia">
	so luong<input type="text" name="soluong">
	<input type="submit" value="gui" name="submit">
</form>
<h4>
	<?php
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
	}
	
	?>
</h4>
