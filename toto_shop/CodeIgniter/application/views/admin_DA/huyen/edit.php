
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
                            <label for="company" class=" form-control-label">id_huyen</label>
                            <input type="text" id="company" class="form-control" name="id_huyen" value="<?=$item["id_huyen"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >tên </label>
                            <input type="text" id="vat"  class="form-control" name="ten" value="<?=$item["ten"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >id_tinh</label>
                            <input type="text" id="vat"  class="form-control" name="id_tinh" value="<?=$item["id_tinh"]?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg" style="margin-left: 500px;">thực hiện</button>
                        </div>
                     
                     </form>
                  </div>
                   <?php }?> 
              </div>
          </div>
      </div>
       