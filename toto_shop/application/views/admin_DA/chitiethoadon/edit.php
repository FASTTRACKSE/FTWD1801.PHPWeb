
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
                            <label for="company" class=" form-control-label">id</label>
                            <input type="text" id="company" class="form-control" name="id" value="<?=$item["id"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >id_hd</label>
                            <input type="text" id="vat"  class="form-control" name="id_hd" value="<?=$item["id_hd"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >id_sp</label>
                            <input type="text" id="vat"  class="form-control" name="id_sp" value="<?=$item["id_sp"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >số lượng</label>
                            <input type="text" id="vat"  class="form-control" name="soluong" value="<?=$item["soluong"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >id_size</label>
                            <input type="text" id="vat"  class="form-control" name="id_size" value="<?=$item["id_size"]?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg" style="margin-left: 500px;">thực hiện</button>
                        </div>
                     
                     </form>
                  </div>
                   <?php }?> 
              </div>
          </div>
      </div>
       