<!--
index.html: main landing page for sign-in/sign-up
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
	 				<img src="search.png"><input id="searchtextbox" type="text" placeholder="search">
	 			</div>
	 			<div class="results">
	 				<div class="col">
	 					<div class="entry">
	 						<b>Benjamin</b>
	 						<img src="dog.jpg" align="right">
	 						<br>- 5 years young
	 						<br>- a good boi
	 						<br>- bad at guitar
	 						<br>
	 						<br><button type="button"><img src="mail.png"></button>
	 					</div>
	 						<div class="entry">
	 						<b>Benjamin</b>
	 						<img src="dog.jpg" align="right">
	 						<br>- 5 years young
	 						<br>- a good boi
	 						<br>- bad at guitar
	 						<br>
	 						<br><button type="button"><img src="mail.png"></button>
	 					</div>
	 					<div class="entry">text</div>
	 					<div class="entry">text</div>
	 				</div>
	 				<div class="col">
	 					<div class="entry">text</div>
	 					<div class="entry">text</div>
	 					<div class="entry">text</div>
	 					<div class="entry">text</div>
	 				</div>
		 			<div class="col">
	 					<div class="entry">text</div>
	 					<div class="entry">text</div>
	 					<div class="entry">text</div>
	 					<div class="entry">text</div>
	 				</div> 				
	 			</div>
			</div>
		<div>

		<!--
		JS file which assist with some positioning
		-->
		<script src = "frontPage.js"></script>





  
	</body>
</html>
