<style>
.demo{
	color:red;
}
</style>
<?php 
$stt=1;
if( $stt==1){
	$class="demo";
}else{
	$class="";
}
?>

<strong class="<?=$class?>" >
	<?="Xin chao"
	?>
	<?php echo "Hello world"?>
	</strong>

<?php 
if($stt==1){
	?>
	<i>Hello</i>
	<?php
}
?>