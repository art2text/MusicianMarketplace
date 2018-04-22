/***
frontPage.js: provides positioning alignment at time of window loading
***/

// aligns website description in glossy photo
var descriptionHeight = $(window).height() * 0.85;
$('#about').css("line-height", descriptionHeight + 'px');

// aligns image in header
var imgWidth = $('#logo').width();
var winWidth = $(window).width();

$('#logo').css("left", winWidth / 2 - 0.5 * imgWidth + 'px');

// handle musician signup
$(document).on('click', '#mSignup', function(){
	var name       = $("#mSignupName").val();
	var email      = $("#mSignupEmail").val();
	var pwd        = $("#mSignupPwd").val();
	var instrument = $("#mSignupInstrument").val();
	var price      = $("#mSignupPrice").val();

	var id = false;
	console.log("got here");
	$.post("mSignup.php", {name: name, email: email, pwd: pwd, instrument: instrument, price: price}, function(loggedInId){
		if (loggedInId != false) {
			var url = "musicianProfile.php?id=" + loggedInId; 
			window.location.href = url;
		}
	});

});

// handle venue signup
$(document).on('click', '#vSignup', function(){
	var name       = $("#vSignupName").val();
	var email      = $("#vSignupEmail").val();
	var pwd        = $("#vSignupPwd").val();

	$.post("vSignup.php", {name: name, email: email, pwd: pwd}, function(loggedInId){
		if (loggedInId != false) {
			var url = "venue.php?id=" + loggedInId; 
			window.location.href = url;
		}
	});

	
});

// handle any user signin request
$(document).on('click', '#signinButton', function(){
	var email = $("#signinEmail").val();
	var pwd = $("#signinPwd").val();

	$.post("validateLogin.php", {email: email, pwd: pwd}, function(profileURL){
		if (profileURL != false) {
			window.location.href = profileURL;
		}
	});


});
