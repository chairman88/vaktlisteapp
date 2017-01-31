<?php

//header("Content-type: application/json");

include 'db.php';

    
		 $id = $_GET['id'];
         $type = "iassistent";
         $sql = "UPDATE person SET type = :type WHERE person.personid = :id";
         
        
         $stmt = $db->prepare($sql);
         $stmt->bindParam(':type', $type);
         $stmt->bindParam(':id', $id);
         $stmt->execute();
         
         
 
         
	


?>