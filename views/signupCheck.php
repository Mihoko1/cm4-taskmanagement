<!-- Currently this php file is not used -->

<?php
 require_once '../Model/Authentication.php';
 require_once '../Model/Database.php';
//  require_once 'Model/Authentication.php';

 
//Validate
if (!$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo 'Invalid email';
    return false;
  }
  //password regx
  if (preg_match('/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,100}+\z/i', $_POST['password'])) {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  } else {
    echo 'password must more than 8 words';
    return false;
  }
 
  try {
    $db = Database::getDb();

    $s = new Authentication();
    $user =  $s->registerUserData($_POST['fname'], $_POST['lname'], $_POST['email'], $password , $db);
    
   
    echo 'register success';
  } catch (\Exception $e) {
    echo $e;
  }