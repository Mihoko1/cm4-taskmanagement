<?php
require("./partials/header.php");
require("./partials/sidebar.php");
insertHeader();
//insertSidebar();
session_start();

?>
<!--Main Start Here-->
<!--Content Start here-->

<main class="text-center">
    <section class="container my-5">
        <!--name of the project-->
        <h2>Aroma website project -Task board</h2>
        <form class="row my-md-4 task-filters" >

            <div class="col-md-3" >
                <select class="form-control" >
                    <option value="">Assigned To</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-control">
                    <option value="">Category</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-control">
                    <option value="">State</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-control ">
                    <option value="">Sort By</option>
                </select>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-hover" data-toggle="table" data-search="true" data-filter-control="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" data-field="id">ID</th>
                        <th scope="col" data-field="title" data-filter-control="input" data-sortable="true">Title</th>
                        <th scope="col" data-field="project" data-filter-control="select" data-sortable="true">Task group</th>
                        <th scope="col" data-field="status" data-filter-control="select" data-sortable="true">State</th>
                    </tr>
                </thead>
                <tbody >
                    <tr>
                        <th scope="row">125</th>
                        <td class="text-start">Create admin panel for career page</td>
                        <td>Career page</td>
                        <td>To do</td>
                    </tr>
                    <tr>
                        <th scope="row">126</th>
                        <td class="text-start">Design tables for career page</td>
                        <td>Career page</td>
                        <td>Done</td>
                    </tr>
                    <tr>
                        <th scope="row">127</th>
                        <td class="text-start">Design career page</td>
                        <td>Career page</td>
                        <td>In progress</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</main>


<?php

require("./partials/footer.php");
insertFooter();

?>