<?php 
    include('../dbconfig.php');
    $sql = "SELECT `faq`.*, `users`.name 
	FROM  `faq` INNER JOIN `users` ON faq.user_id = users.id";

    $result = $conn->query($sql);

    include('./header.php');
?>

    <div class="container-fluid">
		<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="fw-bolder">FAQ Data Dashboard</h1>
				</div>
		</div>
		<div class="row">
				<div class="col-md-12"><a href="./faqform.php" class="btn btn-success mb-3 float-start">Add FAQ</a></div>
				<div class="col-md-12 mb-3">
					<div class="card">
						<div class="card-header">
							FAQ Data Table
						</div>

						<div class="card-body">
							<?php 
								if($result->num_rows > 0){
							?>
							<div class="table-responsive">
							<table
								id="datatable"
								class="table table-striped data-table"
							>
								<thead>
									<tr>
                                        <th >Question No.</th>
										<th >User ID</th>
										<th >Question</th>
										<th >Answer</th>
										<th >Action</th>
									</tr>
								</thead>
								<tbody>
								
								<?php
									while($row = mysqli_fetch_assoc($result)){
								?>

								<tr">
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['user_id']; ?></td>
									<td><?php echo $row['question']; ?></td>
									<td><?php echo $row['answer']; ?></td>
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