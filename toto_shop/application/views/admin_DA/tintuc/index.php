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
                            <strong class="card-title">Tin tức</strong>
                        </div>
                        <a href="<?=base_url("admin_DA/tintuc/add")?>"><button  class="btn btn-primary btn-lg" style="width: 160px;height: 40px;margin-left: 30px;margin-top: 10px;" >Thêm Tin Tức</button></a>
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
                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="id">ID</th>
                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="tieude">Tiêu Đề</th>
                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="noidung">Nội dung</th>
                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="anh">Ảnh Tiêu Đề</th>
                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" style="width: 117px;">Hoạt Động</th>
                         </tr>
                    </thead>
                    <tbody> 
                      <?php foreach ( $tintuc as $item =>$value ) {?>
                    <tr role="row" class="odd">
                        <td class="sorting_1"><?php echo $value["id"] ?></td>
                        <td class="sorting_1"><?php echo $value["tieude"] ?></td>
                        <td class="sorting_1"><?php echo $value["noidung"] ?></td>
                       <td class="sorting_1"><?php echo $value["anh"] ?></td> 
                        <td>
                            <a href="<?=base_url("admin_DA/tintuc/edit/").$value['id']?>">Sửa</a> ||
                            <a href="<?=base_url("admin_DA/tintuc/delete/{$value['id']}")?>">Xóa</a> 
                        </td>
                        </tr>
                       <?php } ?>
                      </tbody>
                  </table>
                  <?php echo $this->pagination->create_links(); ?>
              </div></div>
                </div>
            </div><!-- .animated -->
        </div>