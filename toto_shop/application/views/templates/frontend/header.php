<?php $this->load->library('cart'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="description" content="Fabulous is a creative, clean, fully responsive, powerful and multipurpose HTML Template with latest website trends. Perfect to all type of fashion stores.">
<meta name="keywords" content="HTML,CSS,womens clothes,fashion,mens fashion,fashion show,fashion week">
<meta name="author" content="JTV">
<title>TOTOSHOP</title>

<!-- Favicons Icon -->
<link rel="icon" href="http://cdn.nhanh.vn/cdn/store/7136/store_1483155611_178.png" type="image/x-icon" />

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_frontend/css/styles.css" media="all">
</head>

<body class="cms-index-index cms-home-page">
<div id="page"> 
  <!-- Header -->
  <header>
    <div class="header-container" style="background-color: black;">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-3 col-xs-12">
            <div class="logo"><a title="ecommerce Template" href="<?=base_url()?>home"><img alt="ecommerce Template" src="http://cdn.nhanh.vn/cdn/store/7136/store_1514252913_443.png"></a></div>
            <div class="nav-icon">
              <div class="mega-container visible-lg visible-md visible-sm">
                <div class="navleft-container" >
                  <div class="mega-menu-title" style="background-color: #EAAB00;">
                    <h3><i class="fa fa-navicon"></i>DANH MỤC SẢN PHẨM</h3>
                  </div>
                  <div class="mega-menu-category">
                    <ul class="nav">
                      <li><a href="#">NEW ARRIVALS</a>
                        <div class="wrap-popup column1">
                          <div class="popup">
                            <ul class="nav">
                              <li><a href="<?=base_url()?>home/donam">NAM</a></li>
                              <li><a href="<?=base_url()?>home/donu">NỮ</a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                       <li><a href="#">ĐỒ  NAM</a>
                        <div class="wrap-popup column1">
                          <div class="popup">
                            <ul class="nav">
                              <li><a href="<?=base_url()?>home/aothunnam">ÁO THUN</a></li>
                              <li><a href="<?=base_url()?>home/aosominam">ÁO SƠ MI</a></li>
                              <li><a href="<?=base_url()?>home/quanjean_nam">QUẦN JEAN</a></li>
                              <li><a href="<?=base_url()?>home/quankaki_nam">QUẦN KAKI</a></li>
                              <li><a href="<?=base_url()?>home/quanjogger_nam">QUẦN JOGGER</a></li>
                              <li><a href="<?=base_url()?>home/quanshort_nam">QUẦN SHORT</a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                    <li><a href="">ĐỒ  NỮ</a>
                        <div class="wrap-popup column1">
                          <div class="popup">
                            <ul class="nav">
                              <li><a href="<?=base_url()?>home/aokieu_nu">ÁO KIỂU</a></li>
                              <li><a href="<?=base_url()?>home/dam_nu">ĐẦM NỮ</a></li>
                              <li><a href="<?=base_url()?>home/chan_vay">CHÂN VÁY</a></li>
                              <li><a href="<?=base_url()?>home/somi_nu">ÁO SƠ MI</a></li>
                              <li><a href="<?=base_url()?>home/quanjean_nu">QUẦN JEAN</a></li>
                              <li><a href="<?=base_url()?>home/quanshort_nu">QUẦN SHORT</a></li>
                              <li><a href="<?=base_url()?>home/quanthun_nu">QUẦN THUN</a></li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li><a href="#">ÁO KHOÁC</a>
                        <div class="wrap-popup" style="width: 250px;">
                          <div class="popup">
                            <div class="row">
                              <div class="col-md-12">
                                <h3><a href="shop-grid-sidebar.html">ÁO KHOÁC NAM</a></h3>
                                <ul class="nav">
                                  <li><a href="shop-grid-sidebar.html">Áo Khoác Hoodie</a></li>
                                </ul>
                                <br>
                                <h3><a href="shop-grid-sidebar.html">ÁO KHOÁC NỮ</a></h3>
                                <ul class="nav">
                                  <li><a href="shop-grid-sidebar.html">Áo Khoác Hoodie</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li><a href="#">ÁO THUN</a>
                        <div class="wrap-popup" style="width: 250px;">
                          <div class="popup">
                            <div class="row">
                              <div class="col-md-12">
                                <h3><a href="#">ÁO THUN NAM</a></h3>
                                <ul class="nav">
                                  <li><a href="#">Áo Thun Tay Ngắn</a></li>
                                  <li><a href="#">Áo Thun Tay Dài</a></li>
                                </ul>
                                <br>
                                <h3><a href="#">ÁO THUN NỮ</a></h3>
                                <ul class="nav">
                                 <li><a href="#">Áo Thun Tay Ngắn</a></li>
                                  <li><a href="#">Áo Thun Tay Dài</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      
                      <li><a href="#">ÁO SƠ MI</a>
                        <div class="wrap-popup" style="width: 250px;">
                          <div class="popup">
                            <div class="row">
                              <div class="col-md-12">
                                <h3><a href="#">ÁO SƠ MI NAM</a></h3>
                                <ul class="nav">
                                  <li><a href="#">Sơ Mi Tay Ngắn</a></li>
                                  <li><a href="#">Sơ Mi Tay Dài</a></li>
                                </ul>
                                <br>
                                <h3><a href="#">ÁO SƠ MI NỮ</a></h3>
                                <ul class="nav">
                                 <li><a href="#">Sơ Mi Tay Ngắn</a></li>
                                  <li><a href="#">Sơ Mi Tay Dài</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li><a href="#">QUẦN SHORT</a>
                        <div class="wrap-popup" style="width: 250px;">
                          <div class="popup">
                            <div class="row">
                              <div class="col-md-12">
                                <h3><a href="shop-grid-sidebar.html">QUẦN SHORT NAM</a></h3>
                                <ul class="nav">
                                  <li><a href="#">Short kaki</a></li>
                                  <li><a href="#">Short jean</a></li>
                                  <li><a href="#">Short thun</a></li>
                                </ul>
                                <br>
                                <h3><a href="#">QUẦN SHORT NỮ</a></h3>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      </li>
                    </ul>
                    <div class="side-banner"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-9 col-sm-9 col-xs-12 jtv-rhs-header">
            <div class="jtv-mob-toggle-wrap">
              <div class="mm-toggle"><i class="fa fa-reorder"></i><span class="mm-label">Menu</span></div>
            </div>
            <div class="jtv-header-box">
              <div class="search_cart_block">
                <div class="search-box hidden-xs">
                  <form id="search_mini_form" action="#" method="get">
                    <input id="search" type="text" name="q" value="<?php echo $this->input->get("search") ?>" class="searchbox" placeholder="Nhập từ tìm kiếm" maxlength="128">
                    <button type="submit" title="Search" class="search-btn-bg" id="submit-button"><span class="hidden-sm">Tìm kiếm</span><i class="fa fa-search hidden-xs hidden-lg hidden-md"></i></button>
                  </form>
                </div>
                <div class="right_menu">
                  <div class="menu_top">
                    <div class="top-cart-contain pull-right">
                      <div class="mini-cart">
                        <div class="basket"><a class="basket-icon" href="<?=base_url()?>home/shopping_cart"><i class="fa fa-shopping-basket"></i>Giỏ hàng <span>(<?= $this->cart->total_items() ?>)</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="top_section hidden-xs">
                <div class="toplinks">
                  <div class="site-dir hidden-xs"> <a class="hidden-sm" href="#"><i class="fa fa-phone"></i> <strong>Hotline:</strong> +1 123 456 7890</a> <a href="mailto:support@example.com"><i class="fa fa-envelope"></i> support@example.com</a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header --> 
  <!-- Revslider -->