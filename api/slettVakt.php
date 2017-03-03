<?php

//header("Content-type: application/json");

include 'db.php';

    
		 $id = $_POST['id'];
         $sql = "DELETE FROM vaktliste WHERE vaktliste.vaktlisteid = :id";
         
        
         $stmt = $db->prepare($sql);
         $stmt->bindParam(':id', $id);
         $stmt->execute();
         
         
 
         
	


?>