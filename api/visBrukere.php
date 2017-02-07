<?php

//header("Content-type: application/json");

include 'db.php';


          
         $sql = "SELECT personid, fornavn, etternavn, telefonnummer, epostadresse, postnummer, poststed, adresse, type
         FROM person";
         $data = array();
         $stmt = $db->query($sql);
         $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
         
         $result = json_encode($row);
         echo $result; 


         
    


?>