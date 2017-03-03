<?php

//header("Content-type: application/json");

include 'db.php';

         $vaktid = $_GET['vaktid'];

		 $dato = $_GET['dato'];	   
		 $fra = $_GET['fra'];	   
         $til = $_GET['til'];	   
		 $assistent = $_GET['assistent'];
         
         $sql = "UPDATE vaktliste SET dato = :dato, fra = :fra, til = :til, pid = :assistent WHERE vaktliste.vaktlisteid = :vaktid";
         
        
         $stmt = $db->prepare($sql);
         $stmt->bindParam(':dato', $dato);
         $stmt->bindParam(':fra', $fra);
         $stmt->bindParam(':til', $til);
         $stmt->bindParam(':assistent', $assistent);
         $stmt->bindParam(':vaktid', $vaktid);
         $stmt->execute();
         
         
 
         
	


?>