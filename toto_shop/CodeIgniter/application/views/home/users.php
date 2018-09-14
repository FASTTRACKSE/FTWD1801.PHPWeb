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
                            <strong class="card-title">Danh sách thành viên</strong>
                        </div>
                         <a href="<?=base_url("index.php/admin/users/add")?>"><button  class="btn btn-primary btn-lg" style="width: 60px;height: 40px;margin-left: 30px;margin-top: 10px;" > thêm</button></a>
                        <div class="card-body">
                  <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="bootstrap-data-table_length"><div id="bootstrap-data-table_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12"><table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                    <thead>
                      <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 202px;">id</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 337px;" name="username">username</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="password">password</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 148px;" name="fullname">fullname</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 117px;" name="status">status</th>
                      <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 117px;"><a href="">action</th>
                      </tr>
                    </thead>
                    <tbody> 
                      <?php foreach ( $users as $item ) {?>
                    <tr role="row" class="odd">

                        <td class="sorting_1"><?php echo $item["id"] ?></td>
                        <td><?php echo $item["username"] ?></td>
                        <td><?php echo $item["password"] ?></td>
                        <td><?php echo $item["fullname"] ?></td>
                        <td>
                            <select name="status">
                                <option value="1" >kích hoạt </option>
                                <option value="0">khóa</option>
                            </select>
                        </td>
                        <td>
                            <a href="<?=base_url("index.php/admin/users/edit/").$item['id']?>">sửa</a> ||
                            <a href="<?=base_url("index.php/admin/users/delete")?>">xóa</a>
                            <
                        </td>
                        </tr>
                       <?php }?>
                      </tbody>
                  </table></div></div>


                </div>
            </div><!-- .animated -->
        </div>

       
