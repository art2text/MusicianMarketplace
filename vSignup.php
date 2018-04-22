<?php
	/***
	vSignup.php: handles a venue attemtping to signup
	***/

	require("databaseHandler.php");

	// collects signup info from form
	$name       = $_POST["name"];
	$email      = $_POST["email"];
	$pwd        = $_POST["pwd"];

	// inserts info into database
	$dbHandler = new databaseHandler();
	$sql = "INSERT INTO venue_data (name, email, password) VALUES ('".$name."','".$email."','".$pwd."')";

	$dbHandler->runCommand($sql);

	$sql = "SELECT id FROM venue_data WHERE email='". $email ."'";
	$id = $dbHandler->runCommand($sql);

	session_start();
	session_unset(); 
	session_destroy();
	session_start();
	ob_start();
	$_SESSION["id"] = $id;

	// returns id back to frontend
	foreach ($id as $key => $row) {
		foreach ($row as $innerKey => $value) {
	 		echo $value;
		} 
	}

?>