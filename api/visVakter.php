<?php

header("Content-type: application/json");

include '../db.php';

         $week = $_POST['week'];
         $year = date('Y');

         // Lager en array med dagerIUka for å erstatte dager i uka i vakter.php
         // Hentet fra http://stackoverflow.com/questions/4439722/finding-first-day-of-week-via-php
         function week_start_date($wk_num, $yr, $addDays)
         {
           $wk_ts  = strtotime('+' . $wk_num  . ' weeks', strtotime($yr . '0101'));
           $mon_ts = strtotime('-' . date('N', $wk_ts) + $addDays  +1  . ' days', $wk_ts);
           return $mon_ts;
         } // Hentet fra http://stackoverflow.com/questions/4439722/finding-first-day-of-week-via-php

         $weekdays = ['Søn', 'Man','Tir','Ons','Tor','Fre','Lør' ];
         $dagerIUka = array();
         for ($i=0; $i<7; $i++) {
            $dagerIUka[$i] =
                $weekdays[date('w', week_start_date($week, $year, $i))].
                ' '.
                date('j.n.Y', week_start_date($week, $year, $i));
         }

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

         $result = json_encode(array('vakter' => $row, 'dagerIUka'=>$dagerIUka));

         echo $result;
?>
