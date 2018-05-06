/***
search.js: handles all client-side scripting for search
***/

$(document).ready(function() {

	// handles when search result clicked
	$('#searchButton').click(function() {
		var val = $('#searchtextbox').val();
		var url = 'search.php?nameSearched=' + val;

		window.location.href = url;
	});
});

