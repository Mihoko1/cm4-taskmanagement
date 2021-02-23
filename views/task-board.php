<?php
require("./partials/header.php");
require("./partials/sidebar.php");
insertHeader();
insertSidebar();
?>
    <!--Main Start Here-->
    <!--Content Start here-->

<main class = "container container-login text-center my-5">
    <div class=" my-5">
        <h2>TEAM C4M Task Management</h2>
        <h1>Bootstrap Table</h1>
        <div class="container-fluid d-lg-flex pb-5  "></div>

            <div id="toolbar" class = "col-lg-2 d-inline-flex flex-md-fill">
                <select class="form-control">
                    <option value="">Assigned To</option>
                </select>
            </div>
            <div id="toolbar" class = "col-lg-2 d-inline-flex flex-md-fill">
                <select class="form-control">
                    <option value="">Projects</option>
                </select>
            </div>
            <div id="toolbar" class ="col-lg-2 d-inline-flex flex-md-fill">
                <select class="form-control">
                    <option value="">Status</option>
                </select>
            </div>
            <div id="toolbar" class ="col-lg-2 d-inline-flex flex-md-fill">
                <select class="form-control ">
                    <option value="">Sort By</option>
                </select>
            </div>
        <div  class="table-responsive my-md-5">
            <table class="table"
                   data-toggle="table"
                   data-search="true"
                   data-filter-control="true"
                   data-show-export="true"
                   data-click-to-select="true"
                   data-toolbar="#toolbar"
                  >
                <thead>
                <tr>
                    <th data-field="id" >ID</th>
                    <th data-field="title" data-filter-control="input" data-sortable="true">Title</th>
                    <th data-field="project" data-filter-control="select" data-sortable="true">Project</th>
                    <th data-field="status" data-filter-control="select" data-sortable="true">Status</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Aroma</td>
                    <td>Restaurant Website</td>
                    <td>Ongoing</td>
                </tr>
                <tr>
                    <td> 2</td>
                    <td>PHP</td>
                    <td>Task Management System</td>
                    <td>Ongoing</td>
                </tr>
                </tbody>
            </table>
        </div>
    <!--Main End Here-->
</main>


<?php

require("./partials/footer.php");
insertFooter();

?>