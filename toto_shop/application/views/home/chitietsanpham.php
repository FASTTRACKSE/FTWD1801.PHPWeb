
<style type="text/css">
  .left {
    margin-top: -540px;
    margin-left: 435px;
  }
  .content {
    margin-top: 40px;
  }
  .title {
    margin-left: 400px;
  }
  .chitiet {
    margin-top: -172px;
  }
</style>
<body>
  <div id="fb-root">
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
</div>
<br>
<h5 class="title"><a href="<?=base_url()?>home"> TRANG CHỦ</a> / <a href=""> ÁO THUN </a>/<a href=""> ÁO THUN TAY NGẮN</a></h5>
<div class="container" >
<div class="content">
<br>
<img src="<?php echo base_url() ?>uploads/<?=$chitietsanpham["hinhanh"]?>" width="333px;" height="500px;">
<div class="left">
  <h3><?=$chitietsanpham["tensp"]?></h3>
  
  <h6 style="color: #9E9EBF"><?=$chitietsanpham["rating"]?></h6>
  <h3 style="color: #EC5355"><?=$chitietsanpham["gia"]?></h3>
  <img src="<?php echo base_url() ?>uploads/<?=$chitietsanpham["hinhanh"]?>" height="100px;"><br>
  <br>
  <h4></b>Số lượng : <input type="number" name="quantity" min="1" max="100" ></h4></b>
  <h4><b>size:
    <select name="<?=$chitietsanpham["size"]?>" >
      <option value="S">S</option>
      <option value="M">M</option>
      <option value="L">L</option>
      <option value="XL">XL</option>
    </select>
  </b></h4><br>
  <div class="add_cart">
      <a href="<?=base_url()?>Home/insert/<?php echo $chitietsanpham['id_sp']?>">
      <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart">Đặt Hàng</i></span>
      </button>
      </a>
      </div><br>
      <div class="fb-comments" data-href="http://localhost/FTWD1801.PHPWeb/toto_shop/home/chitietsanpham" data-width="470" data-numposts="10" ></div>
  </div>
</div>
</div><!-- <?php echo base_url()?>uploads/<?=$chitiet["image"]?> -->
<div class="container">
  <div class="chitiet">
<h2 style="color: #9E9EBF; margin-top: 250px;" >Chi Tiết Sản Phẩm</h2>
<img src="<?php echo base_url() ?>uploads/<?=$chitiet["image"]?>"> "></div>
<br>
  <section class="main-container">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <div class="col-main">
            <div class="jtv-featured-products">
              <div class="slider-items-products">
                <div class="jtv-new-title">
                  <h2>Sản Phẩm Cùng Danh Mục</h2>
                </div>
                <div id="featured-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col4 products-grid">
                    <?php   foreach ($sanphamcungdanhmuc as $key => $value) { ?>
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="<?php echo base_url() ?>uploads/<?=$value["hinhanh"]?>"> </a>
                            <div class="new-label new-top-left">new</div>
                            <div class="mask-shop-white"></div>
                            <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                            <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                            </a> <a href="compare.html">
                            <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                            </a> </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product tilte is here" href="product-detail.html"><?=$value['tensp']?></a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price"><?=$value['gia']?></span></span>
                                 <!--  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p> -->
                                </div>
                              </div>
                              <div class="actions">
                                <div class="add_cart">
                                <a href="<?=base_url()?>Home/insert/<?php echo $chitietsanpham['id_sp']?>">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart">Đặt Hàng</i></span>
                                </button>
                                </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> <!-- .item -->
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
