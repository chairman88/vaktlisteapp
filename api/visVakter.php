<?php

//header("Content-type: application/json");

include 'db.php';


          
         $sql = "SELECT vaktlisteid, personid, fornavn, etternavn, dato, fra, til
         FROM person, vaktliste
         WHERE personid = pid 
         ORDER BY dato";
         $data = array();
         $stmt = $db->query($sql);
         $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
         
         $result = json_encode($row);
        
         echo $result; 


         
    


?>