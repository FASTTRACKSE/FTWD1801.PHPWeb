


<?php 
	require "../../libraries/connect.php";
	$search="";
	if(isset($_GET['search'])){
		$search=$_GET['search'];
	}
	$sql="SELECT * FROM  users WHERE fullname LIKE '%$search%'";
	$result=$mysqli->query($sql);
?>
<?php require "../../templates/backend/header.php" ?>
<div class="page-wrapper">
	<div class="container-fluid">
         <div class="row">
         		<form class="app-search p-l-20" method="GET" >
                                <input type="text" name="search" class="form-control" placeholder="Search for..."> 
                            </form>
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Basic Table</h4>
                                <h6 class="card-subtitle">Add class <code>.table</code></h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>Fullname</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php while($item=$result->fetch_assoc()){ ?>
                                            <tr>
                                                <td><?=$item['id']?></td>
                                                <td><?=$item['username']?></td>
                                                <td><?=$item['fullname']?></td>
                                                <td><?=$item['role']?></td>
                                                <td>
                                                	<a href="/cv/admin/users/view-<?=$item['id']?>">View</a>
                                                	<a href="/cv/admin/users/edit-<?=$item['id']?>">Edit</a>
                                                	<a href="">Delete</a>
                                                </td>
                                            </tr>
                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
<?php require "../../templates/backend/footer.php" ?>