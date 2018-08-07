<?php 
	// $mysqli = new mysqli('localhost','root','','cv');
	// $mysqli->set_charset('utf8');
	// if ($mysqli->connect_errno) {
	// 	echo 'Cant connect to server'.$mysqli->connect_error;
	// }
	$id_aboutme = $_GET['id'];
  require "../../../libraries/connect.php";
	$sql = " SELECT * FROM about_me WHERE id_aboutme='$id_aboutme'";
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
            	
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>

	                  <th>ID</th>
	                  <th>Name</th>
	                  <th>Detail</th>
	                  <th>Phone</th>
	                  <th>Address</th>
                    <th>Email</th>
	                  <th>Avatar</th>
	                               		
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?= $row['id_aboutme'] ?></td>
                      <td><?= $row['name_aboutme'] ?></td>
                      <td><?= $row['detail_aboutme'] ?></td>
                      <td><?= $row['phone_aboutme'] ?></td>
                      <td><?= $row['address_aboutme'] ?></td>
                      <td><?= $row['email_aboutme'] ?></td>
                      <td><img src="../../../images/<?= $row['avatar_aboutme'] ?>" alt="avatar" width='100' height='100'></td>
                      
                    </tr>                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
 <?php require "../../../templates/backend/footer.php"; ?>
