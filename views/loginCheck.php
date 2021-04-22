
<!-- Currently this php file is not used -->

<?php

// Start or resume a session
session_start();

 require_once '../Model/Authentication.php';
 require_once '../Model/Database.php';
//  require_once 'Model/Authentication.php';


if (!filter_var($_POST['userName'], FILTER_VALIDATE_EMAIL)) {
  echo 'Please enter valid email address';
  return false;
}


$db = Database::getDb();

$s = new Authentication();
$user =  $s->getUserData($_POST['userName'], $db);

var_dump($user['password']);
echo $_POST['password'];

//Check if email address is existing in DB
if (!isset($user['email_address'])) {
  echo 'Wrong email or password';
  return false;
}

//Pass email address after check password
if (password_verify($_POST['password'], $user['password'])) {

  //session_regenerate_id(true); //generate and replace new session_id
  //$_SESSION['EMAIL'] = $row['email_address'];
  echo 'Login success';
} else {
    
  echo 'Wrong email address or password2';
  return false;
}
