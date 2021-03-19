<?php
require("./partials/header.php");
insertHeader();
session_start();
?>

<main>
    <section class="container my-5">
        <h2>Create New Category</h2>        
        <form action="" name="taskForm" method="post">
            <div class="row">
                <div class="col-12">
                    <div class="float-end">
                        <button type="button" class="btn btn-secondary">Canceled</button>                        
                        <button type="button" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-success">Save</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12">
                    <label for="task">Category name:</label>
                    <select class="form-control" name="State" id="State">
                        <option value="">Choose one</option>
                    </select> 
                    
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12">
                    <label for="description">Description:</label>
                    <textarea class="form-control" name="description" id="description" rows="8" cols="50" value="<?= isset($comment) ? $comment : ''; ?>"></textarea>
                    <span style="color:red;"><?= isset($commentErr) ? $commentErr : ''; ?></span>
                </div>
            </div>

        <div class="row">
            <div>Created By: Mahsa Karimi Fard </div>
            <div>Last Modify: 2021-02-21</div>  
        </div> 
        </form>
    </section>
</main>