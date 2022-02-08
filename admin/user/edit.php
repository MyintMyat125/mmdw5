<?php include('./header.php'); 
    require_once("../dbconfig.php");

    $id = $_GET['id'];
    $sql = "SELECT * FROM users
            WHERE id =". $id;

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<div class="container-fluid editsection">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-8">
            <form class="form_login" action="update.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
                <h1 class="fs-1 text-center text-dark mb-5">Edit User</h1>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name"  value="<?php echo $row['name']; ?> " autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $row['email']; ?>" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>"id="exampleInputPassword1" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php include_once('./footer.php'); ?>
