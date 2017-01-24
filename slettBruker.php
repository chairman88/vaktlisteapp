<?php

//header("Content-type: application/json");

include 'db.php';

    
		 $id = $_POST['id'];
         $sql = "DELETE FROM person WHERE person.personid = :id";
         
        
         $stmt = $db->prepare($sql);
         $stmt->bindParam(':id', $id);
         $stmt->execute();
         
         
 
         
	


?>