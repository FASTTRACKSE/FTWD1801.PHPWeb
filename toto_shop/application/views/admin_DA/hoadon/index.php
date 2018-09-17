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
                            <strong class="card-title">Hóa đơn</strong>
                        </div>
                        <br>
                        <div class="row" style="margin-left: 20px;">
                            <form action="" method="GET">
                                <input type="text" name="search" value="<?php echo $this->input->get("search") ?>">
                                <input type="submit" class="btn btn-primary" value="search">
                             </form>
                        </div> <br>
                        <div style="margin-left: 20px;">
                           <a href="" ><button class="btn btn-primary-lg" style="height: 40px;">Thống kê doanh thu</button></a>
                            <a href="" ><button class="btn btn-primary" style="height: 40px;">Danh sách chưa giao hàng</button></a>
                            <a href="" ><button class="btn btn-primary" style="height: 40px;">Danh sách đang giao hàng</button></a>
                            <a href="" ><button class="btn btn-primary" style="height: 40px;">Danh sách đã giao hàng</button></a>
                       </div>
                        <div class="card-body">
                  <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="bootstrap-data-table_length"><div id="bootstrap-data-table_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12"><table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                    <thead>
                      <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 337px;" name="id_hd">id_hd</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="hoten">họ tên</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="sdt" value="">sdt</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="email" value="">email</th>
                        <!-- <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="thanhpho" value="">thành phố</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="huyen" value="">huyện</th> -->
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="diachi" value="">địa chỉ</th>
                        <!-- <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="hinhthuc" value="">hình thức</th> -->
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="tongtien" value="">tổng tiền</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="ngay_tao" value="">ngay_tao</th>
                        <!-- <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="id_kh" value="">id_kh</th> -->
                        <!-- <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="trangthai" value="">trạng thái</th> -->
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="ngay_giao" value="">ngay_giao</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="" value="">hoạt động</th>
                      </tr>
                    </thead>
                    <tbody> 
                      <?php foreach ( $hoadon as $item ) {?>
                    <tr role="row" class="odd">

                        <td class="sorting_1"><?php echo $item["id_hd"] ?></td>
                                            <td><?php echo $item["hoten"] ?></td>
                                            <td><?php echo $item["sdt"] ?></td>
                                            <td><?php echo $item["email"] ?></td>
                                            <td><?php echo $item["diachi"] ?></td>
                                           <!--  <td><?php echo $item["thanhpho"] ?></td>
                                            <td><?php echo $item["huyen"] ?></td> -->
                                            <!-- <td><?php echo $item["hinhthuc"] ?></td> -->
                                            <td><?php echo $item["tongtien"] ?></td>
                                            <td><?php echo $item["ngay_tao"] ?></td>
                                            <!-- <td><?php echo $item["id_kh"] ?></td> 
                                            <td>
                                                <select name="trangthai">
                                                    <option>Đã giao hàng</option>
                                                    <option>Đang giao hàng</option>
                                                    <option>Giao hàng thất bại</option>
                                                </select>
                                            </td> -->
                                            <td><?php echo $item["ngay_giao"] ?></td>
                                            <!-- <td><?php echo $item["id_cuahang_giao"] ?></td> -->
                                            <td>
                                                <a href="">xem chi tiết</a>
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

       






