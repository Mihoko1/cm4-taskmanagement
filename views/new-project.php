<?php

// Start or resume a session
session_start();

require("./partials/header.php");
require("./partials/sidebar.php");
insertHeader();
insertSidebar();
//session_start();

?>
    <!--Main Start Here-->
    <!--Content Start here-->
    <div class="container container-login text-center my-5">
        <div class="row justify-content-md-center">
            <h2>Create New Project</h2>
            <div>
            <form id="add_project_form" name="form_add_project" method="POST" action="">
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-3 col-form-label" for="fname">Project Name</label>
                        <input class="col-sm-9" type="text" name="pname" id="pname" placeholder="Please type your project name">
                    </div>
             
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-3 col-form-label" for="email">Start Date</label>
                        <input class="col-sm-9" type="text" name="email" id="email" placeholder="Please type your email address">
                    </div>
                    
                    <div class="form-group row mb-3">
                        <div class="label"><label class="col-form-label" for="message">Description</label> 
                        <textarea class="form-control" name="message" id="message" rows="6"></textarea>
                    </div>

                   
                    <div class="form-group row mb-3">
                        <label class="col-sm-3 col-form-label" for="add_member">Member(s)</label>
                        <input class="col-sm-9" type="" name="password" id="password" placeholder="Please type your password">
                    </div>

                    <div class="form-group my-5">
                        <div>
                        <input type="submit" name ="submit" class="btn btn-primary btn-lg" value="Create" >
                        </div>
                    </div>
            </div>
        </div>
    </div>