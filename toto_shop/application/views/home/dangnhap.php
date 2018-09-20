<div class="main"><div class="main-container col2-left-layout"><div class="container"><div class="container-inner"><div class="main"><div class="breadcrumbs"><ol class="breadcrumb"><li>
<a href="/">Trang chủ</a></li><li>
<a href="<?=base_url()?>home/dangnhap">Đăng nhập</a></li></ol></div><div class="main-inner"><div class="row" id="info-cart"><div class="col-main col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"><div id="content"><h1>Đăng nhập hệ thống</h1><div class="login-content"><div class="row"><div class="col-lg-6 col-sm-6 col-xs-12"><div class="inner"><h2>Khách hàng mới</h2><div class="content"><p>Bằng cách tạo một tài khoản bạn sẽ có thể mua sắm nhanh hơn, được cập nhật về tình trạng một đơn đặt hàng, và theo dõi các đơn đặt hàng bạn đã thực hiện trước đó.</p>
<a href="<?=base_url()?>home/dangki" class="btn btn-default">Đăng ký</a></div></div></div><div class="col-lg-6 col-sm-6 col-xs-12"><div class="inner"><h2>Đăng nhập</h2><form method="post" class="f"><ul><input type="hidden" name="csrf" value="c0eb7f99d31c876753159a9527cda7e8-021080cfb414101d6d7e659b34aa17bd"><li><input name="username" type="text" class="tb validate[required]" id="username" placeholder="Email *" value=""></li><li><input name="password" type="password" class="tb validate[required]" id="password" placeholder="Mật khẩu *" value=""></li><li class="btns"><input name="submit" type="submit" id="btnSubmit" class="htmlBtn first" value="Đăng nhập"></li></ul></form></div><div id="signGF" style="float: right;margin-top: -110px;margin-right: -25px;">
<a href="/user/fbsignin?redirect=/" id="signFacebook"><i class="fa fa-facebook"></i><span>Sign in with Facebook</span></a>
<a href="/user/ggsignin" id="signGoogle"><i class="fa fa-google-plus"></i><span>Sign in with Google</span></a></div></div></div></div></div></div></div></div></div></div></div></div></div>
<style type="text/css">#signGF>a i{
        text-align: center;
        border-radius: 3px 0  0 3px;
        font-size: 25px;
        width: 40px;
        padding: 5px 0;
        border-right: 1px solid rgba(140, 137, 137, 0.55);
    }
    #signGF>a span{
        text-align: center;
        width: 160px;
        display: inline-block;
        vertical-align: top;
        padding: 8px 0;
        font-weight: bold;
    }
    #signGF>a{
        width: 200px;
        height: 36px;
        border-radius: 3px;
        color: #fff;
        text-decoration: none;
        display: block;
        margin-bottom: 5px;
    }
    #signFacebook>i{
        background: #2f5181;
    }
    #signGoogle>i {
        background: #b33924;
    }
    #signGoogle{
        background: #e64d2d;
    }
    #signFacebook{
        background: #3b5c91;
    }

    @media screen and (max-width: 480px) {
        #signGF {
            float: none !important;
            margin-top: 15px !important;
        }
    }</style></div>