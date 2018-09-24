
  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"><a href="index.html" title="Go to Home Page">Home</a> <span>/</span></li>
            <li> <strong>Shopping cart </strong> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End -->
  
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <div class="product-area">
            <div class="title-tab-product-category">
              <div class="text-center">
                <ul class="nav jtv-heading-style" role="tablist">
                  <li role="presentation" class="active"><a href="#cart" aria-controls="cart" role="tab" data-toggle="tab">1 Shopping cart</a></li>
                  <li role="presentation" class=""><a href="#checkout" aria-controls="checkout" role="tab" data-toggle="tab">2 Checkout</a></li>
                  <li role="presentation" class=""><a href="#complete-order" aria-controls="complete-order" role="tab" data-toggle="tab">3 Complete Order</a></li>
                </ul>
              </div>
            </div>
            <div class="content-tab-product-category"> 
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="cart"> 
                  <!-- cart are start-->
                  <div class="cart-page-area">
                    <form method="post" action="#">
                      <div class="table-responsive">
                        <table class="shop-cart-table">
                          <thead>
                            <tr>
                              <th class="product-thumbnail ">Image</th>
                              <th class="product-name ">Product Name</th>
                              <th class="product-price ">Unit Price</th>
                              <th class="product-quantity">Quantity</th>
                              <th class="product-subtotal ">Total</th>
                              <th class="product-remove">Remove</th>
                            </tr>
                          </thead>
                          <tbody>
                            <!-- <?php 
                              echo "<pre>";
                              var_dump($items);
                              echo "</pre>";

                             ?> -->
                             <?php $i = 1; ?>
                            <?php foreach ($items as $key => $value) { ?>
                            <tr class="cart_item">
                              <td class="item-img"><a href="#"><img src="../../uploads/<?=$value['img'] ?>"></a></td>
                              <td class="item-title"><a href="#"><?php echo $value['name'] ?></a>
                              </td>
                              <td class="item-price"><?php echo $value['price'] ?></td>
                              <td class="item-qty"><div class="cart-quantity">
                                  <div class="product-qty">
                                    <div class="cart-quantity">
                                      <div class="cart-plus-minus">
                                        <!-- <div class="dec qtybutton">-</div> -->
                                        <?php echo form_input(array('name' => 'qty'.$i, 'value' => $value['qty'])); ?>
                                        <!-- <div class="inc qtybutton">+</div> -->
                                      </div>
                                    </div>
                                  </div>
                                </div></td>
                              <td class="total-price"><strong><?php echo $this->cart->format_number($value['subtotal']); ?></strong></td>
                              <td class="remove-item"><a href="<?= base_url()?>Home/delete/<?php echo $value['rowid']; ?>"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            <?php $i++; ?>
                          <?php } ?>
                          </tbody>
                        </table>
                      </div>
                      <div class="cart-bottom-area">
                        <div class="row">
                          <div class="col-md-8 col-sm-7 col-xs-12">
                            <div class="update-coupne-area">
                              <div class="update-continue-btn text-right">
                                <a href="<?=base_url()?>Home"><button class="button btn-continue" title="Continue Shopping" type="button"><span>Continue Shopping</span></button></a>
                                <!-- <a href="<?=base_url()?>Home/deleteAll"><button class="button btn-empty" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit"><span>Clear Cart</span></button></a> -->
                                <input class="button btn-update" title="Update Cart" value="Update Cart" name="update_cart_action" type="submit"> 
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="cart-total-area">
                              <div class="catagory-title cat-tit-5 text-right">
                                <h3>Cart Totals</h3>
                              </div>
                              <div class="process-cart-total">
                                <p>Total <span><?php echo $this->cart->format_number($this->cart->total()); ?></span></p>
                              </div>
                              <div class="process-checkout-btn text-right">
                                <button class="button btn-proceed-checkout" title="Proceed to Checkout" type="button"><span>Proceed to Checkout</span></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- cart are end--> 
                </div>
                <div role="tabpanel" class="tab-pane  fade in " id="checkout"> 
                  <!-- Checkout are start-->
                  <div class="checkout-area">
                    <div class="">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="row">
                            <div class="col-md-12 col-xs-12">
                              <div class="billing-details">
                                <div class="contact-text right-side">
                                  <h2>Billing Details</h2>
                                  <form action="#">
                                    <div class="row">
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-box">
                                          <label>First Name <em>*</em></label>
                                          <input type="text" name="namm" class="info" placeholder="First Name">
                                        </div>
                                      </div>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-box">
                                          <label>Last Name<em>*</em></label>
                                          <input type="text" name="namm" class="info" placeholder="Last Name">
                                        </div>
                                      </div>
                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-box">
                                          <label>Company Name</label>
                                          <input type="text" name="cpany" class="info" placeholder="Company Name">
                                        </div>
                                      </div>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-box">
                                          <label>Email Address<em>*</em></label>
                                          <input type="email" name="email" class="info" placeholder="Your Email">
                                        </div>
                                      </div>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-box">
                                          <label>Phone Number<em>*</em></label>
                                          <input type="text" name="phone" class="info" placeholder="Phone Number">
                                        </div>
                                      </div>
                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-box">
                                          <label>Country <em>*</em></label>
                                          <select class="selectpicker select-custom" data-live-search="true">
                                            <option data-tokens="Bangladesh">Bangladesh</option>
                                            <option data-tokens="India">India</option>
                                            <option data-tokens="Pakistan">Pakistan</option>
                                            <option data-tokens="Pakistan">Pakistan</option>
                                            <option data-tokens="Srilanka">Srilanka</option>
                                            <option data-tokens="Nepal">Nepal</option>
                                            <option data-tokens="Butan">Butan</option>
                                            <option data-tokens="USA">USA</option>
                                            <option data-tokens="England">England</option>
                                            <option data-tokens="Brazil">Brazil</option>
                                            <option data-tokens="Canada">Canada</option>
                                            <option data-tokens="China">China</option>
                                            <option data-tokens="Koeria">Koeria</option>
                                            <option data-tokens="Soudi">Soudi Arabia</option>
                                            <option data-tokens="Spain">Spain</option>
                                            <option data-tokens="France">France</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-box">
                                          <label>Address <em>*</em></label>
                                          <input type="text" name="add1" class="info mb-10" placeholder="Street Address">
                                          <input type="text" name="add2" class="info mt10" placeholder="Apartment, suite, unit etc. (optional)">
                                        </div>
                                      </div>
                                      <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-box">
                                          <label>Town/City <em>*</em></label>
                                          <input type="text" name="add1" class="info" placeholder="Town/City">
                                        </div>
                                      </div>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-box">
                                          <label>State/Divison <em>*</em></label>
                                          <select class="selectpicker select-custom" data-live-search="true">
                                            <option data-tokens="Barisal">Barisal</option>
                                            <option data-tokens="Dhaka">Dhaka</option>
                                            <option data-tokens="Kulna">Kulna</option>
                                            <option data-tokens="Rajshahi">Rajshahi</option>
                                            <option data-tokens="Sylet">Sylet</option>
                                            <option data-tokens="Chittagong">Chittagong</option>
                                            <option data-tokens="Rangpur">Rangpur</option>
                                            <option data-tokens="Maymanshing">Maymanshing</option>
                                            <option data-tokens="Cox">Cox's Bazar</option>
                                            <option data-tokens="Saint">Saint Martin</option>
                                            <option data-tokens="Kuakata">Kuakata</option>
                                            <option data-tokens="Sajeq">Sajeq</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-box">
                                          <label>Post Code/Zip Code<em>*</em></label>
                                          <input type="text" name="zipcode" class="info" placeholder="Zip Code">
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
                  <!-- Checkout are end--> 
                </div>
                <div role="tabpanel" class="tab-pane  fade in" id="complete-order">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="checkout-payment-area">
                        <div class="checkout-total">
                          <h3>Your order</h3>
                          <form action="#" method="post">
                            <div class="table-responsive">
                              <table class="checkout-area table">
                                <thead>
                                  <tr class="cart_item check-heading">
                                    <td class="ctg-type"> Product</td>
                                    <td class="cgt-des"> Total</td>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class="cart_item check-item prd-name">
                                    <td class="ctg-type"> Product tilte is here × <span>1</span></td>
                                    <td class="cgt-des"> $76.00</td>
                                  </tr>
                                  <tr class="cart_item">
                                    <td class="ctg-type"> Subtotal</td>
                                    <td class="cgt-des">$205.00</td>
                                  </tr>
                                  <tr class="cart_item">
                                    <td class="ctg-type">Shipping</td>
                                    <td class="cgt-des ship-opt"><div class="shipp">
                                        <input type="radio" id="pay-toggle" name="ship">
                                        <label for="pay-toggle">Flat Rate: <span>$05</span></label>
                                      </div>
                                      <div class="shipp">
                                        <input type="radio" id="pay-toggle2" name="ship">
                                        <label for="pay-toggle2">Free Shipping</label>
                                      </div></td>
                                  </tr>
                                  <tr class="cart_item">
                                    <td class="ctg-type crt-total"> Total</td>
                                    <td class="cgt-des prc-total"> $ 200.00 </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </form>
                        </div>
                        <div class="payment-section">
                          <div class="pay-toggle">
                            <div class="input-box"> <a class="btn-def btn2" href="#">Place order</a> </div>
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
    </div>
  </section>
  <section class="main-container">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <div class="col-main">
            <div class="jtv-featured-products">
              <div class="slider-items-products">
                <div class="jtv-new-title">
                  <h2>Có thể bạn quan tâm</h2>
                </div>
                <div id="featured-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col4 products-grid">
                    <?php   foreach ($sanphamquantam as $key => $value) { ?>
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="../../uploads/<?=$value['hinhanh']?>"> </a>
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