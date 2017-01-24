<?php

//header("Content-type: application/json");

require_once 'db.php';


          
         $sql = "SELECT personid, fornavn, etternavn, type
         FROM person";
         $data = array();
         $stmt = $db->query($sql);
         $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
         foreach ($row as $key => $value) {
            $data[$key] = $value;
            $result = json_encode($data);
         }
         echo $result; 


         
    


?>