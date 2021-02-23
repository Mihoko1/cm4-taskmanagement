
<?php

require("./partials/header.php");
insertHeader();

?>

<div class="container container-login text-center my-5">  
    <div class="row justify-content-md-center">
            <h2>Sign up</h2>

            <div class="my-5">
                
                <form id="signupForm" name="form_signup" method="POST" action="">
                    <div class="errorMessage"><?= isset($fnameError)? $fnameError: ''; ?></div>
                    <div class="form-group row mb-3">
                        <label class="col-sm-3 col-form-label" for="name">Name</label>
                        <input class="col-sm-9" type="text" name="name" id="name" value="<?php echo $_POST['name']; ?>" placeholder="Please type your name">
                    </div>
                        
                
                    <div class="errorMessage"><?= isset($emailError)? $emailError: ''; ?></div>
                    <div class="form-group row mb-3">
                        <label class="col-sm-3 col-form-label" for="email">Email</label>
                        <input class="col-sm-9" type="text" name="email" id="email" value="<?php echo $_POST['email']; ?>" placeholder="Please type your email address">
                    </div>
            
                    <div class="errorMessage"><?= isset($passwordError)? $passwordError: ''; ?></div>
                    <div class="form-group row mb-3">
                        <label class="col-sm-3 col-form-label" for="password">Password</label>
                        <input class="col-sm-9" type="password" name="password" id="password" value="<?php echo $_POST['password']; ?>" placeholder="Please type your password">
                    </div>
            

                    <div class="form-group my-5">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                    </div>

                    <h3 class="side-border">OR You have an account?</h3>
                    <div>
                        <a class="btn btn-primary btn-lg my-5" href="./login.php" role="button"> Log in</a>
                    </div>
                    
                </form>
            </div>
    </div> 
</div>

<?php

require("./partials/footer.php");
insertFooter();

?>

