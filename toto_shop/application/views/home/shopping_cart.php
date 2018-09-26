
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
            <h3>Shoppingcart</h3>
            <div class="content-tab-product-category"> 
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="cart"> 
                  <!-- cart are start-->
                  <div class="cart-page-area">
                    <form method="post" action="<?=base_url()?>Home/updateCart">
                      <div class="table-responsive">
                        <table class="shop-cart-table">
                          <thead>
                            <tr>
                              <th class="product-thumbnail ">Hình ảnh</th>
                              <th class="product-name ">Tên Sản Phẩm</th>
                              <th class="product-size ">Size</th>
                              <th class="product-rating">Rating</th>
                              <th class="product-price ">Đơn giá</th>
                              <th class="product-quantity">Số lượng</th>
                              <th class="product-subtotal ">Thành Tiền</th>
                              <th class="product-remove">Xóa</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              echo "<pre>";
                              var_dump($items);
                              echo "</pre>";
                             ?>
                             <?php $i = 1; ?>
                            <?php foreach ($items as  $value) { ?>
                            <tr class="cart_item">
                              <td class="item-img"><img src="../uploads/<?=$value['option']['img'] ?>"></td>
                              <td class="item-title"><?php echo $value['name'] ?>
                              </td> 
                              <td class="item-title">
                                <select name="size">
                                  <option value="XL" <?php echo  set_select('size', 'XL', TRUE); ?> >XL</option>
                                  <option value="L" <?php echo  set_select('size', 'L'); ?> >L</option>
                                  <option value="M" <?php echo  set_select('size', 'M'); ?> >M</option>
                                  <option value="S" <?php echo  set_select('size', 'S'); ?> >S</option>
                                </select>
                              </td>
                              <td class="item-title"><?php echo $value['option']['rating'] ?>

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
                              <!-- <div class="catagory-title cat-tit-5 text-right">
                                <h3>Tổng tiền trong giỏ hàng</h3>
                              </div> -->
                              <div class="process-cart-total">
                                <p>Tổng Tiền<span><?php echo $this->cart->format_number($this->cart->total()); ?></span></p>
                              </div>
                              <div class="process-checkout-btn text-right">
                                <a href="<?=base_url()?>home/addCheckOut"><button class="button btn-proceed-checkout" title="Proceed to Checkout" type="button"><span>Proceed to Checkout</span></button></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- cart are end--> 
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
                          <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="product-detail.html"> <img alt="Product tilte is here" src="../uploads/<?=$value['hinhanh']?>"> </a>
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
                            <div class="item-title"> <a title="Product tilte is here" href="#"><?=$value['tensp']?></a><a href=""></a> </div>
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
        </div>
      </div>
    </div>
  </section>