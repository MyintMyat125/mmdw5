<?php 
    require('./admin/dbconfig.php');

	$id = $_GET['id'];
	$sql = "SELECT * FROM product WHERE id=".$id;

	$result = $conn->query($sql);

    $sql1  = "SELECT * FROM products WHERE id = ".rand(1, 3);
	$sql2  = "SELECT * FROM products WHERE id = ".rand(5, 8);
	$sql3  = "SELECT * FROM products WHERE id = ".rand(1, 8);
	$sql4  = "SELECT * FROM products WHERE id = ".rand(1, 8);

	$result1 = $conn->query($sql1);
    $result2 = $conn->query($sql2);
    $result3 = $conn->query($sql3);
    $result4 = $conn->query($sql4);


    require("./header.php"); 
?>
    <div class="container-fluid">
        <div class="row position-relative">
            <img class="w-100 img_fliter" src="./img/31.jpeg" alt="">
            <div class="">
                <h1 class="fs-1 privacy_header">Feature</h1>
            </div>
        </div>
    </div>

    <section class="bg-light">
        <div class="container pb-5">
            
            <div class="row">
                <?php
			    	if($result->num_rows > 0){
			    ?>
				<?php
					while($row = $result->fetch_assoc()){
				?>
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img src="admin/product/img/<?php echo $row['images']; ?>">
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2"><?php echo $row['name']; ?></h1>
                            <p class="h3 py-2"><?php echo "Price ".$row['price']; ?></p>
                            <p class="py-2">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <span class="list-inline-item text-dark">Rating 4.8</span>
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Brand:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>Rogue Echo Bike</strong></p>
                                </li>
                            </ul>

                            <h4>Description:</h4>
                            <p class="mb-3"><?php echo $row['description']; ?></p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Avaliable Color :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>White / Black</strong></p>
                                </li>
                            </ul>

                            <form action="" method="">
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <a href="payment.php" class="btn btn-success btn-lg w-100 text-decoration-none" name="submit" value="buy">Buy</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-5">
                    <h1 class="col-md-12 text-center fs-1 mb-5">Review</h1>
                    <div class="col-md-12">
                        <p class="w-50 mx-auto"><?php echo $row['review']; ?></p>
                    </div>
                </div>
                <?php
                    }
				}else{
					echo"There is no record";
				}
			?>
            </div>
        </div>
    </section>


<?php require("./footer.php"); ?>