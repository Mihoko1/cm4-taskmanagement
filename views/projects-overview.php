<?php
require_once '../Model/ProjectOverview.php';
require_once '../Model/Database.php';

require("./partials/footer.php");
require("./partials/header.php");
insertHeader();
 
session_start();

$dbcon = Database::getDb();
$p = new ProjectOverview();
$projects =  $p->getAllProjects(Database::getDb());

?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>