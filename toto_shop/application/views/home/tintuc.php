<style type="text/css">
  .title {
    margin-left: 400px;
  }
  .tintuc {
  	width: 185px;
  	margin-left: 60px;
  }
  .content {
  	margin-top: -715px;
  	margin-left: 350px;
  	width: 800px;
  }
</style>
<body>
<h5 class="title"><a href="<?=base_url()?>home"> TRANG CHỦ</a> / <a href="<?=base_url()?>home/tintuc"> TIN TỨC </a>/<a href="<?=base_url()?>home/aokieu_nu">CẬP NHẬT NHỮNG MẪU SWEATER CHO CHÀNG CHÀO THU</a> </h5>
<br><br>
<div class="container">
	<h3 style="margin-left: 50px;">Tin Tức Nổi Bật :</h3><br>
<div class="tintuc" >
	<?php foreach ($tintuc as $key => $value) {?>
	<img src="../uploads/<?=$value['anh']?>" style="width: 150px;"><br><br>
	<?=$value['tieude']?>
	<h6>xem thêm >></h6>
	<hr>
	<?php } ?>
</div>
<?php foreach ($tintuc2 as $key => $value) {?>
<div class="content">
	<?=$value['noidung']?>
 </div>
 <?php } ?>
</div>
</body>



