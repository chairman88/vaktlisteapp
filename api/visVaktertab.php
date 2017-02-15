<?php

//header("Content-type: application/json");

include 'db.php';

function week_start_date2($wk_num, $yr, $addDays)
                                {
                                  $wk_ts  = strtotime('+' . $wk_num . ' weeks', strtotime($yr . '0101'));
                                  $mon_ts = strtotime('-' . date('w', $wk_ts) + $addDays + 1 . ' days', $wk_ts);
                                  return $mon_ts;
                                }

          
         $sql = "SELECT personid, fornavn, etternavn
         FROM person";
         $data = array();
         $stmt = $db->query($sql);
         while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
         
         
            echo "<tr id='";
             echo ""+ $row['personid'] +"";
             echo "'>";
                                   echo "<td id='assistent'>"; 
                                    
                                    echo "</td>";
                                   for ($i=0; $i<7; $i++) {
                                       
                                       echo "<td class='".date('j-n-Y', week_start_date2(5, 2017, $i))."'>";
                                                               echo "</td>";
                                                               }
                                                               echo "</tr>"; 

         }
         
    


?>