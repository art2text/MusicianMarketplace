<?php
	/***
	validateLogin.php: validate a user's login request
	***/

	require("databaseHandler.php");

	// submitted email and password
	$email = $_POST["email"];
	$pwd   = $_POST["pwd"];

	// check musician login authentication
	$dbHandler = new databaseHandler();
	$sql = "SELECT id FROM musician_data WHERE email='". $email ."' AND password='". $pwd . "'";
	$id = $dbHandler->runCommand($sql);

	if ( count($id) > 0 ) {
		foreach ($id as $key => $row) {
			foreach ($row as $innerKey => $value) {
		 		$url = "musicianProfile.php?id=" . $value;
		 		echo $url;
			} 
		}
	}

	// check venue login authentication
	$sql = "SELECT id FROM venue_data WHERE email='". $email ."' AND password='". $pwd ."'";
	$id = $dbHandler->runCommand($sql);

	if ( count($id) > 0 ) {
		foreach ($id as $key => $row) {
			foreach ($row as $innerKey => $value) {
		 		$url = "venue.php?id=" . $value;
		 		echo $url;
			} 
		}
	}

?>