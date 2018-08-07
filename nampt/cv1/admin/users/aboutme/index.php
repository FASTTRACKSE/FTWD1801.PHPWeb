<?php 
	// $mysqli = new mysqli('localhost','root','','cv');
	// $mysqli->set_charset('utf8');
	// if ($mysqli->connect_errno) {
	// 	echo 'Cant connect to server'.$mysqli->connect_error;
	// }
  require "../../../libraries/connect.php";
	$sql = " SELECT * FROM about_me ";
	$result = $mysqli->query($sql);
	$row = $result->fetch_assoc();
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
               <a href="update.php" class="fa fa-pen btn btn-outline-danger " >Sửa thông tin</a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
	                  
	                  <th>Name</th>
	                  <th>Detail</th>
	                  <th>Phone</th>
	                  <th>Address</th>
	                  <th>Email</th>                 
                    <th>Avatar</th>
                     <th>Features</th> 

                    </tr>
                  </thead>
                  <tbody>
                    
                      <tr>
                        
                        <td><?= $row['name_aboutme'] ?></td>
                        <td><?= $row['detail_aboutme'] ?></td>
                        <td><?= $row['phone_aboutme'] ?></td>
                        <td><?= $row['address_aboutme'] ?></td>
                        <td><?= $row['email_aboutme'] ?></td>
                        <td><?= $row['avatar_aboutme'] ?></td>
                        <td>
                        	<a href="view.php?id=<?= $row['id_aboutme'] ?>" class="fa fa-eye btn btn-outline-success" target="_blank">Xem chi tiết</a>                             
                        </td>
                      </tr>                                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </div>

      <?php require "../../../templates/backend/footer.php"; ?>       

        
