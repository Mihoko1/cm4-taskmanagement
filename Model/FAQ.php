<?php
// namespace TaskManagement\Model;

class FAQ
{

    public function getFAQ($db){

        $sql = "SELECT * FROM faq";

        $pdostm = $db->prepare($sql);
        
        $pdostm->execute();
        return $faq = $pdostm->fetchAll(\PDO::FETCH_ASSOC);
        
    }
    

    public function getFAQBySearch($search, $db){
     

        $sql = "SELECT * FROM faq WHERE question LIKE :search";

        $keyword = "%".$search."%";

        $pdostm = $db->prepare($sql);
        $pdostm->bindParam(':search' , $keyword);

    
        $pdostm->execute();

       
        return $faq = $pdostm->fetchAll(\PDO::FETCH_ASSOC);
        
    }

    public function getFAQByCategory($category, $db){
     

        $sql = "SELECT * FROM faq WHERE category = :category";

        $pdostm = $db->prepare($sql);
        $pdostm->bindParam(':category' , $category);
       
        $pdostm->execute();

       
        return $faq = $pdostm->fetchAll(\PDO::FETCH_ASSOC);
        
    }
    
}