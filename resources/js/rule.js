import "lazysizes";
import "splitting/dist/splitting.css";
import "splitting/dist/splitting-cells.css";
import Splitting from "splitting";

const resizeObserver = new ResizeObserver(() => {
	ScrollTrigger.refresh();
	console.log("refresh");
});
resizeObserver.observe(document.body);

$(window).on('load', function() {
	ScrollTrigger.refresh();
	Splitting();
});













$('a[href^="#"]').click(function(e) {
	e.preventDefault();
	var speed = 1000;
	var href= $(this).attr("href");
	var target = $(href == "#" || href == "" ? 'html' : href);
	var windowWidth = $(window).width();
	if (location.pathname.includes('service')) {
		if (windowWidth >= 700) {
			var headerHeight = 0;
		} else {
			var headerHeight = 0;
		}
	} else {
		if (windowWidth >= 700) {
			var headerHeight = 0;
		} else {
			var headerHeight = 0;
		}
	}
	var position = target.offset().top - headerHeight;
	$('body,html').animate({scrollTop:position}, speed, 'swing');
	location.hash = href;
	return false;
});

















