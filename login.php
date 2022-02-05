<?php require("./header.php"); ?>

<div class="container-fluid">
        <div class="row position-relative">
            <img class="w-100 img_fliter position-relative" src="./img/45.jpeg" alt="">
            <div class="">
                <h1 class="fs-1 privacy_header">Log In</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row py-5">
            <div class="col-md-6 offset-md-3">
                <h1 class="fs-1 text-center mb-5">Log in</h1>
                <form>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                        Remember Me
                        </label>
                    </div>
                    <a href="./login.php" class="text-dark text-decoration-none">Sign in</a>

                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Log in</button>
                </form>
            </div>
        </div>
    </div>
<?php require("./footer.php"); ?>
