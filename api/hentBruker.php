<?php

//header("Content-type: application/json");

require_once 'db.php';


        // $id = $_GET['id']; 
         $sql = "SELECT fornavn, etternavn, telefonnummer, epostadresse, postnummer, poststed, adresse, type, brukernavn, passord
         FROM person WHERE person.personid = 7";
         $stmt = $db->query($sql);
         
         $result = json_encode($stmt);
         
         echo $result; 
         

         
    


?>