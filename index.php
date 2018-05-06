<!--
index.html: main landing page for sign-in/sign-up users
-->

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
		<link rel = "stylesheet" type = "text/css" href = "frontPage.css" />
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
			<button type="button" class="btn btn-default signing" data-toggle="modal" data-target="#signinModal">Sign-In</button>
			<button type="button" class="btn btn-default signing" id="signupButton" data-toggle="modal" data-target="#signupChoice">Sign-Up</button>
		</div>

		<!--
		main content div below the header (contains large, glossy image)
		-->
		<div id = "mainFrontPicture">
			<div id = "description">
				<h1 id = "about"><span>Connecting Novice Musicians with Venues</span></h1>
			</div>
		</div>

		<!--
		JS file which assist with some positioning
		-->
		<script src = "frontPage.js"></script>

		<!-- Sign-up modal, prompts choice between venue holder or musician -->
		<div class="modal fade" id="signupChoice" role="dialog">
			<div class="modal-dialog">

			  <!-- Modal content-->
			  <div class="modal-content">
			    <div class="modal-header">
			      <button type="button" class="close" data-dismiss="modal">&times;</button>
			      <h4 class="modal-title">Getting Started</h4>
			    </div>
			    <div class="modal-body">
			    	<h3>Which type of user are you?</h3>
					<button type="button" class="btn btn-warning special special-first" data-toggle="modal" data-target="#signupModal" data-dismiss="modal">Musician</button>
					<button type="button" class="btn btn-warning special" data-toggle="modal" data-target="#signupVenueModal" data-dismiss="modal">Venue Hoster</button>
			    </div>
			    <div class="modal-footer">
			      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    </div>
			  </div>
		  
			</div>
		</div>

		<!-- sign-in modal -->
		<div class="modal fade" id="signinModal" role="dialog">
			<div class="modal-dialog">

			  <!-- Modal content-->
			  <div class="modal-content">
			    <div class="modal-header">
			      <button type="button" class="close" data-dismiss="modal">&times;</button>
			      <h4 class="modal-title">Sign-In</h4>
			    </div>
			    <div class="modal-body">
					<form>
						<div class="form-group">
					    	<label for="email">Email address:</label>
					    	<input type="email" class="form-control" id="signinEmail">
						</div>
						<div class="form-group">
							<label for="pwd">Password:</label>
						    <input type="password" class="form-control" id="signinPwd">
						</div>
						<button id = "signinButton" type="button" class="btn btn-default black-button">Sign-In</button>
					</form>
			    </div>
			    <div class="modal-footer">
			      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    </div>
			  </div>
		  
			</div>
		</div>

		<!-- musician sign-up modal -->
		<div class="modal fade" id="signupModal" role="dialog">
			<div class="modal-dialog">

			  <!-- Modal content-->
			  <div class="modal-content">
			    <div class="modal-header">
			      <button type="button" class="close" data-dismiss="modal">&times;</button>
			      <h4 class="modal-title">Musician Sign-Up</h4>
			    </div>
			    <div class="modal-body">
			    	<form>
						<div class="form-group">
					    	<label for="name">Full Name:</label>
					    	<input type="email" class="form-control" id="mSignupName">
						</div>
						<div class="form-group">
							<label for="email">Email:</label>
						    <input type="text" class="form-control" id="mSignupEmail">
						</div>
						<div class="form-group">
							<label for="pwd">Password:</label>
						    <input type="password" class="form-control" id="mSignupPwd">
						</div>
						<div class="form-group">
							<label for="instrument">Instrument Played:</label>
						    <input type="text" class="form-control" id="mSignupInstrument">
						</div>
						<div class="form-group">
							<label for="price">Asking Price:</label>
						    <input type="text" class="form-control" id="mSignupPrice">
						</div>
						<button id = "mSignup" type="button" class="btn btn-default black-button">Sign-Up</button>
					</form>
			    </div>
			    <div class="modal-footer">
			      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    </div>
			  </div>
		  
			</div>
		</div>

		<!-- venue holder sign-up modal -->
		<div class="modal fade" id="signupVenueModal" role="dialog">
			<div class="modal-dialog">

			  <!-- Modal content-->
			  <div class="modal-content">
			    <div class="modal-header">
			      <button type="button" class="close" data-dismiss="modal">&times;</button>
			      <h4 class="modal-title">Venue Sign-Up</h4>
			    </div>
			    <div class="modal-body">
			    	<form>
						<div class="form-group">
					    	<label for="name">Venue Name:</label>
					    	<input type="email" class="form-control" id="vSignupName">
						</div>
						<div class="form-group">
							<label for="email">Email:</label>
						    <input type="text" class="form-control" id="vSignupEmail">
						</div>
						<div class="form-group">
							<label for="pwd">Password:</label>
						    <input type="password" class="form-control" id="vSignupPwd">
						</div>
						<button id = "vSignup" type="button" class="btn btn-default black-button">Sign-Up</button>
					</form>
			    </div>
			    <div class="modal-footer">
			      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    </div>
			  </div>
		  
			</div>
		</div>
  
	</body>
</html>
