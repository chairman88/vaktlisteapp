<?php

header("Content-type: application/json");

include '../db.php';

         $week = $_POST['week'];
         $year = date('Y');
         

         $sql = "SELECT DAYOFWEEK(dato) -1 as dag, vaktlisteid, personid,
                        fornavn, etternavn, dato, fra, til
         FROM person, vaktliste
         WHERE personid = pid
            AND WEEK(dato, 1)=? AND YEAR(dato)=?
            
         ";

         // Henter alle vakter for uke=? i år=?
         // "dag" er 0 for søndag, 1 for mandag osv.
         $data = array();
         
         $stmt = $db->prepare($sql);
         $stmt->execute(array($week, $year));
         //$stmt = $db->query($sql);
         $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

         $result = json_encode($row);

         echo $result;
?>