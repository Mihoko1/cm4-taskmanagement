<?php
require("./partials/header.php");
require("./partials/sidebar.php");
insertSidebar();
?>
    <!--Main Start Here-->
    <!--Content Start here-->
<main>
    <h2 class="my-md-5">Dashboard</h2>
        <div class="container-fluid ">
                <div class = "d-lg-flex pb-2 justify-content-end">
                    <div  class = "col-sm-2 d-inline-flex flex-fill" >
                        <select class="form-control">
                            <option value="">Assigned To</option>
                        </select>
                    </div>
                    <div  class = "col-sm-2 d-inline-flex flex-fill">
                        <select class="form-control">
                            <option value="">Projects</option>
                        </select>
                    </div>
                    <div  class="col-sm-2 d-inline-flex flex-fill">
                        <select class="form-control">
                            <option value="">Status</option>
                        </select>
                    </div>
                    <div  class="col-sm-2 d-inline-flex flex-fill">
                        <select class="form-control">
                            <option value="">Sort By</option>
                        </select>
                    </div>
                </div>
            <p></p>

                <table class="table">
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

    <footer class="text-center mt-auto ">
        <p>&#169 Copyright 2021, Team C4M.</p>
    </footer>
</div>
</body>
</html>