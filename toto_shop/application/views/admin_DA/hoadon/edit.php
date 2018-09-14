
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>sửa thông tin</strong>
                    </div>
                     <?php foreach ( $item as $item ) {?>
                      <div class="card-body card-block">
                        <form action="" method="POST" >
                        <div class="form-group"  >
                            <label for="company" class=" form-control-label">id_hd</label>
                            <input type="text" id="company" class="form-control" name="id_hd" value="<?=$item["id_hd"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >họ tên</label>
                            <input type="text" id="vat"  class="form-control" name="hoten" value="<?=$item["hoten"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >sdt</label>
                            <input type="text" id="vat"  class="form-control" name="sdt" value="<?=$item["sdt"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >email</label>
                            <input type="text" id="vat"  class="form-control" name="email" value="<?=$item["email"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >thành phố</label>
                            <input type="text" id="vat"  class="form-control" name="thanhpho" value="<?=$item["thanhpho"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >huyện</label>
                            <input type="text" id="vat"  class="form-control" name="huyen" value="<?=$item["huyen"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >địa chỉ</label>
                            <input type="text" id="vat"  class="form-control" name="diachi" value="<?=$item["diachi"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >hình thức</label>
                            <input type="text" id="vat"  class="form-control" name="hinhthuc" value="<?=$item["hinhthuc"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >tổng tiền</label>
                            <input type="text" id="vat"  class="form-control" name="tongtien" value="<?=$item["tongtien"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >ngay_tao</label>
                            <input type="text" id="vat"  class="form-control" name="ngay_tao" value="<?=$item["ngay_tao"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >id_kh</label>
                            <input type="text" id="vat"  class="form-control" name="id_kh" value="<?=$item["id_kh"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >trạng thái</label>
                            <div>
                                <select name="trangthai">
                                    <option>Đã giao hàng</option>
                                    <option>Đang giao hàng</option>
                                    <option>Giao hàng thất bại</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >ngay_giao</label>
                            <input type="text" id="vat"  class="form-control" name="ngay_giao" value="<?=$item["ngay_giao"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >id_cuahang_giao</label>
                            <input type="text" id="vat"  class="form-control" name="id_cuahang_giao" value="<?=$item["id_cuahang_giao"]?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg" style="margin-left: 500px;">thực hiện</button>
                        </div>
                     
                     </form>
                  </div>
                   <?php }?> 
              </div>
          </div>
      </div>
       