
  <div class="container jtv-home-revslider">
    <div class="row">
      <div class="col-lg- col-sm-12 col-xs-12 jtv-main-home-slider">
        <div id='rev_slider_1_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
          <div id='rev_slider_1' class='rev_slider fullwidthabanner'>
            <ul>
              <?php foreach ($hinhanh as $key => $value) { ?>
              <li data-transition='slotzoom-horizontal' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slider/slide-img1.jpg'><img src='uploads/<?=$value['image']?>' alt="slider image1" data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat'  />
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
          <div class="text-des-container">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Support Policy Box -->
  <div class="container">
    <div class="support-policy-box">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="support-policy"> <i class="fa fa-truck"></i>
            <div class="content">FREE SHIP</div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="support-policy"> <i class="fa fa-phone"></i>
            <div class="content"> +1 123 456 7890</div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="support-policy"> <i class="fa fa-refresh"></i>
            <div class="content">DỊCH VỤ</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Container -->
  <section class="main-container">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <div class="col-main">
            <div class="jtv-featured-products">
              <div class="slider-items-products">
                <div class="jtv-new-title">
                  <h2>Sản Phẩm Nổi Bật</h2>
                </div>
                <div id="featured-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col4 products-grid">
                    <?php   foreach ($sanphamtrangchu as $key => $value) { ?>
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="uploads/<?=$value['hinhanh']?>"> </a>
                            <div class="new-label new-top-left">new</div>
                            <div class="mask-shop-white"></div>
                            <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                            <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                            </a> <a href="<?=base_url()?>home/chitietsanpham/<?php echo $value['id_sp'] ?>">
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
                                  <a href="<?=base_url()?>Home/insert/<?php echo $value['id_sp']?>">
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
          <!-- Trending Products Slider -->
          <div class="jtv-trending-products">
            <div class="slider-items-products">
              <div class="jtv-new-title">
                <h2>XU HƯỚNG SẢN PHẨM</h2>
              </div>
              <div id="trending-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
                  <?php foreach ($sanpham1 as $key => $value) { ?>
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="uploads/<?=$value["hinhanh"]?>"> </a>
                          <div class="new-label new-top-left">new</div>
                          <div class="mask-shop-white"></div>
                          <div class="new-label new-top-left">new</div>
                          <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                          <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                          </a> <a href="compare.html">
                          <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                          </a> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html"><?=$value["tensp"]?></a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price"><?=$value["gia"]?></span></span>
                                <p class="old-price"> <span class="price-label">Regular Price:</span></p>
                              </div>
                            </div>
                            <div class="actions">
                                <div class="add_cart">
                                  <a href="<?=base_url()?>Home/insert/<?php echo $value['id_sp']?>">
                                    <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart">Đặt Hàng</i></span>
                                    </button>
                                  </a>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php }?>
      
          <!-- End Trending Products Slider --> 
        </div>
      </div>
    </div>
  </div>
  <div class="jtv-trending-products">
            <div class="slider-items-products">
              <div class="jtv-new-title">
                <h2>SẢN PHẨM HÀNG ĐẦU</h2>
              </div>
              <div id="trending-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
                  <?php foreach ($sanphamhangdau as $key => $value) { ?>
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="uploads/<?=$value["hinhanh"]?>"> </a>
                          <div class="new-label new-top-left">new</div>
                          <div class="mask-shop-white"></div>
                          <div class="new-label new-top-left">new</div>
                          <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                          <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                          </a> <a href="compare.html">
                          <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                          </a> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html"><?=$value["tensp"]?></a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price"><?=$value["gia"]?></span></span>
                                <p class="old-price"> <span class="price-label">Regular Price:</span></p>
                              </div>
                            </div>
                            <div class="actions">
                                <div class="add_cart">
                                  <a href="<?=base_url()?>Home/insert/<?php echo $value['id_sp']?>">
                                    <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart">Đặt Hàng</i></span>
                                    </button>
                                  </a>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php }?>
                </div>
              </div>
            </div>
          </div>
          <div class="jtv-trending-products">
            <div class="slider-items-products">
              <div class="jtv-new-title">
                <h2>TIN TỨC</h2>
              </div>
              <div id="trending-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
                  <?php foreach ($tintuc as $key => $value) { ?>
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="uploads/<?=$value["anh"]?>"> </a>
                          <div class="new-label new-top-left">new</div>
                          <div class="mask-shop-white"></div>
                          <div class="new-label new-top-left">new</div>
                          <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                          <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                          </a> <a href="compare.html">
                          <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                          </a> </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product tilte is here" href="product-detail.html"><?=$value["tieude"]?></a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                            </div>
                            <div class="actions">
                              <div class="add_cart">
                                <button class="button btn-cart" type="button"><span><i class="fa fa-shopping-cart"></i> Xem Thêm</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php }?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <!-- Brand Logo -->
  <div class="container jtv-brand-logo-block">
    <div class="jtv-brand-logo">
      <div class="slider-items-products">
        <div id="jtv-brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6">
            <div class="item"><a href="#"><img src="<?=base_url()?>assets_frontend/images/brand1.png" alt="Brand Logo"></a> </div>
            <div class="item"><a href="#"><img src="<?=base_url()?>assets_frontend/images/brand2.png" alt="Brand Logo"></a> </div>
            <div class="item"><a href="#"><img src="<?=base_url()?>assets_frontend/images/brand3.png" alt="Brand Logo"></a> </div>
            <div class="item"><a href="#"><img src="<?=base_url()?>assets_frontend/images/brand4.png" alt="Brand Logo"></a> </div>
            <div class="item"><a href="#"><img src="<?=base_url()?>assets_frontend/images/brand5.png" alt="Brand Logo"></a> </div>
            <div class="item"><a href="#"><img src="<?=base_url()?>assets_frontend/images/brand6.png" alt="Brand Logo"></a> </div>
            <div class="item"><a href="#"><img src="<?=base_url()?>assets_frontend/images/brand7.png" alt="Brand Logo"></a> </div>
            <div class="item"><a href="#"><img src="<?=base_url()?>assets_frontend/images/brand8.png" alt="Brand Logo"></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>