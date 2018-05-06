<!--
venue.php: Generic profile page for venues who create an account
-->

<?php
	require("databaseHandler.php");

	// get venue id from url variable
	$id = $_GET["id"];


	$dbHandler = new databaseHandler();

	// gather user information
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
			<!--
			User Experience buttons
			-->
			<button type="button" class="btn btn-warning actions margin2" onclick="window.location.href = '#'">Profile</button>
			<button type="button" class="btn btn-warning actions margin" onclick="window.location.href = 'search.php'">Search</button>
			<button type="button" class="btn btn-warning actions" onclick="window.location.href = 'index.php'">Logout</button>

		</div>

		<!--
		rest of text and images for profile page
		-->
		<div id = "mainInfo">
			

			<!--
			profile picture
			-->
			<div id = "proPicSection">
				<img id= "proPic" src = "proPic.jpg" />
			</div>

			<!--
			user info
			-->
			<div id = "infoSection">
				<div id ="innerInfo">
					<?php
					echo '
						<h2>' . $name . '</h2>
						<p>Location: Waterville, ME</p>
						<p>Contact Info: ' . $email .'</p>
					';
					?>
					<button type="button" class="btn btn-warning">Edit Info</button>
				</div>
			</div>

			<!--
			review section
			-->
			<div id="reviewSection">
				<div id="reviews">
					<h2>Reviews</h2>
					<p>Great venue to work at</p>
					<p>Great venue to work at</p>
					<p>Great venue to work at</p>
					<p>Great venue to work at</p>
					<p>Great venue to work at</p>
					<p>Great venue to work at</p>
					<p>Great venue to work at</p>
					<p>Great venue to work at</p>
					<p>Great venue to work at</p>
					<button type="button" class="btn btn-warning" id="addReviewButton" data-toggle="modal" data-target="#addReview">Add Review</button>
				</div>
			</div>

			<!-- Add Review modal -->
			<div class="modal fade" id="addReview" role="dialog">
				<div class="modal-dialog">

				  <!-- Modal content-->
				  <div class="modal-content">
				    <div class="modal-header">
				      <button type="button" class="close" data-dismiss="modal">&times;</button>
				      <h4 class="modal-title">Add a Review</h4>
				    </div>
				    <div class="modal-body">
						<form>
							<div class="form-group">
								<label for="review">Review:</label>
							    <input type="text" class="form-control" id="review">
							</div>
							<button type="submit" class="btn btn-warning">Submit</button>
						</form>
				    </div>
				    <div class="modal-footer">
				      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				    </div>
				  </div>
			  
				</div>
			</div>

			<!-- Edit Info modal -->
			<div class="modal fade" id="editInfo" role="dialog">
				<div class="modal-dialog">

				  <!-- Modal content-->
				  <div class="modal-content">
				    <div class="modal-header">
				      <button type="button" class="close" data-dismiss="modal">&times;</button>
				      <h4 class="modal-title">Edit Info</h4>
				    </div>
				    <div class="modal-body">
						<form>
							<div class="form-group">
								<label for="name">Name:</label>
							    <input type="text" class="form-control" id="name">
							</div>
							<div class="form-group">
								<label for="style">Style:</label>
							    <input type="text" class="form-control" id="style">
							</div>
							<div class="form-group">
								<label for="location">Location:</label>
							    <input type="text" class="form-control" id="location">
							</div>
							<div class="form-group">
								<label for="price">Price:</label>
							    <input type="text" class="form-control" id="price">
							</div>
							<div class="form-group">
						    	<label for="email">Email address:</label>
						    	<input type="email" class="form-control" id="email">
							</div>
							<div class="form-group">
								<label for="demo">Demo:</label>
							    <input type="text" class="form-control" id="demo">
							</div>
							<button type="submit" class="btn btn-warning">Submit</button>
						</form>
				    </div>
				    <div class="modal-footer">
				      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				    </div>
				  </div>
			  
				</div>
			</div>

		</div>
		<script type= "text/javascript" src = "profile.js"></script>
	</body>

</html>

