$(document).ready(function() {
	$('.nav_tab').click(function (e) {
			checkURL(this.hash);
	});
	setInterval("checkURL()",250);
});

var lasturl="";
function checkURL(hash) {
	hash=window.location.hash;
	if(hash != lasturl) {
		lasturl=hash;
		loadPage(hash);
	}
}

function loadPage(url) {
	url=url.replace('#','');
	$.ajax ({
		type: 'POST',
		url: '../load_page.php',
		data: {page: url, pathname: pathname},
		dataType: "html",
		success: function(msg) {
			if(parseInt(msg)!=0) {
				$('.content_load').html(msg);
			}
		}
	});
}
