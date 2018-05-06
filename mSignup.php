<?php

/***
mSignup.php: handles musician signup request
***/

require("databaseHandler.php");

// gather form information
$name       = $_POST["name"];
$email      = $_POST["email"];
$pwd        = $_POST["pwd"];
$instrument = $_POST["instrument"];
$price      = floatval($_POST["price"]);

// insert into database
$dbHandler = new databaseHandler();
$sql = "INSERT INTO musician_data (name, email, password, instrument, price) VALUES ('".$name."','".$email."','".$pwd."','".$instrument."','".$price."')";

$dbHandler->runCommand($sql);

// gather new musician id
$sql = "SELECT id FROM musician_data WHERE email='". $email ."'";
$id = $dbHandler->runCommand($sql);

session_start();
session_unset(); 
session_destroy();
session_start();
ob_start();
$_SESSION["id"] = $id;

foreach ($id as $key => $row) {
	foreach ($row as $innerKey => $value) {
 		print $value;
	} 
}

?>