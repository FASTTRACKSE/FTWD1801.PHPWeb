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
                            <strong class="card-title">Danh mục sản phẩm</strong>
                        </div>
                        <a href="<?=base_url("index.php/admin_DA/loaisanpham/add")?>"><button  class="btn btn-primary btn-lg" style="width: 60px;height: 40px;margin-left: 30px;margin-top: 10px;" > thêm</button></a>
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
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="tenloai">tên loại</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="gioitinh" value="">giới tính</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="id_cha" value="">id_cha</th>
                      <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 117px;"><a href="">hoạt động</th>
                      </tr>
                    </thead>
                    <tbody> 
                      <?php foreach ( $loaisanpham as $item ) {?>
                    <tr role="row" class="odd">

                        <td class="sorting_1"><?php echo $item["id"] ?></td>
                                            <td><?php echo $item["tenloai"] ?></td>
                                            <td><select name="gioitinh">
                               <?php
                                $stt_true=$stt_false="";
                                if($item['gioitinh']==nam){
                                    $stt_true="selected";
                                }else{
                                    $stt_false="selected";
                                }
                                ?>
                                <option <?php echo $stt_true?> value="nam">nam </option>
                                <option <?php echo $stt_false?> value="nu">nữ</option> 
                            </select></td>
                                            <td><?php echo $item["id_cha"] ?></td>
                        <td>
                            <a href="<?=base_url("index.php/admin_DA/loaisanpham/edit/").$item['id']?>">sửa</a> ||
                            <a href="<?=base_url("index.php/admin_DA/loaisanpham/delete/{$item['id']}")?>">xóa</a> 
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

       






