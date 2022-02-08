<?php include('./header.php');
    require('../dbconfig.php');

    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);
?>

<div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mx-auto text-center my-5">
                <h1>Add user</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto border shadow-sm bg-white rounded p-5">
                <form action="./create.php" method="post">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Name</label>
                        <select class="form-select" name="user_id"  id="inputGroupSelect01">
                        <option selected disabled>Open this select users</option>
                            <?php
                                while($row = mysqli_fetch_assoc($result)){
                                ?>
                            <option value="<?php echo $row['id']; ?>">
                            <?php echo $row['name']; ?>
                            </option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="question" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Question</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="answer" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Answer</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

<?php include('./footer.php');?>