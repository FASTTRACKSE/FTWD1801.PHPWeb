<style type="text/css">
  .title {
    margin-left: 400px;
  }
  .btn1 {
    background-color: #E7E7E7;
    border:  solid #E7E7E7;
    width: 1140px;
  }
</style>
<h5 class="title"><a href="<?=base_url()?>home"> TRANG CHỦ</a> / <a href="<?=base_url()?>home/checkout"> THANH TOÁN </a></h5>
  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
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
            <h3 style="color: #F82E56;">Thanh toán đơn hàng</h3>
            <br>
            <button class="btn1"><h5 style="float: left;">Thông tin khách hàng</h5></button>
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
                              <!-- <div class="input-box">
                                <label>Hình Thức Thanh Toán<em>*</em></label>
                                <select class="select-custom" data-live-search="true" name="hinhthucgiaohang">
                                  <option value="1">Giao Hàng Tận Nơi</option>
                                  <option value="2">Nhận Hàng Tại Shop</option>
                                </select>
                              </div> -->
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
                                        <a href="<?=base_url()?>home/checkoutthanhcong"><button class="btn btn-success">Xác nhận</button></a>
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
  </div>
  <!--End main-container --> 
 <!-- $data['total_items'] = $this->cart->total_items();
  $this- -->