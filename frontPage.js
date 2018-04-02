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
