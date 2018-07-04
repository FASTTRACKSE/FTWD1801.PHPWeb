<?php 	
	session_start(); 
	$solan=1;
	$_SESSION['solan']=$solan;
	if(isset($_POST['submit'])){
		$id=$_POST['id'];
		$name=$_POST['ten'];
		$price=$_POST['gia'];
		$qty=$_POST['soluong'];
		if($id==""||$name==""||$price==""||$qty==""){
			$_SESSION['msg']="Vui long nhap day du thong tin";
			header("location: shop.php");
		}else{
			$item =array(
			'name'=>$name,
			'price'=>$price,
			'qty'=>$qty
			);
			if(isset($_SESSION['giohoa'][$id])){
				$_SESSION['giohoa'][$id]['qty']+=$qty;
			}else{
				$_SESSION['giohoa'][$id]=$item;
			}
			unset($_SESSION['msg']);
			header("location: basket.php");
		}
		
	}
	
?>