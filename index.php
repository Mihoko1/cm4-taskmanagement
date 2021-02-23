<?php
//header("Location: views/login.php");
//die();
require("./views/partials/header.php");
insertHeader();
?>

    <!--Main Start Here-->
    <!--Content Start here-->
        <main class = "container container-login text-center my-5">
            <div class="index-content my-5">
                <h2>TEAM C4M Task Management</h2>
                <p class="lead ">With Us Your Business Grow</p> <!-- Probably can have better slogan-->
                <div class=" col-lg-12 ">
                    <a href="views/signup.php" class="btn btn-outline-primary" role="button">Sign Up</a>
                    <a href="views/login.php" class="btn btn-outline-primary" role="button">Login</a>
                </div>
            </div>
        <!--Main End Here-->
        </main>
<?php

require("./views/partials/footer.php");
insertFooter();


?>