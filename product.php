<?php require("./header.php"); ?>

    <div class="container-fluid">
        <div class="row position-relative">
            <img class="w-100 img_fliter" src="./img/17.jpeg" alt="">
            <div class="">
                <h1 class="fs-1 privacy_header">Product</h1>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-12">
            <?php 
                require('./admin/dbconfig.php');
				$sql = "SELECT * FROM product";

                $result = $conn->query($sql);
            ?>
            <?php
                if($result->num_rows > 0){
            ?>
				
                <!-- List group-->
                <ul class="list-group shadow">
                <?php
                    while($row = $result->fetch_assoc()){
                ?>
                <!-- list group item-->
                <a href="./feature.php?id=<?php echo $row['id']; ?>">
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                        <div class="media-body order-2 order-lg-1">
                            <h1 class="mt-0 font-weight-bold mb-2"><?php echo $row['name']; ?></h1>
                            <p class="font-italic text-muted mb-0 small"><?php echo substr($row['description'],0, 150)."...."; ?></p>
                            <div class="d-flex align-items-center justify-content-between mt-1">
                            <h6 class="font-weight-bold my-2">$120.00</h6>
                            <ul class="list-inline small">
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-gray"></i></li>
                            </ul>
                            </div>
                        </div>
                        <img class="ml-lg-5 order-1 order-lg-2 w-50" src="admin/product/img/<?php echo $row['images']; ?>" alt="">

                        </div>
                        <!-- End -->
                    </li>
                </a>
                <!-- End -->
                <?php
					}
				?>
                </ul>
                <!-- End -->
                <?php
                    }else{
                        echo"There is No Record";
                    }
                ?>
            </div>
        </div>
</div>
<?php require("./footer.php"); ?>
