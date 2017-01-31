<?php

//header("Content-type: application/json");

include 'db.php';

         $id = $_GET['id'];

		 $fornavn = $_GET['fn'];	   
		 $etternavn = $_GET['ln'];	   
         $tlf = $_GET['tlf'];	   
		 $epost = $_GET['epost'];
         $postnummer = $_GET['postnummer'];	   
		 $poststed = $_GET['poststed'];
         $adresse = $_GET['adresse'];	   
		 $type = $_GET['type'];
         $brukernavn = $_GET['brukernavn'];	   
		 $passord = $_GET['passord'];

         $sql = "UPDATE person SET fornavn = :fornavn, etternavn = :etternavn, telefonnummer = :tlf, epostadresse = :epost, postnummer = :postnummer, poststed = :poststed, adresse = :adresse, type = :type, brukernavn = :brukernavn, passord = :passord WHERE person.personid = :id";
         
        
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
         $stmt->bindParam(':id', $id);
         $stmt->execute();
         
         
 
         
	


?>