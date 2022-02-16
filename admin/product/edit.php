<?php
    require_once("../dbconfig.php");
    
    $id = $_GET['id'];
    $sql = "SELECT * FROM product WHERE id=".$id;

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $review = $_POST['review'];
        $img = $_FILES['img']['name'];
        $tmp = $_FILES['img'] [ 'tmp_name'];
    
        $imgupload = move_uploaded_file($tmp, "img/$img");
    
        if($imgupload){
            $updatesql = "UPDATE `product` SET `name` = '$name', `price` = '$price', `review` = '$review', `description` = '$description', `images` = '$img'
            WHERE `id`=".$id;
            
            $result = $conn->query($updatesql);
    
            if($result){
                header('location:index.php');
            }else{
                $conn->error;
            }
        }
        $conn->close();
    }
    
    

include('./header.php');
?>

	<div class="container-fluid">
		<div class="row mb-5">
			<div class="col-md-12 text-center">
				<h1 class="fw-bolder">Edit Product</h1>
			</div>
		</div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="name" placeholder="price" value="<?php echo $row['name']; ?>">
                            <label for="floatingInput">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="price" placeholder="price" value="<?php echo $row['price']; ?>">
                            <label for="floatingInput">Price</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"><?php echo $row['description']; ?></textarea>
                            <label for="floatingTextarea">Product Description</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea name="review" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"><?php echo $row['review']; ?></textarea>
                            <label for="floatingTextarea">Product Review</label>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile01" name="img">
                            <label class="input-group-text" for="inputGroupFile01">Select Image File to Upload</label>
                        </div>
                        <input class="btn btn-primary" type="submit" name="submit" value="Upload">
                    </form>
            </div>
        </div>
	</div>

<?php include_once('./footer.php'); ?>