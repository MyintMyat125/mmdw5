<?php require('./header.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto text-center mt-200">
                <h3>Login Here!</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mx-auto border shadow-sm bg-white rounded p-5">
                <form action="logincheck.php" method="post">
                <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>


<?php require('./footer.php'); ?>