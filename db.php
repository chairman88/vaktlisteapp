<?php


try 							// Attempt a connection to the database:
{
	//$db = new PDO('mysql:host=127.0.0.1','root','');
	$db = new PDO("mysql:host=eu-cdbr-west-01.cleardb.com; dbname=heroku_8ecd2cc03a114b6", "b273326046f12f", "26ff9f31");
}
catch (PDOException $e)			// If an error is detected
{
	if (isset($debug))			// If we are doing development
		die ('Unable to connect to database : '.$e->getMessage());

	else 						// Do NOT show above information to end users.
		die ('Unable to connect to database, please try again later');
}
include_once("createDB.php");
?>
