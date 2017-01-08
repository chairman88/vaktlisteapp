<?php

include 'db.php';


     if (isset ($_POST['fname'], $_POST['lname'], $_POST['tlf'], $_POST['epost'], $_POST['adresse'], $_POST['type'], $_POST['brukernavn'], $_POST['passord'])) {
		 $fornavn = $_POST['fname'];	   
		 $etternavn = $_POST['lname'];	   
         $tlf = $_POST['tlf'];	   
		 $epost = $_POST['epost'];
         $adresse = $_POST['adresse'];	   
		 $type = $_POST['type'];
         $brukernavn = $_POST['brukernavn'];	   
		 $passord = $_POST['passord'];
         $sql1 = "INSERT INTO person (fornavn, etternavn, telefonnummer, epostadresse, type)
		       VALUES (:fornavn, :etternavn, :tlf', :epost, :type)";
         $sql2 = "INSERT INTO adresse (adresse)
		       VALUES (:adresse)";
         $sql3 = "INSERT INTO brukere (brukernavn, passord)
		       VALUES (:brukernavn, :passord)";
         $stmt = $db->prepare($sql1,$sql2,$sql3);
         $stmt->bindParam(':fornavn', $fornavn);
         $stmt->bindParam(':etternavn', $etternavn);
         $stmt->bindParam(':tlf', $tlf);
         $stmt->bindParam(':epost', $epost);
         $stmt->bindParam(':type', $type);
         $stmt->bindParam(':adresse', $adresse);
         $stmt->bindParam(':brukernavn', $brukernavn);
         $stmt->bindParam(':passord', $passord);
         $stmt->execute();
 if ($stmt) {
    echo "<script type='text/javascript'>$( '.1' ).text( 'Lagt inn i databasen!' ).css( 'color', 'red' ).show().fadeOut( 3000 );</script>";
}
else
{
    echo "<script type='text/javascript'>$( '.1' ).text( 'Feilet!' ).css( 'color', 'red' ).show().fadeOut( 3000 );</script>";
}

	    
	}


?>