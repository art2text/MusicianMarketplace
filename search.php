<?php
/***
search.php: search page across entire website
***/

	require("databaseHandler.php");

	// gather which name was searched
	$nameSearched = $_GET['nameSearched'];
	$dbHandler = new databaseHandler();

	// gather information on search term from database
	$sql = "SELECT id, name, email, instrument, price FROM musician_data WHERE name LIKE '" . $nameSearched . "%'";
	$tableResults = $dbHandler->runCommand($sql);

	if (!$nameSearched) {
		$tableResults = array();
	}

	// organize results into 3 columns of data
	$tempTableResults = array();
	$rowCounter = 0;
	foreach ($tableResults as $key => $row) {
		array_push($tempTableResults, array());
		foreach ($row as $innerKey => $value) {
	 		$tempTableResults[$rowCounter][$innerKey] = $value;
		}
		$rowCounter++; 
	}
	$tableResults = $tempTableResults;

	$col1Results = array();
	$col2Results = array();
	$col3Results = array();

	for ($i = 0; $i < count($tableResults); $i++) {
		if ($i % 3 == 0 && $i != 1 && $i != 2) {
			array_push($col1Results, $tableResults[$i]);
		}
		else if ($i % 3 == 1 && $i != 0 && $i != 2) {
			array_push($col2Results, $tableResults[$i]);
		}
		else if ($i % 3 == 2 && $i != 0 && $i != 1) {
			array_push($col3Results, $tableResults[$i]);
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
		<link rel = "stylesheet" type = "text/css" href = "search.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>

	<!--
	body: all display content
	-->
	<body>

		<!--
		header bar at top of screen
		-->
		<div id = "header">
			<img id = "logo" src = "logo.PNG" />
		</div>

		<div id="wrapper1">
			<div id="parameters">
				<h1>Parameters</h1>
				Distance: <input type="text" placeholder="">
				Price range: <input type="text">
				Instrument:<br>
				<select>
				  <option value="guitar">Guitar</option>
				  <option value="drums">Drums</option>
				  <option value="keyboard">Keyboard</option>
				  <option value="woodwind">Woodwind</option>
				  <option value="other">Other</option>
				</select>
			</div>
			<div id="searchwrapper">
				<div id="searchboxwrapper">
	 				<img id = "searchButton" src="search.png"><input id="searchtextbox" type="text" placeholder="search">
	 			</div>

	 			<!--
				show results columns
				-->
	 			<div class="results">
	 			<?php
	 				echo '<div class="col">';
	 				for ($i = 0; $i < count($col1Results); $i++) {
	 					$dataRow = $col1Results[$i];
 						echo '<div class="entry">';
 						echo '<a href="musicianProfile.php?id='. $dataRow["id"] .'"<b>' . $dataRow['name'] . '</b></a>';
 						echo '<img src="dog.jpg" align="right">';
 						echo '<br>-Plays ' . $dataRow['instrument'];
 						echo '<br>-Hourly Price ' . $dataRow['price'];
 						echo '</div>';
	 				}
	 				echo '</div>';

	 				echo '<div class="col">';
	 				for ($i = 0; $i < count($col2Results); $i++) {
	 					$dataRow = $col2Results[$i];
 						echo '<div class="entry">';
 						echo '<a href="musicianProfile.php?id='. $dataRow["id"] .'"<b>' . $dataRow['name'] . '</b></a>';
 						echo '<img src="dog.jpg" align="right">';
 						echo '<br>-Plays ' . $dataRow['instrument'];
 						echo '<br>-Hourly Price ' . $dataRow['price'];
 						echo '</div>';
	 				}
	 				echo '</div>';

	 				echo '<div class="col">';
	 				for ($i = 0; $i < count($col3Results); $i++) {
	 					$dataRow = $col3Results[$i];
 						echo '<div class="entry">';
 						echo '<a href="musicianProfile.php?id='. $dataRow["id"] .'"<b>' . $dataRow['name'] . '</b></a>';
 						echo '<img src="dog.jpg" align="right">';
 						echo '<br>-Plays ' . $dataRow['instrument'];
 						echo '<br>-Hourly Price ' . $dataRow['price'];
 						echo '</div>';
	 				}
	 				echo '</div>';
	 				
	 			?>

	 			</div>

			</div>
		<div>

		<!--
		JS file which assist with some positioning
		-->
		<script src = "frontPage.js"></script>
		<script src = "search.js"></script>





  
	</body>
</html>
