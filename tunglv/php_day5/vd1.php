<?php 
interface a{
	public function pa();
}
interface b{
	public function pb();
}
class c {
	public function pc(){
		echo'phuong thuc pc cua lop c';
	}
}

class d extends c implements a,b {
	public function pa(){
		echo 'phuog thuc pa dc khai bao interface';
	}
	public function pb(){
		echo 'phuong thuc pb dc khai bao interface';
	}
	public function pc(){
		echo 'phuong thuc pc cua lop d';
	}
}
$s= new d();
$s->pb();
?>