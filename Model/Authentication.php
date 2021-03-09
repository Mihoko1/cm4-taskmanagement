<?php
// namespace TaskManagement\Model;

class Authentication
{

   

    public function getUserData($email, $db){

        $sql = "SELECT * FROM app_user WHERE email_address = :email";

        $pdostm = $db->prepare($sql);
        $pdostm->bindParam(':email' , $email );
        
        $pdostm->execute();
        return $user = $pdostm->fetch(\PDO::FETCH_ASSOC);
        
    }

    public function registerUserData($fname, $lname, $email, $password, $db){
        $sql = "INSERT INTO app_user ( first_name, last_name, password, email_address) VALUES (:fname, :lname, :password, :email)";
    
        $pdostm = $db->prepare($sql);
        $pdostm->bindParam(':fname' , $fname );
        $pdostm->bindParam(':lname' , $lname );
        $pdostm->bindParam(':password' , $password );
        $pdostm->bindParam(':email' , $email );
        

        return $user = $pdostm->execute();
    }

    
}