<?php 
	// $mysqli = new mysqli('localhost','root','','cv');
	// $mysqli->set_charset('utf8');
	// if ($mysqli->connect_errno) {
	// 	echo 'Cant connect to server'.$mysqli->connect_error;
	// }
  require "../libraries/connect.php";
	$sql = " SELECT * FROM about_me ";
	$result = $mysqli->query($sql);
	$row = $result->fetch_assoc();
	// echo '<pre>';
	// var_dump($row);
	// echo '</pre>';
	//echo $row['id_aboutme'];

 ?>

			
			<?php require "../templates/backend/header.php"; ?>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
      </ul>

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
	                  <th>Features</th>                    		
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
                      <td>
                      	<a href="../resume/index.php?id=<?= $row['id_aboutme'] ?>" class="fa fa-eye" target="_blank"></a>
				      	       <a href="update.php" class="fa fa-pen"></a> 			
                      </td>
                    </tr>                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      <?php require "../templates/backend/footer.php"; ?>       

        
