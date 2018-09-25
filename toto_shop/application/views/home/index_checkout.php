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
                            <strong class="card-title">thong tin khach hang</strong>
                        </div>
                        <a href="<?=base_url("index.php/admin_DA/chitiethoadon/add")?>"><button  class="btn btn-primary btn-lg" style="width: 60px;height: 40px;margin-left: 30px;margin-top: 10px;" > thêm</button></a>
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
                        <!-- <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 337px;" name="id">id</th> -->
                        <!-- <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="id_sp" value="">id_sp</th> -->

                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="hovaten" value="">ho va ten</th>

                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="sodienthoai" value="">so dien thoai</th>

                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="diachi" value="">dia chi</th>

                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="xaphuong" value="">xa/phuong</th>

                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="huyenquan" value="">huyen/quan</th>

                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="tinhthanhpho" value="">tinh/thanhpho</th>

                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="hinhthucgiaohang" value="">hinh thuc giao hang</th>

                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 117px;"><a href="">hoạt động</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php var_dump($item) ?> 
                      <?php foreach ( $item as $key ) {?>
                    <tr role="row" class="odd">

                        <!-- <td class="sorting_1"><?php echo $item["id"] ?></td> -->
                        <!-- <td><?php echo $key["id_sp"] ?></td> -->
                        <td><?php echo $key["hovaten"] ?></td>
                        <td><?php echo $key["sodienthoai"] ?></td>
                        <td><?php echo $key["diachi"] ?></td>
                        <td><?php echo $key["xaphuong"] ?></td>
                        <td><?php echo $key["huyenquan"] ?></td>
                        <td><?php echo $key["tinhthanhpho"] ?></td>
                        <td><?php echo $key["hinhthucgiaohang"] ?></td>
                                            
                        <td>
                            <!-- <a href="<?=base_url("index.php/admin_DA/chitiethoadon/edit/").$item['id']?>">sửa</a> || -->
                            <!-- <a href="<?=base_url("index.php/admin_DA/chitiethoadon/delete/{$item['id']}")?>">xóa</a>  -->
                        </td>
                    </tr>
                       <?php }?>
                      </tbody>
                  </table>
                  <!-- <?php echo $this->pagination->create_links(); ?> -->
              </div></div>


                </div>
            </div><!-- .animated -->
        </div>

       






