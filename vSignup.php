<?php

/***
vSignup.php: handles venue signup request
***/

	require("databaseHandler.php");

	// gather form information
	$name       = $_POST["name"];
	$email      = $_POST["email"];
	$pwd        = $_POST["pwd"];

	// insert information into database
	$dbHandler = new databaseHandler();
	$sql = "INSERT INTO venue_data (name, email, password) VALUES ('".$name."','".$email."','".$pwd."')";

	$dbHandler->runCommand($sql);

	// gather new venue id
	$sql = "SELECT id FROM venue_data WHERE email='". $email ."'";
	$id = $dbHandler->runCommand($sql);

	session_start();
	session_unset(); 
	session_destroy();
	session_start();
	ob_start();
	$_SESSION["id"] = $id;

	foreach ($id as $key => $row) {
		foreach ($row as $innerKey => $value) {
	 		echo $value;
		} 
	}

?>