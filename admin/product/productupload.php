<?php require("./header.php"); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center fs-1 fw-bolder my-5">Product Data Dashboard</div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="./upload.php" method="POST" enctype="multipart/form-data">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="name" placeholder="price">
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="price" placeholder="price">
                    <label for="floatingInput">Price</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Product Description</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea name="review" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
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


<?php require("./footer.php"); ?>