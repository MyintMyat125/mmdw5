<?php 
    include('./header.php');
    include('../dbconfig.php');
	
    $sql = "SELECT * FROM users";

    $result = $conn->query($sql);
?>

    <div class="container-fluid">
		<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="fw-bolder">Users Data Dashboard</h1>
				</div>
		</div>
		<div class="row">
				<div class="col-md-12"><a href="./adduser.php" class="btn btn-success mb-3 float-start">Add User</a></div>
				<div class="col-md-12 mb-3">
					<div class="card">
						<div class="card-header">
							User Data Table
						</div>

						<div class="card-body">
							<?php 
								if($result->num_rows > 0){
							?>
							<div class="table-responsive">
							<table
								id="datatable"
								class="table table-striped data-table w-100"
							>
								<thead>
									<tr class="text-center">
										<th >No.</th>
										<th >Name</th>
										<th >Email</th>
										<th >Password</th>
										<th >Action</th>
										
									</tr>
								</thead>
								<tbody>
								
								<?php
									while($row = $result->fetch_assoc()){
								?>

								<tr class="text-center">
									<td class="text-break"><?php echo $row['id']; ?></td>
									<td class="text-break"><?php echo $row['name']; ?></td>
									<td class="text-break"><?php echo $row['email']; ?></td>
									<td class="text-break"><?php echo $row['password']; ?></td>
									<td >
										<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
									</td>
								</tr>
								
								<?php
									}
								?>

								</tbody>
							</table>
							</div>
						<?php } else{
							echo"There is no records.";
						}
						?>
						</div>
					</div>
				</div>
		</div>
    </div>

	<script src="../js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript">
		$(document).ready( function () {
			$('#datatable').DataTable();
		} );
	</script>


<?php include('./footer.php');?>