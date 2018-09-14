
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
                            <label for="company" class=" form-control-label">username</label>
                            <input type="text" id="company" class="form-control" name="username" value="<?=$item["username"]?>">
                        
                        <div class="form-group">
                            <label for="vat" class=" form-control-label" >fullname</label>
                            <input type="text" id="vat"  class="form-control" name="fullname" value="<?=$item["fullname"]?>">
                        </div>
                        <div   class="form-group" >
                            <label for="company" class=" form-control-label">status</label>
                            <div>
                            <select name="status">
                               <?php
                                $stt_true=$stt_false="";
                                if($item['status']==1){
                                    $stt_true="selected";
                                }else{
                                    $stt_false="selected";
                                }
                                ?>
                                <option <?php echo $stt_true?> value="1">kích hoạt </option>
                                <option <?php echo $stt_false?> value="0">khóa</option> 
                            </select>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="street" class=" form-control-label">password</label>
                            <input type="text" id="street"  class="form-control" name="password" value="<?=$item["password"]?>">
                        </div>
                            <div class="form-group">
                                <label for="city" class=" form-control-label">role</label>
                                <input type="text" id="city"  class="form-control" name="role" value="<?=$item["role"]?>">
                            </div>
                     <button type="submit" class="btn btn-primary btn-lg" style="margin-left: 500px;">thực hiện</button>
                     </form>
                  
                  </div>
                   <?php }?> 
              </div>
          </div>
      </div>
       