<style type="text/css">
  .title {
    margin-left: 400px;
  }
</style>
<h5 class="title"><a href="<?=base_url()?>home"> TRANG CHỦ</a> / <a href="<?=base_url()?>home/donu"> ĐỒ NỮ </a>/<a href="<?=base_url()?>home/quanshort_nu">QUẦN SHORT</a> </h5>
<br><br>
<div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <article class="col-main">
            <div class="page-title">
              <h2>QUẦN SHORT</h2>
            </div>
            <div class="toolbar">
              <div class="sorter">
              </div>
               
            </div>
            <div class="category-products">
              <ul class="products-grid">
                <?php foreach ($quanshort_nu as $key => $value) {?>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="../uploads/<?=$value["hinhanh"]?>"> </a>
                        <div class="new-label new-top-left">new</div>
                        <div class="sale-label sale-top-right">sale</div>
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
                          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price"><?=$value["gia"]?></span></span>
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
                </li>
               <?php } ?>
              </ul>

            </div>
            <?php echo $this->pagination->create_links(); ?> 
          </article>
        </div>
      </div>
    </div>
  </div>