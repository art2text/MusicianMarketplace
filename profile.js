// aligns proPic vertically
var imgHeight = $('#proPic').height();
var winHeight = $('#proPicSection').height();

$('#proPic').css("top", winHeight / 2 - 0.5 * imgHeight + 'px');

// aligns profile info vertically
var infoHeight = $('#innerInfo').height();
var winHeight = $('#infoSection').height();

$('#innerInfo').css("top", winHeight / 2 - 0.5 * infoHeight + 'px');
