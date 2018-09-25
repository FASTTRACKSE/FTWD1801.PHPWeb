
  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a href="index.html" title="Go to Home Page">Home</a> <span>/</span></li>
            <li> <strong>Checkout</strong> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- main-container -->
  <div class="main-container col1-layout">
    <div class="main container">
      <div class="row">
        <div class="col-sm-12">
          <div class="product-area">
            <h3>CHECKOUT</h3>
            <div class="content-tab-product-category"> 
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane  fade in active" id="checkout"> 
                  <!-- Checkout are start-->
                  <div class="checkout-area">

                    <div class="">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <?php echo validation_errors(); ?>
                          <form action="" method="post" class="form-horizontal form-material">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                              <div class="input-box">
                                <label>Họ và tên<em>*</em></label>
                                <input type="text" name="hovaten" class="info">
                              </div>
                              <div class="input-box">
                                <label>Số điện thoại<em>*</em></label>
                                <input type="text" name="sodienthoai" class="info">
                              </div>
                              <div class="input-box">
                                <label>Địa chỉ<em>*</em></label>
                                <input type="text" name="diachi" class="info">
                              </div>
                              <div class="input-box">
                                <label>Hình Thức Thanh Toán<em>*</em></label>
                                <select class="select-custom" data-live-search="true" name="hinhthucgiaohang">
                                  <option value="1">Giao Hàng Tận Nơi</option>
                                  <option value="2">Nhận Hàng Tại Shop</option>
                                </select>
                              </div>
                              <!-- <div class="input-box">
                                <label>Hình Thức Thanh Toán<em>*</em></label>
                                <input type="radio" name="thanhtoan" value="1">Giao Hàng Tận Nơi
                                <input type="radio" name="thanhtoan" value="1">
                              </div> -->
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                              <div class="input-box">
                                <label>Xã/Phường<em>*</em></label>
                                <input type="text" name="xaphuong" class="info">
                              </div>
                              <div class="input-box">
                                <label>Huyện/Quận<em>*</em></label>
                                <input type="text" name="huyenquan" class="info">
                              </div>
                              <div class="input-box">
                                <label>Tỉnh/Thành Phố<em>*</em></label>
                                <input type="text" name="tinhthanhpho" class="info">
                              </div>
                              <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Add</button>
                                    </div>
                                </div>
                            </div>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="jtv-crosssel-pro">
        <div class="jtv-new-title">
          <h2>you may be interested</h2>
        </div>
        <div class="category-products">
          <ul class="products-grid">
            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                    <div class="item-title"> <a title="Product tilte is here" href="#">Product tilte is here </a> </div>
                    <div class="item-content">
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$75.00</span></span></div>
                      </div>
                      <div class="actions"><a href="#" class="link-wishlist" title="Add to Wishlist"></a>
                        <div class="add_cart">
                          <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                        </div>
                        <a href="#" class="link-compare" title="Add to Compare"></a> </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                    <div class="item-title"> <a title="Product tilte is here" href="#">Product tilte is here </a> </div>
                    <div class="item-content">
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$88.99</span></span></div>
                      </div>
                      <div class="actions"><a href="#" class="link-wishlist" title="Add to Wishlist"></a>
                        <div class="add_cart">
                          <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                        </div>
                        <a href="#" class="link-compare" title="Add to Compare"></a> </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
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
                    <div class="item-title"> <a title="Product tilte is here" href="#">Product tilte is here </a> </div>
                    <div class="item-content">
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$149.00</span></span></div>
                      </div>
                      <div class="actions"><a href="#" class="link-wishlist" title="Add to Wishlist"></a>
                        <div class="add_cart">
                          <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                        </div>
                        <a href="#" class="link-compare" title="Add to Compare"></a> </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                    <div class="sale-label sale-top-left">sale</div>
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
                    <div class="item-title"> <a title="Product tilte is here" href="#">Product tilte is here </a> </div>
                    <div class="item-content">
                      <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$139.55</span></span></div>
                      </div>
                      <div class="actions"><a href="#" class="link-wishlist" title="Add to Wishlist"></a>
                        <div class="add_cart">
                          <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                        </div>
                        <a href="#" class="link-compare" title="Add to Compare"></a> </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--End main-container --> 