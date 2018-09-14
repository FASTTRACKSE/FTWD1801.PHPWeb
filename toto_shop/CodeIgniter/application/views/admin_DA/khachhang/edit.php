
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
                            <label for="company" class=" form-control-label">id_kh</label>
                            <input type="text" id="company" class="form-control" name="id_kh" value="<?=$item["id_kh"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >tên kh</label>
                            <input type="text" id="vat"  class="form-control" name="tenkh" value="<?=$item["tenkh"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >địa chỉ</label>
                            <input type="text" id="vat"  class="form-control" name="diachi" value="<?=$item["diachi"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >sdt</label>
                            <input type="text" id="vat"  class="form-control" name="sdt" value="<?=$item["sdt"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >cmnd</label>
                            <input type="text" id="vat"  class="form-control" name="cmnd" value="<?=$item["cmnd"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >level</label>
                            <input type="text" id="vat"  class="form-control" name="level" value="<?=$item["level"]?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg" style="margin-left: 500px;">thực hiện</button>
                        </div>
                     
                     </form>
                  </div>
                   <?php }?> 
              </div>
          </div>
      </div>
       