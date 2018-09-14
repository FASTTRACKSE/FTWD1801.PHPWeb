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
                            <strong class="card-title">khách hàng</strong>
                        </div>
                        <a href="<?=base_url("index.php/admin_DA/khosanpham/add")?>"><button  class="btn btn-primary btn-lg" style="width: 60px;height: 40px;margin-left: 30px;margin-top: 10px;" > thêm</button></a>
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
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 337px;" name="id">id</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="id_sp">id_sp</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="soluong" value="">số lượng</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="ngay_nhap" value="">ngày_nhập</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="id_cuahang" value="">id_cuahang</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="soluong_con" value="">soluong_con</th>
                      <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 117px;"><a href="">hoạt động</th>
                      </tr>
                    </thead>
                    <tbody> 
                      <?php foreach ( $khosanpham as $item ) {?>
                    <tr role="row" class="odd">

                        <td class="sorting_1"><?php echo $item["id"] ?></td>
                                            <td><?php echo $item["id_sp"] ?></td>
                                            <td><?php echo $item["soluong"] ?></td>
                                            <td><?php echo $item["ngay_nhap"] ?></td>
                                            <td><?php echo $item["id_cuahang"] ?></td>
                                            <td><?php echo $item["soluong_con"] ?></td>
                                            
                        <td>
                            <a href="<?=base_url("index.php/admin_DA/khosanpham/edit/").$item['id']?>">sửa</a> ||
                            <a href="<?=base_url("index.php/admin_DA/khosanpham/delete/{$item['id']}")?>">xóa</a> 
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

       






