import $ from "jquery";

import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

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
	var target = $(href && href !== "#" ? href : "html");
	var windowWidth = $(window).width() ?? 0;
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
	var position = (target.offset()?.top ?? 0) - headerHeight;
	$('body,html').animate({scrollTop:position}, speed, 'swing');
	if (href) {
		location.hash = href;
	}
	return false;
});