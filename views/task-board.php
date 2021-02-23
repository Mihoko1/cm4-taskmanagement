<?php

require("./partials/header.php");
insertHeader();
?>
    <!--Main Start Here-->
    <!--Content Start here-->
<main class = "container container-login text-center my-5">
    <div class=" my-5">
        <h2>TEAM C4M Task Management</h2>
        <div class="container">
            <h1>Bootstrap Table</h1>

            <div id="toolbar" class = "col-1">
                <select class="form-control">
                    <option value="">Assigned To</option>
                </select>
            </div>
            <div id="toolbar" class = "col-1">
                <select class="form-control">
                    <option value="">Projects</option>
                </select>
            </div>
            <div id="toolbar">
                <select class="form-control">
                    <option value="">States</option>
                </select>
            </div>
            <div id="toolbar">
                <select class="form-control">
                    <option value="">Sort By</option>
                </select>
            </div>

            <table id="table"
                   data-toggle="table"
                   data-search="true"
                   data-filter-control="true"
                   data-show-export="true"
                   data-click-to-select="true"
                   data-toolbar="#toolbar"
                   class="table-responsive">
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
                    <td>Task Mangement System</td>
                    <td>Ongoing</td>
                </tr>
                </tbody>
            </table>
        </div>
    <!--Main End Here-->
</main>

            <footer class="text-center mt-auto ">
                <p>&#169 Copyright 2021, Team C4M.</p>
            </footer>
        </div>
    </body>
</html>