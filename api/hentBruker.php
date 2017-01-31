<?php

//header("Content-type: application/json");

include 'db.php';


         $id = $_GET['id']; 
         $sql = "SELECT *
         FROM person WHERE personid =  $id";
         $data = array();
         $stmt = $db->query($sql);
         $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
         foreach ($row as $key => $value) {
            $data[$key] = $value;
            $result = json_encode($data);
         }
         echo $result; 
         

         
    


?>