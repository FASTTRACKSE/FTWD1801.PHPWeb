
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
                            <label for="vat" class=" form-control-label" >name</label>
                            <input type="text" id="vat"  class="form-control" name="name" value="<?=$item["name"]?>">
                        </div>
             
                        <div class="form-group">
                            <label for="street" class=" form-control-label">year_start</label>
                            <input type="text" id="street"  class="form-control" name="year_start" value="<?=$item["year_start"]?>">
                        </div>
                            <div class="form-group">
                                <label for="city" class=" form-control-label">year_end</label>
                                <input type="text" id="city"  class="form-control" name="year_end" value="<?=$item["year_end"]?>">
                            </div>
                     <button type="submit" class="btn btn-primary btn-lg" style="margin-left: 500px;">thực hiện</button>
                     </form>
                  
                  </div>
                   <?php }?> 
              </div>
          </div>
      </div>
       