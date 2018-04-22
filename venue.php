<!--
venue.php: Generic profile page for venues who create an account
-->

<?php
	// grab all the venue holder's infomation from the database based on id
	require("databaseHandler.php");
	$id = $_GET["id"];


	$dbHandler = new databaseHandler();

	$sql = "SELECT name, email FROM venue_data WHERE id='". $id ."'";
	$rows = $dbHandler->runCommand($sql);

	$name;
	$email;

	foreach ($rows as $key => $row) {
		foreach ($row as $innerKey => $value) {
	 		if ($innerKey == "name") {
	 			$name = $value;
	 		}
	 		else if ($innerKey == "email") {
	 			$email = $value;
	 		}
		} 
	}


?>

<html>

	<!--
	head: contains all file dependencies (CSS + JavaScript)
	-->
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel = "stylesheet" type = "text/css" href = "profile.css" />
	</head>

	<!--
	body: all display content
	-->
	<body>

		<!--
		header content
		-->
		<div id = "header">
			<img src = "logo.PNG" />
		</div>

		<!--
		main information for profile page
		-->
		<div id = "mainInfo">

			<!--
			profile image
			-->
			<div id = "proPicSection">
				<img id= "proPic" src = "venue.jpg" />
			</div>

			<!--
			user information
			-->
			<div id = "infoSection">
				<div id ="innerInfo">
					<?php
						echo ' 
							<h2>'. $name .'</h2>
							<p>Location: Waterville, ME</p>
							<p>Asking Price: $20/hour</p>
							<p>Contact Info: '. $email .'</p>
						';
					?>
					<button type="button" class="btn btn-warning">Edit Info</button>
				</div>
			</div>
			
		</div>
		<script type= "text/javascript" src = "profile.js"></script>
	</body>

</html>

