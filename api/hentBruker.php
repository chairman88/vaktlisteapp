<?php

//header("Content-type: application/json");

include 'db.php';


         $id = $_GET['id']; 
         $sql = "SELECT *
         FROM person WHERE personid =  $id";
         $data = array();
         $stmt = $db->query($sql);
         $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
         
         $result = json_encode($row);
         echo $result; 
         

         
    


?>