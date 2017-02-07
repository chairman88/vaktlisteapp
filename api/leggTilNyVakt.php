<?php

//header("Content-type: application/json");

include 'db.php';

     if ( isset($_POST['dato'], $_POST['fra'], $_POST['til'], $_POST['assistent']) && !empty($_POST['dato']) && !empty($_POST['fra']) && !empty($_POST['til']) && !empty($_POST['assistent'])) {
		 $dato = $_POST['dato'];	   
		 $fra = $_POST['fra'];	   
         $til = $_POST['til'];	   
		 $assistent = $_POST['assistent'];
         
         $sql = "INSERT INTO vaktliste (dato, fra, til, personid)
		       VALUES (:dato, :fra, :til, :assistent)";
         
        
         $stmt = $db->prepare($sql);
         $stmt->bindParam(':dato', $dato);
         $stmt->bindParam(':fra', $fra);
         $stmt->bindParam(':til', $til);
         $stmt->bindParam(':assistent', $assistent);
         $stmt->execute();
         
         
 
         
	}


?>