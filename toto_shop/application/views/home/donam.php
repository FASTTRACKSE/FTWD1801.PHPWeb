<style type="text/css">
.title {
    margin-left: 400px;
  }
  .btn {
  	background-color: #393939;
  	color: white;
  	width: 200px;
  }
  .container {
  	margin-top: 50px;
  }
  .border {
  	margin-top: 30px;
  	border:solid #E5E5E5;
  	/*color: #F5F5F5;*/
  	width: 200px;
  }
</style>
<h4 class="title"><a href="<?=base_url()?>home"> TRANG CHỦ</a> / <a href=""> ĐỒ NAM </a>/</h4>
<div class="container">
	<button class="btn"><h4>BỘ LỌC SẢN PHẨM</h4></button>
	<div class="border">
		<h4><b>GIÁ</b></h4>
		<h5 style="margin-left: 10px;"><label><input type="checkbox" value=""> Dưới 100k</label><br>
		<label><input type="checkbox" value=""> Từ 100k-300k</label><br>
		<label><input type="checkbox" value=""> Từ 300k-500k</label><br>
		<label><input type="checkbox" value=""> Từ 500k-1000k</label></h5>
	</div>
	<!-- <img src="uploads/<?=$value["image"]?>"> -->
	<p><?=$donam["tensanpham"]?></p>
	
</div>