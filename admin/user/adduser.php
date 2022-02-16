<?php include('./header.php'); ?>

<div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mx-auto text-center my-5">
                <h1>Add user</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto border shadow-sm bg-white rounded p-5">
                <form action="usercheck.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

<?php include('./footer.php');?>