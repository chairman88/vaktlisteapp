<?php

//header("Content-type: application/json");

include 'db.php';


         $vaktid = $_GET['vaktid'];
         $personid = $_GET['personid'];
         $sql = "SELECT fornavn, etternavn, personid, dato, fra, til
         FROM person, vaktliste WHERE personid =  $personid
         AND vaktlisteid = $vaktid";
         $data = array();
         $stmt = $db->query($sql);
         $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
         
         $result = json_encode($row);
         echo $result; 
         

         
    


?>