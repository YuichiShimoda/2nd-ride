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

















gsap.fromTo("#mv .content-box",
	{translateZ: 0},
	{translateZ: 800, ease: "power1.out",
		scrollTrigger: {
			trigger: "#mv",
			start: "top top-=30%",
			end: "bottom top",
			scrub: 1.0,
			// markers: true,
		}
	}
);
gsap.fromTo("#mv",
	{clipPath: "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)"},
	{clipPath: "polygon(50% 0%, 50% 0%, 50% 100%, 50% 100%)", ease: "power1.out",
		scrollTrigger: {
			trigger: "#mv",
			start: "top top-=80%",
			end: "bottom top",
			scrub: 1.0,
			// markers: true,
		}
	}
);

























gsap.fromTo("#belief .progress",
	{height: "0%"},
	{height: "100%", ease: "none",
		scrollTrigger: {
			trigger: "#belief-scroll-space",
			start: "top top",
			end: "bottom top",
			scrub: 1.0,
			// markers: true,
		}
	}
);
gsap.fromTo("#belief",
	{y: "0"},
	{y: "-100vh", ease: "none",
		scrollTrigger: {
			trigger: "#belief-scroll-space",
			start: "bottom top",
			end: "bottom top-=100%",
			scrub: 1.0,
			// markers: true,
		}
	}
);
ScrollTrigger.create({
	trigger: "#mv",
	start: "bottom top",
	// markers: true,
	onEnter: () => {
		$("#belief").addClass("is-show");
	},
	onLeaveBack: () => {
		$("#belief").removeClass("is-show");
	},
});


















ScrollTrigger.create({
	trigger: "#service .en",
	start: "top bottom",
	// markers: true,
	onEnter: () => {
		$("#service .tit-box").addClass("is-on");
	},
	onLeaveBack: () => {
		$("#service .tit-box").removeClass("is-on");
	},
});

ScrollTrigger.create({
	trigger: "#service .left-box .step-ele:nth-of-type(1) .img-box",
	start: "bottom bottom",
	// markers: true,
	onEnter: () => {
		$("#service .left-box .step-ele:nth-of-type(1)").addClass("is-glitch");
	},
	onLeaveBack: () => {
		$("#service .left-box .step-ele:nth-of-type(1)").removeClass("is-glitch");
	},
});
ScrollTrigger.create({
	trigger: "#service .left-box .step-ele:nth-of-type(2) .img-box",
	start: "bottom bottom",
	// markers: true,
	onEnter: () => {
		$("#service .left-box .step-ele:nth-of-type(2)").addClass("is-glitch");
	},
	onLeaveBack: () => {
		$("#service .left-box .step-ele:nth-of-type(2)").removeClass("is-glitch");
	},
});
ScrollTrigger.create({
	trigger: "#service .right-box .step-ele:nth-of-type(1) .img-box",
	start: "bottom bottom",
	// markers: true,
	onEnter: () => {
		$("#service .right-box .step-ele:nth-of-type(1)").addClass("is-glitch");
	},
	onLeaveBack: () => {
		$("#service .right-box .step-ele:nth-of-type(1)").removeClass("is-glitch");
	},
});
ScrollTrigger.create({
	trigger: "#service .right-box .step-ele:nth-of-type(2) .img-box",
	start: "bottom bottom",
	// markers: true,
	onEnter: () => {
		$("#service .right-box .step-ele:nth-of-type(2)").addClass("is-glitch");
	},
	onLeaveBack: () => {
		$("#service .right-box .step-ele:nth-of-type(2)").removeClass("is-glitch");
	},
});

ScrollTrigger.create({
	trigger: "#service .en",
	start: "top 30%",
	// markers: true,
	onEnter: () => {
		$("#service").addClass("is-show");
	},
	onLeaveBack: () => {
		$("#service").removeClass("is-show");
	},
});
ScrollTrigger.create({
	trigger: "#service .en + .desc-box",
	start: "bottom -10%",
	onEnter: () => {
		$("#service").addClass("is-show2");
	},
	onLeaveBack: () => {
		$("#service").removeClass("is-show2");
	},
});
ScrollTrigger.create({
	trigger: "#service .top-diagonal-box",
	start: "bottom 0%",
	onEnter: () => {
		$("#service").addClass("is-show3");
	},
	onLeaveBack: () => {
		$("#service").removeClass("is-show3");
	},
});
function syncBottomHeight() {
	var descBoxHeight = $('#service .right-box .step-ele:nth-of-type(2) .desc-box').outerHeight();
	console.log("hei  " + descBoxHeight);
	$('#service .road-box').css('bottom', descBoxHeight + 'px');
}
syncBottomHeight();
$(window).on('resize', function() {
	console.log("res");
	syncBottomHeight();
});
gsap.fromTo("#service .link-box",
	{background: "#00a000", scaleX: 3.0, scaleY: 0.0, opacity: 0.0},
	{background: "#fff", scaleX: 1.0, scaleY: 1.0, opacity: 1.0, ease: "power1.out",
		scrollTrigger: {
			trigger: "#service .link-box p",
			start: "top bottom-=5%",
			end: "top bottom-=15%",
			scrub: 1.0,
			// markers: true,
		}
	}
);






















gsap.fromTo("#landscape",
	{rotateX: 180, rotateY: 90, opacity: 0.0},
	{rotateX: 0, rotateY: 0, opacity: 1.0, ease: "power1.out",
		scrollTrigger: {
			trigger: "#landscape",
			start: "center bottom-=5%",
			end: "center bottom-=30%",
			scrub: 1.0,
			// markers: true,
		}
	}
);



















ScrollTrigger.create({
	trigger: "#expert .center",
	start: "top center",
	onEnter: () => {
		$("#expert").addClass("is-show");
	},
	onLeaveBack: () => {
		$("#expert").removeClass("is-show");
	},
});


















ScrollTrigger.create({
	trigger: "#marugoto .head-box",
	start: "top bottom",
	// markers: true,
	onEnter: () => {
		$("#marugoto .head-box").addClass("is-show");
	},
	onLeaveBack: () => {
		$("#marugoto .head-box").removeClass("is-show");
	},
});
ScrollTrigger.create({
	trigger: "#marugoto .tit-box .desc-box",
	start: "top bottom",
	// markers: true,
	onEnter: () => {
		$("#marugoto .tit-box .desc-box").addClass("is-show");
		$("#marugoto .right-box").addClass("is-show");
	},
	onLeaveBack: () => {
		$("#marugoto .tit-box .desc-box").removeClass("is-show");
		$("#marugoto .right-box").removeClass("is-show");
	},
});
ScrollTrigger.create({
	trigger: "#marugoto .project-ele:nth-of-type(1) .cat-tit-box",
	start: "top bottom",
	// markers: true,
	onEnter: () => {
		$("#marugoto .project-ele:nth-of-type(1) .cat-tit-box").addClass("is-show");
	},
	onLeaveBack: () => {
		$("#marugoto .project-ele:nth-of-type(1) .cat-tit-box").removeClass("is-show");
	},
});
ScrollTrigger.create({
	trigger: "#marugoto .project-ele:nth-of-type(2) .cat-tit-box",
	start: "top bottom",
	// markers: true,
	onEnter: () => {
		$("#marugoto .project-ele:nth-of-type(2) .cat-tit-box").addClass("is-show");
	},
	onLeaveBack: () => {
		$("#marugoto .project-ele:nth-of-type(2) .cat-tit-box").removeClass("is-show");
	},
});


















$('video[data-src]').each(function () {
	const video = this;
	const observer = new IntersectionObserver((entries, observer) => {
	entries.forEach(entry => {
		if (entry.isIntersecting) {
			video.src = $(video).data('src');
			video.load();
			video.play().catch(error => {
				console.warn('動画の読み込み失敗', error);
			});
			observer.unobserve(video);
		}
	});
	}, {rootMargin: '200px'});
	observer.observe(video);
});

















$('.hover-slider-container').on('mousemove', function(e) {
	var $container = $(this);
	var containerLeft = $container.offset().left;
	var containerWidth = $container.width();

	var mouseX = e.pageX - containerLeft;
	var percentage = (mouseX / containerWidth) * 100;

	if (percentage < 0) percentage = 0;
	if (percentage > 100) percentage = 100;
	$container.find('.image-before').css('width', percentage + '%');
	$container.find('.slider-line-box').css('left', percentage + '%');
});


























gsap.fromTo("#result",
	{opacity: 0, scale: 0},
	{opacity: 1, scale: 1, ease: "power1.out",
		scrollTrigger: {
			trigger: "#marugoto .project-box",
			start: "bottom bottom-=20%",
			end: "bottom top+=20%",
			scrub: 1.0,
			// markers: true,
			onLeave: () => {
				$("#result").addClass("is-start");
			},
			onEnterBack: () => {
				$("#result").removeClass("is-start");
			}
		}
	}
);
ScrollTrigger.create({
	trigger: "#marugoto",
	start: "bottom top",
	// markers: true,
	onEnter: () => {
		$("#result").addClass("is-unlock");
		$("#result-scroll-space").addClass("is-unlock");
	},
	onLeaveBack: () => {
		$("#result").removeClass("is-unlock");
		$("#result-scroll-space").removeClass("is-unlock");
	},
});
ScrollTrigger.create({
	trigger: "#result-scroll-space",
	start: "bottom center-=10%",
	// markers: true,
	onEnter: () => {
		$("#result").addClass("is-end");
	},
	onLeaveBack: () => {
		$("#result").removeClass("is-end");
	},
});



















ScrollTrigger.create({
	trigger: "#info .tit-box",
	start: "top center",
	// markers: true,
	onEnter: () => {
		$("#info .tit-box").addClass("is-show");
	},
	onLeaveBack: () => {
		$("#info .tit-box").removeClass("is-show");
	},
});


















gsap.fromTo("#promise .fig1-box .img",
	{opacity: 0.1, rotateX: 0, rotateY: -1, translateZ: -50},
	{opacity: 1.0, rotateX: 0, rotateY: -1, translateZ: -25, ease: "power1.out",
		scrollTrigger: {
			trigger: "#promise",
			start: "top center",
			end: "top top",
			scrub: 1.0,
			// markers: true,
		}
	}
);
gsap.fromTo("#promise .fig1-box .img",
	{opacity: 1.0, rotateX: 0, rotateY: -1, translateZ: -25},
	{opacity: 0.3, rotateX: 0, rotateY: -1, translateZ: 0, ease: "power1.out",
		scrollTrigger: {
			trigger: "#promise",
			start: "top top",
			end: "bottom bottom",
			scrub: 1.0,
			// markers: true,
		}
	}
);


gsap.fromTo("#promise .fig2-box .img",
	{opacity: 0.3, rotateX: -1, rotateY: 0, translateZ: -100},
	{opacity: 1.0, rotateX: -1, rotateY: 0, translateZ: -50, ease: "power1.out",
		scrollTrigger: {
			trigger: "#promise",
			start: "top bottom",
			end: "top top",
			scrub: 1.0,
			// markers: true,
		}
	}
);
gsap.fromTo("#promise .fig2-box .img",
	{opacity: 1.0, rotateX: -1, rotateY: 0, translateZ: -50},
	{opacity: 0.5, rotateX: -1, rotateY: 0, translateZ: 0, ease: "power1.out",
		scrollTrigger: {
			trigger: "#promise",
			start: "top top",
			end: "bottom bottom",
			scrub: 1.0,
			// markers: true,
		}
	}
);


gsap.fromTo("#promise .fig3-box .img",
	{opacity: 0.0, rotateX: 0, rotateY: 1, translateZ: -40},
	{opacity: 1.0, rotateX: 0, rotateY: 1, translateZ: -20, ease: "power1.out",
		scrollTrigger: {
			trigger: "#promise",
			start: "top center",
			end: "top top",
			scrub: 1.0,
			// markers: true,
		}
	}
);
gsap.fromTo("#promise .fig3-box .img",
	{opacity: 1.0, rotateX: 0, rotateY: 1, translateZ: -20},
	{opacity: 0.2, rotateX: 0, rotateY: 1, translateZ: 0, ease: "power1.out",
		scrollTrigger: {
			trigger: "#promise",
			start: "top top",
			end: "bottom bottom",
			scrub: 1.0,
			// markers: true,
		}
	}
);


gsap.fromTo("#promise .fig4-box .img",
	{opacity: 0.0, rotateX: 0, rotateY: 1, translateZ: -30},
	{opacity: 1.0, rotateX: 0, rotateY: 1, translateZ: -15, ease: "power1.out",
		scrollTrigger: {
			trigger: "#promise",
			start: "center-=20% bottom",
			end: "top top",
			scrub: 1.0,
			// markers: true,
		}
	}
);
gsap.fromTo("#promise .fig4-box .img",
	{opacity: 1.0, rotateX: 0, rotateY: 1, translateZ: -15},
	{opacity: 0.5, rotateX: 0, rotateY: 1, translateZ: 0, ease: "power1.out",
		scrollTrigger: {
			trigger: "#promise",
			start: "top top",
			end: "bottom bottom",
			scrub: 1.0,
			// markers: true,
		}
	}
);


gsap.fromTo("#promise .fig5-box .img",
	{opacity: 0.0, rotateX: 1, rotateY: 0, translateZ: -40},
	{opacity: 1.0, rotateX: 1, rotateY: 0, translateZ: -10, ease: "power1.out",
		scrollTrigger: {
			trigger: "#promise",
			start: "center-=30% bottom",
			end: "top top",
			scrub: 1.0,
			// markers: true,
		}
	}
);
gsap.fromTo("#promise .fig5-box .img",
	{opacity: 1.0, rotateX: 1, rotateY: 0, translateZ: -10},
	{opacity: 0.7, rotateX: 1, rotateY: 0, translateZ: 20, ease: "power1.out",
		scrollTrigger: {
			trigger: "#promise",
			start: "top top",
			end: "bottom bottom",
			scrub: 1.0,
			// markers: true,
		}
	}
);


gsap.fromTo("#promise .fig6-box .img",
	{opacity: 0.0, rotateX: 0, rotateY: 1, translateZ: -40},
	{opacity: 1.0, rotateX: 0, rotateY: 1, translateZ: -20, ease: "power1.out",
		scrollTrigger: {
			trigger: "#promise",
			start: "top top+=40%",
			end: "top top-=40%",
			scrub: 1.0,
			// markers: true,
		}
	}
);
gsap.fromTo("#promise .fig6-box .img",
	{opacity: 1.0, rotateX: 0, rotateY: 1, translateZ: -20},
	{opacity: 0.6, rotateX: 0, rotateY: 1, translateZ: 0, ease: "power1.out",
		scrollTrigger: {
			trigger: "#promise",
			start: "top top-=40%",
			end: "bottom bottom",
			scrub: 1.0,
			// markers: true,
		}
	}
);