<!-- <?php 
	define('Name', 'Lê Văn Tùng');

	echo "welcome ". Name;
 ?> -->

<!--  <?php 
 	$city = array("Đà Nẵng","Sài Gòn", "Hà Nội", "đa");
 	echo "<pre>";
 	var_dump($city);
 	echo "</pre>";
  ?> -->

 <!-- <?php 
 define("name", "W3schools");
 	echo name
  ?> -->
<!-- <?php 
	$t = 1;
	while ($t <= 10) {
		// var_dump($t);
		
		echo "thứ tự là: .$t <br>";
		$t++;
	}
 ?> -->

<!-- <?php 

$t = 7;
do {
	echo "thứ tự $t <br>";
	$t++;
} while ( $t<= 6);

 ?> -->

 <!-- <?php 
 	for ($i=0; $i < 10; $i++) { 
 		echo "Số đếm là $i <br>";
 	}
  ?> -->
  <!-- <?php 
  		 // $t  = array('HN','ĐN', 'SG');
  		$t = array(1 =>'HN',2 =>'SG');
  	foreach ($t as $key =>$value) {
  			echo "$key ";
  	}
   ?> -->

<!--    <?php 
   		function t(){
   			echo "chào";
   		}
   		t();
   		
    ?>	
    <hr> -->
<!--     <?php 
    	function tung($ti){
    		echo "ho của tui là $ti <br>";
    	}
    	tung("nguyễn");
    	tung("lê");
    	tung("trần");
     ?>
     <hr>

     <?php
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?> -->

<!-- <?php 
	function number($nu = 77673){
		echo "con số $nu <br>";
	}
	number(240);
	number(22);
	number();
	number(65);
 ?> -->
 <hr>
 <!-- <?php 
 	$x = 3;
 	$y = 6;
 	function toan($x,$y){
 		$z= $x + $y; 
	 	return $z;
}
echo "4 + 6 = ".toan(4,6);
  ?> -->

 <hr>
 <?php 
 	$city = array("ĐN","HCM","HN","NT");
 	echo "I love ".$city['3']."<br> I like ".$city['1'] ;
  ?>

  <hr>
  <?php 
  		$ten =array('tùng'=>'22','win'=> '29');
  			foreach ($ten as $k => $v) {
  				echo "I am ".$k." , ". "I am ".$v. " year old. <br>" ;
  		};

   ?>
   <hr>

   <?php 
   	$car  = array("BMW", "TOYOTA","Lambociny");
   	rsort($car);
   	$carr = count($car);
   	for ($i=0; $i < $carr; $i++) { 
   		echo $car[$i];
   		echo "<br>";
   }
?>
<hr>
<!-- <!DOCTYPE html>
<html>
<body>

<?php
class Car {
    function Car() {
        $this->model = "VW";
    }
}
// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
		echo "<pre>";
		print_r($herbie);
		echo "</pre>"; 
?>

</body>
</html> -->
<hr>

