<?php 
    include('./header.php');
    include('../dbconfig.php');

    $sql = "SELECT * FROM product";

    $result = $conn->query($sql);
?>

    <div class="container-fluid">
		<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="fw-bolder">Product Data Dashboard</h1>
				</div>
		</div>
		<div class="row">
				<div class="col-md-12"><a href="./productupload.php" class="btn btn-success mb-3 float-start">Add Product</a></div>
				<div class="col-md-12 mb-3">
					<div class="card">
						<div class="card-header">
							Product Data Table
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
									<tr >
										<th >Product No.</th>
										<th >Product Name</th>
										<th >Price</th>
										<th >Description</th>
										<th >Review</th>
										<th >Images</th>
										<th >Action</th>
									</tr>
								</thead>
								<tbody>
								
								<?php
									while($row = $result->fetch_assoc()){
								?>

								<tr >
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['price']; ?></td>
									<td class="text-warp"><?php echo $row['description']; ?></td>
									<td class="text-warp"><?php echo $row['review']; ?></td>
									<td>
										<img class="w-100 product_img" src="img/<?php echo $row['images'] ?>" alt="this is product image">
									</td>
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