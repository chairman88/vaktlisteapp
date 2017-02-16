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

                      // id må starte med tekst
            echo "<tr id='assistent_";
             echo ""+ $row['personid'] +"";
             echo "'>";
                                   echo "<td id='assistent'>";
                                    echo $row['fornavn'].' '.$row['etternavn'];
                                    echo "</td>";
                                   for ($i=0; $i<7; $i++) {
                                              // Brukes for å markere hvilken ukedag det er
                                       echo "<td data-day-of-week='".(($i+1)%7)."'>";
                                                               echo "</td>";
                                                               }
                                                               echo "</tr>";

         }




?>
