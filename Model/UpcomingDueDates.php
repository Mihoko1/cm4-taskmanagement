<?php

//namespace Model;

class UpcomingDueDates {

    public function __construct() {
        
    }


    public static function getUpcomingDueDates($user_id, $dbconn) {

        $sql = "SELECT * FROM tasks 
                JOIN project_user 
                    ON tasks.assigned_user_id = project_user.id 
                JOIN state 
                    ON tasks.state_id = state.id
                WHERE project_user.app_user_id = :id 
                    AND state.description <> 'Done' 
                    AND state.description <> 'Canceled' 
                ORDER BY tasks.created_date 
                LIMIT 5;";

        $pdostm = $dbconn->prepare($sql);
        $pdostm->bindParam(':id', $user_id);
        $pdostm->setFetchMode(\PDO::FETCH_OBJ); // Return the data from db as objects

        try {
            $pdostm->execute();
            $queryResults = $pdostm->fetchAll(); // Assign the result set to a variable

            $taskElements = '';
            foreach($queryResults as $result) {
            $taskElements .= <<<TASKHTML
                <div class="border-top border-bottom">
                    <h4 class="h6">$result->title</h4>
                    <p>$result->description</p>
                    <p>Created: $result->created_date</p>
                </div>
            TASKHTML;
            }

            $dueDatesDiv = <<<DUEDATESDIV
                <div class="border rounded">
                    <h3 class="h6">Upcoming Due Dates</h3>
                    $taskElements
                </div>
            DUEDATESDIV;

            return $dueDatesDiv;            
        
        
        }
        catch (\Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }
}


?>