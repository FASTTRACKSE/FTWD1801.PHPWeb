
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
                        <div class="form-group">
                        <label for="company" class=" form-control-label">Ckfinder</label>
                        <textarea type="text" id="ckfinder" class="form-control ckeditor" name="ckfinder" value="<?=$item["noidung"]?>"></textarea>
                    </div>
                    <script>
                        var editor = CKEDITOR.replace( 'ckfinder', {
                        language:'vi',
                        filebrowserBrowseUrl : '../../public/admin/plugins/ckfinder/ckfinder.html',

                        filebrowserImageBrowseUrl : '../../public/admin/plugins/ckfinder/ckfinder.html?type=Images',

                        filebrowserFlashBrowseUrl : '../../public/admin/plugins/ckfinder/ckfinder.html?type=Flash',

                        filebrowserUploadUrl : '../../public/admin/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                        filebrowserImageUploadUrl : '../../public/admin/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                        filebrowserFlashUploadUrl : '../../public/admin/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                        });
                    </script>
                        <button type="submit" class="btn btn-primary btn-lg" style="margin-left: 500px;">thực hiện</button>
                        </div>
                     
                     </form>
                  </div>
                   <?php }?> 
              </div>
          </div>
      </div>
       