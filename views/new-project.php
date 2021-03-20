<?php

// Start or resume a session
session_start();

require("./partials/header.php");
//require("./partials/sidebar.php");
insertHeader();
//insertSidebar();
//session_start();
//require_once './newprojectCheck.php';

?>
    <!--Main Start Here-->
    <!--Content Start here-->
<main>
    <div class="container container-login text-center my-5">
        <div class="row justify-content-md-center">
            <h2>Create New Project</h2>
            <div>
            <form id="add_project_form" name="form_add_project" method="POST" action="">
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-3 col-form-label" for="fname">Project Name</label>
                        <input class="col-sm-9" type="text" name="projectName" id="projectName" placeholder="Please type your project name">
                        <span style="color:red;"><?= isset($projectNameErr) ? $projectNameErr : ''; ?></span>
                    </div>
             
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-3 col-form-label" for="email">Start Date</label>
                        <input class="col-sm-9" type="text" name="email" id="email" placeholder="Please type your email address">
                        <span style="color:red;"><?= isset($emailErr) ? $emailToErr : ''; ?></span>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <div class="label"><label class="col-form-label" for="message">Description</label> 
                        <textarea class="form-control" name="projectDesc" id="projectDesc" rows="6"></textarea>
                        <span style="color:red;"><?= isset($projectDescErr) ? $projectDescErr : ''; ?></span>
                    </div>

                   
                    <div class="form-group row mb-3">
                        <label class="col-sm-3 col-form-label" for="member">Member(s)</label>
                        <input class="col-sm-9" type="" name="member[]" id="member[]" placeholder="Please Select your member">
                        <span style="color:red;"><?= isset($members_err) ? $members_err : ''; ?></span>
                    </div>

                    <div class="form-group my-5 text-center">
                        <div>
                        <input type="submit" name ="submit" class="btn btn-primary btn-lg" value="Create" >
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>
</main>
<?php

require("./partials/footer.php");
insertFooter();

?>