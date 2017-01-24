<?php

//header("Content-type: application/json");

include 'db.php';

     if ( isset($_POST['fn'], $_POST['ln'], $_POST['tlf'], $_POST['epost'], $_POST['postnummer'], $_POST['poststed'], $_POST['adresse'], $_POST['type'], $_POST['brukernavn'], $_POST['passord']) && !empty($_POST['fn']) && !empty($_POST['ln']) && !empty($_POST['tlf']) && !empty($_POST['epost']) && !empty($_POST['postnummer']) && !empty($_POST['poststed']) && !empty($_POST['adresse']) && !empty($_POST['type']) && !empty($_POST['brukernavn']) && !empty($_POST['passord'])) {
		 $fornavn = $_POST['fn'];	   
		 $etternavn = $_POST['ln'];	   
         $tlf = $_POST['tlf'];	   
		 $epost = $_POST['epost'];
         $postnummer = $_POST['postnummer'];	   
		 $poststed = $_POST['poststed'];
         $adresse = $_POST['adresse'];	   
		 $type = $_POST['type'];
         $brukernavn = $_POST['brukernavn'];	   
		 $passord = $_POST['passord'];
         $sql = "INSERT INTO person (fornavn, etternavn, telefonnummer, epostadresse, postnummer, poststed, adresse, type, brukernavn, passord)
		       VALUES (:fornavn, :etternavn, :tlf, :epost, :postnummer, :poststed, :adresse, :type, :brukernavn, :passord)";
         
        
         $stmt = $db->prepare($sql);
         $stmt->bindParam(':fornavn', $fornavn);
         $stmt->bindParam(':etternavn', $etternavn);
         $stmt->bindParam(':tlf', $tlf);
         $stmt->bindParam(':epost', $epost);
         $stmt->bindParam(':postnummer', $postnummer);
         $stmt->bindParam(':poststed', $poststed);
         $stmt->bindParam(':adresse', $adresse);
         $stmt->bindParam(':type', $type);
         $stmt->bindParam(':brukernavn', $brukernavn);
         $stmt->bindParam(':passord', $passord);
         $stmt->execute();
         
         
 
         
	}


?>