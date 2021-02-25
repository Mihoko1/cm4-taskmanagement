<?php
require("./partials/footer.php");
require("./partials/header.php");
insertHeader();
?>

<div class="container container-login text-center my-5">
    <div class="row justify-content-sm-center">
        <h2>Log in</h2>

        <div class="my-5">

            <form id="signupForm" name="form_signup" method="POST" action="">
           
                <div class="errorMessage hidden"><?= isset($userName) ? $userName : ''; ?></div>
                <div class="form-group row mb-3">
                    <label class="col-sm-3 col-form-label" for="userName">User Name</label>
                    <!-- value="<?php echo $_POST['userName']; ?>" -->
                    <input class="col-sm-9" type="text" name="userName" id="userName">
                </div>

                <div class="errorMessage hidden"><?= isset($passwordError) ? $passwordError : ''; ?></div>
                <div class="form-group row mb-3">
                    <label class="col-sm-3 col-form-label" for="password">Password</label>
                    <!-- value="<?php echo $_POST['password']; ?>" -->
                    <input class="col-sm-9" type="password" name="password" id="password">
                </div>


                <div class="form-group my-5">
                    <div>
                        <button type="submit" class="btn btn-primary btn-lg">Log in</button>
                    </div>
                </div>

                <h3 class="side-border">Do not have an account?</h3>
                <div>
                    <a class="btn btn-primary btn-lg my-5" href="signup.php" role="button">Sign up</a>
                </div>

            </form>
        </div>
    </div>
</div>

<?php insertFooter(); ?>