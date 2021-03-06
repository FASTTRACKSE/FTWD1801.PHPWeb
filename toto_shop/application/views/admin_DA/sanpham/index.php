<!-- <?php var_dump($users) ?> -->
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
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Sản phẩm</strong>
                        </div>
                        <a href="<?=base_url("index.php/admin_DA/sanpham/add")?>"><button  class="btn btn-primary btn-lg" style="width: 60px;height: 40px;margin-left: 30px;margin-top: 10px;"> thêm</button></a>
                        <br>
                        <div class="row" style="margin-left: 20px;">
                            <form action="" method="GET">
                                <input type="text" name="search" value="<?php echo $this->input->get("search") ?>">
                                <input type="submit" class="btn btn-primary" value="search">
                             </form>
                        </div>
                        <div class="card-body">
                  <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="bootstrap-data-table_length"><div id="bootstrap-data-table_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12"><table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                    <thead>
                      <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 337px;" name="id_sp">id_sp</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="tensp">tensp</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="loai_sp" value="">loai_sp</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="size" value="">size</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="rating" value="">rating</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="gia" value="">giá</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="image" value="">hình ảnh</th>
                        <!-- <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="hinhanh" value="">hình ảnh</th> -->
                      <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 117px;"><a href="">hoạt động</th>
                      </tr>
                    </thead>
                    <tbody> 
                      <?php foreach ( $sanpham as $item ) {?>
                    <tr role="row" class="odd">

                        <td class="sorting_1"><?php echo $item["id_sp"] ?></td>
                                            <td><?php echo $item["tensp"] ?></td>
                                            <td><?php echo $item["loai_sp"] ?></td>
                                            <td><select name="size">
                                                <?php
                                                    $stt_true=$stt_false="";
                                                    if($item['size']==S){
                                                    $stt_true="selected";
                                                    }else{
                                                    $stt_false="selected";
                                                }
                                                ?>
                                                <option <?php echo $stt_true?> value="1">S</option>
                                                <option <?php echo $stt_false?> value="2">M</option> 
                                                <option <?php echo $stt_false?> value="3">L</option> 
                                                <option <?php echo $stt_false?> value="4">XL</option> 
                                                </select>
                                            </td>
                                            <td><?php echo $item["rating"] ?></td>
                                            <td><?php echo $item["gia"] ?></td>
                                            <td ><img src="../../../uploads/<?= $item['hinhanh']?>"></td>               
                        <td>
                            <a href="<?=base_url("index.php/admin_DA/sanpham/edit/").$item['id_sp']?>">sửa</a> ||
                            <a href="<?=base_url("index.php/admin_DA/sanpham/delete/{$item['id_sp']}")?>">xóa</a> 
                        </td>
                        </tr>
                       <?php }?>
                      </tbody>
                  </table>
                  <?php echo $this->pagination->create_links(); ?>
              </div></div>


                </div>
            </div><!-- .animated -->
        </div>

       






