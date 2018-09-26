
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
                        <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group"  >
                            <label for="company" class=" form-control-label">id_sp</label>
                            <input type="text" id="company" class="form-control" name="id_sp" value="<?=$item["id_sp"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >tên sp</label>
                            <input type="text" id="vat"  class="form-control" name="tensp" value="<?=$item["tensp"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >loai_sp</label>
                            <input type="text" id="vat"  class="form-control" name="loai_sp" value="<?=$item["loai_sp"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >size</label>
                            <div>
                                <select name="size">
                                    <?php
                                        $stt_true=$stt_false="";
                                        if($item['size']==S){
                                        $stt_true="selected";
                                        }else{
                                        $stt_false="selected";
                                    }
                                    ?>
                                    <option <?php echo $stt_true?> value="S">S</option>
                                    <option <?php echo $stt_false?> value="M">M</option> 
                                    <option <?php echo $stt_false?> value="L">L</option> 
                                    <option <?php echo $stt_false?> value="XL">XL</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >rating</label>
                            <input type="text" id="vat"  class="form-control" name="rating" value="<?=$item["rating"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >gia</label>
                            <input type="text" id="vat"  class="form-control" name="gia" value="<?=$item["gia"]?>">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >hình ảnh</label>
                            <input type="file" id="vat"  class="form-control" name="hinhanh" value="<?=$item["hinhanh"]?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg" style="margin-left: 500px;">thực hiện</button>
                        </div>
                     
                     </form>
                  </div>
                   <?php }?> 
              </div>
          </div>
      </div>
       