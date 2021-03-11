
<?php
// namespace TaskManagement\Model;

class Contact
{

    public function addContactInfoPublic($name, $email_address, $phone_number, $subject, $message, $db)
    {


        $sql = "INSERT INTO contact_info_public (name, email_address, phone_number, subject, message) values (:name, :email_address, :phone_number, :subject, :message )";

        $pdostm = $db->prepare($sql);
        $pdostm->bindParam(':name' , $name );
        $pdostm->bindParam(':email_address' , $email_address );
        $pdostm->bindParam(':phone_number' , $phone_number );
        $pdostm->bindParam(':subject' , $subject );
        $pdostm->bindParam(':message' , $message );

        $count = $pdostm->execute();

        return $count;
    }
}