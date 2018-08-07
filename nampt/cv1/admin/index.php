<?php 
	// $mysqli = new mysqli('localhost','root','','cv');
	// $mysqli->set_charset('utf8');
	// if ($mysqli->connect_errno) {
	// 	echo 'Cant connect to server'.$mysqli->connect_error;
	// }
  require "../libraries/connect.php";
	$sql = " SELECT * FROM user ";
	$result = $mysqli->query($sql);
	
	// echo '<pre>';
	// var_dump($row);
	// echo '</pre>';
	//echo $row['id_aboutme'];

 ?>

			
			<?php require "../templates/backend/header.php"; ?>
        

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
	                  <th>Id</th>
	                  <th>Username</th>
	                  <th>Password</th>	                                 		
                    </tr>
                  </thead>
                  <tbody>
                     <?php while ($row = $result->fetch_assoc()) {?>   
                    <tr>
                      <td><?= $row['id_user'] ?></td>
                      <td><?= $row['username'] ?></td>
                      <td ><?= $row['password'] ?></td>                      
                      <!-- <td>
                      	<a href="../resume/index.php?id=<?= $row['id_aboutme'] ?>" class="fa fa-eye" target="_blank"></a>
				      	       <a href="update.php" class="fa fa-pen"></a> 			
                      </td> -->
                    </tr>
                    <?php }  ?>                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      <?php require "../templates/backend/footer.php"; ?>       

        
