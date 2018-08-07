<?php 
	// $mysqli = new mysqli('localhost','root','','cv');
	// $mysqli->set_charset('utf8');
	// if ($mysqli->connect_errno) {
	// 	echo 'Cant connect to server'.$mysqli->connect_error;
	// }
  require "../../../libraries/connect.php";
	$sql = " SELECT * FROM exp ";
	$result = $mysqli->query($sql);
	
	// echo '<pre>';
	// var_dump($row);
	// echo '</pre>';
	//echo $row['id_aboutme'];

 ?>

			
			<?php require "../../../templates/backend/header.php"; ?>
        
        

      <div id="content-wrapper">

        <div class="container-fluid">	
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header"><i class="fas fa-table"></i> Data Table </div>                           
            <div class="card-body">
               <a href="add.php" class="fa fa-pen btn btn-outline-success " >Thêm thông tin</a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
	                  
	                  <th>Name</th>
	                  <th>Detail</th>
	                  <th>Time</th>
	                  <th>Features</th>

                    </tr>
                  </thead>
                  <tbody>
                      <?php while ($row = $result->fetch_assoc()) { ?>                        
                     
                        <tr>                       
                          <td><?= $row['name_exp'] ?></td>
                          <td><?= $row['detail_exp'] ?></td>
                          <td><?= $row['time_exp'] ?></td>                        
                        <td>
                        	<a href="view.php?id=<?= $row['id_exp'] ?>" class="fa fa-eye btn btn-outline-secondary" target="_blank">

                          Xem </a>
                           <a href="update.php?id=<?= $row['id_exp'] ?>" class="fa fa-pen btn btn-outline-primary " >Sửa </a>
                          <a href="delete.php?id=<?= $row['id_exp'] ?>" class="fa fa-trash btn btn-outline-danger">Xóa </a>                             
                        </td>
                        
                      </tr> 
                      <?php }  ?>                                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </div>

      <?php require "../../../templates/backend/footer.php"; ?>       

        
