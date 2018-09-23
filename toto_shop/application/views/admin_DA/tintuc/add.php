<form method="POST" class="form-horizontal form-material">
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
                        <li><a href="#">Dashboard</a>
                        </li>
                        <li><a href="#">Forms</a>
                        </li>
                        <li class="active">Basic</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <!-- <div class="card-header">
                        <strong>thêm thông tin</strong>
                      </div> -->
                <div class="card-body card-block">
                    <div class="form-group">
                        <label class=" form-control-label">Tiêu Đề</label>
                        <textarea type="text" id="titile" class="form-control ckeditor" name="title"></textarea>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Nội dung</label>
                        <textarea type="text" id="ckfinder" class="form-control ckeditor" name="ckfinder"></textarea>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Ảnh Tiêu Đề</label>
                        <textarea type="text" id="anh" class="form-control ckeditor" name="anh"></textarea>
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
                    <script>
                        var editor = CKEDITOR.replace( 'anh', {
                        language:'vi',
                        filebrowserBrowseUrl : '../../public/admin/plugins/ckfinder/ckfinder.html',

                        filebrowserImageBrowseUrl : '../../public/admin/plugins/ckfinder/ckfinder.html?type=Images',

                        filebrowserFlashBrowseUrl : '../../public/admin/plugins/ckfinder/ckfinder.html?type=Flash',

                        filebrowserUploadUrl : '../../public/admin/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                        filebrowserImageUploadUrl : '../../public/admin/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                        filebrowserFlashUploadUrl : '../../public/admin/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                        });
                    </script>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg" style="margin-left: 500px;">Thực Hiện</button>
    </div>
    </div>
</form>