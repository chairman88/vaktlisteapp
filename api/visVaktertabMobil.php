<?php

//header("Content-type: application/json");

include_once 'db.php';



         $sql = "SELECT  personid, fornavn, etternavn, type
         FROM  person
         WHERE type = 'assistent'
         
         ";
         $data = array();
         $stmt = $db->query($sql);
              
         while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            
                      // id må starte med tekst
             echo "<tr id='assistent_mobil_";
             echo ""+ $row['personid'] +"";
             echo "'>";
                                    echo "<td id='assistentmobil'>";
                                    echo $row['fornavn'].' '.$row['etternavn'];
                                    echo "</td>";
             echo "<td data-day-of-week-mobile='".(($i+1)%7)."'>";
                                                               echo "</td>";
                                    
                                                               
                                   
                                   
                                   
         }
         
              




?>
