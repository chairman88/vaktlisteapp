<?php

header("Content-type: application/json");

include '../db.php';


         $sql = "SELECT DAYOFWEEK(dato) as dag, vaktlisteid, personid,
                        fornavn, etternavn, dato, fra, til
         FROM person, vaktliste
         WHERE personid = pid
            AND WEEK(dato)=? AND YEAR(dato)=?
         ORDER BY dato";

         // Henter alle vakter for uke=? i år=?
         // "dag" er 0 for søndag, 1 for mandag osv.
         $data = array();
         $stmt = $db->prepare($sql);
         $stmt->execute(array(6, 2017));
         //$stmt = $db->query($sql);
         $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

         $result = json_encode($row);

         echo $result;
