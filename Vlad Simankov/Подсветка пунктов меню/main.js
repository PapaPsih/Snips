$(document).ready(function() {
	menu();
});

function menu() {
	$('.menu_item').each(function() {
		var href = $(this).attr('href');
		hash = window.location.hash;
		href = href.replace(hash,'');
		if (href === window.location.pathname) {
			$(this).addClass('active');
		}
	});
}
