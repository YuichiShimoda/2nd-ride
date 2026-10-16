$(window).on("load", function() {
	let cursor = document.querySelector("#cursor");
	let insideElement = cursor.querySelector("#cursor .inside");
	$(document).on("mousemove", function(event) {
		let rect = insideElement.getBoundingClientRect();
		cursor.style.top = (event.clientY - rect.height / 2) + "px";
		cursor.style.left = (event.clientX - rect.width / 2) + "px";
	});
});









// 実行0：変数定義およびcanvasの初期化
var c = document.getElementById("c");
var ctx = c.getContext("2d");
var cH;
var cW;
var bgColor = "#FF6138";
var animations = [];
var circles = [];

var colorPicker = (function() {
	var colors = ["#FF6138", "#FFBE53", "#b92928", "#f8bebc"];
	var index = 0;
	function next() {
		index = index++ < colors.length-1 ? index : 0;
		return colors[index];
	}
	function current() {
		return colors[index]
	}
	return {
		next: next,
		current: current
	}
})();
const iconImages = [];
for (let i = 1; i <= 12; i++) {
	const img = new Image();
	img.src = `./image/lp/clickEvent/icon${i}.svg`;
	iconImages.push(img);
}

var resizeCanvas = function() {
	cW = window.innerWidth;
	cH = window.innerHeight;
	c.width = cW * devicePixelRatio;
	c.height = cH * devicePixelRatio;
	ctx.scale(devicePixelRatio, devicePixelRatio);
};
(function init() {
	resizeCanvas();
	if (window.CP) {
		// CodePen's loop detection was causin' problems
		// and I have no idea why, so...
		window.CP.PenTimer.MAX_TIME_IN_LOOP_WO_EXIT = 6000;
	}
	window.addEventListener("resize", resizeCanvas);
	addClickListeners();
	if (!!window.location.pathname.match(/fullcpgrid/)) {
		startFauxClicking();
	}
	handleInactiveUser();
})();
function handleInactiveUser() {
	var inactive = setTimeout(function(){
		fauxClick(cW/2, cH/2);
	}, 2000);

	function clearInactiveTimeout() {
		clearTimeout(inactive);
		document.removeEventListener("mousedown", clearInactiveTimeout);
		document.removeEventListener("touchstart", clearInactiveTimeout);
	}

	document.addEventListener("mousedown", clearInactiveTimeout);
	document.addEventListener("touchstart", clearInactiveTimeout);
}
function startFauxClicking() {
	setTimeout(function(){
		fauxClick(anime.random( cW * .2, cW * .8), anime.random(cH * .2, cH * .8));
		startFauxClicking();
	}, anime.random(200, 900));
}
function fauxClick(x, y) {
	var fauxClick = new Event("mousedown");
	fauxClick.clientX = x;
	fauxClick.clientY = y;
	document.dispatchEvent(fauxClick);
}










// 実行1：クリック実行
$("canvas").on("click", function() {
	$(this).addClass("is-show");
	setTimeout(function() {
		$("canvas").removeClass("is-show");
	}, 500);
});
$(".click-canvas").on("click", function() {
	var clickedElement = $(event.target);
	if (!clickedElement.closest(".not-click-canvas").length) {
		$("canvas").addClass("is-show");
		setTimeout(function() {
			$("canvas").removeClass("is-show");
		}, 500);
	}
});
function addClickListeners() {
	document.addEventListener("touchstart", handleEvent);
	document.addEventListener("mousedown", handleEvent);
};




















// 実行2：各イベントの流れを作成
function handleEvent(e) {
	if (e.touches) {
		e.preventDefault();
		e = e.touches[0];
	}
	var currentColor = colorPicker.current();
	// var nextColor = colorPicker.next();
	var targetR = calcPageFillRadius(e.clientX, e.clientY);
	var rippleSize = Math.min(200, (cW * .4));
	if (cW >= 1200) {
		rippleSize = Math.min(160, cW * 0.4);
	} else if (cW >= 1000) {
		rippleSize = Math.min(140, cW * 0.4);
	} else if (cW >= 700) {
		rippleSize = Math.min(120, cW * 0.4);
	} else if (cW >= 450) {
		rippleSize = Math.min(100, cW * 0.4);
	} else {
		rippleSize = Math.min(70, cW * 0.4);
	}
	var minCoverDuration = 750;

	// var pageFill = new Circle({
	// 	x: e.clientX,
	// 	y: e.clientY,
	// 	r: 0,
	// 	fill: nextColor
	// });
	// var fillAnimation = anime({
	// 	targets: pageFill,
	// 	r: targetR,
	// 	duration:  Math.max(targetR / 2 , minCoverDuration ),
	// 	easing: "easeOutQuart",
	// 	complete: function(){
	// 		bgColor = pageFill.fill;
	// 		removeAnimation(fillAnimation);
	// 	}
	// });

	// ベースの丸
	var rippleColor = getRandomColor();
	var ripple = new Circle({
		x: e.clientX,
		y: e.clientY,
		r: 0,
		fill: rippleColor,
		stroke: {
			width: 3,
			color: rippleColor
		},
		opacity: 1
	});

	var rippleAnimation = anime({
		targets: ripple,
		r: rippleSize,
		opacity: 0,
		easing: "easeOutExpo",
		duration: 900,
		complete: removeAnimation
	});


	// 小さい丸
	var particles = [];
	let particleRadius = anime.random(28, 36);
	let particleCount = 15;
	if (cW >= 1200) {
		particleRadius = anime.random(28, 36);
		particleCount = 15;
	} else if (cW >= 700) {
		particleRadius = anime.random(26, 32);
		particleCount = 12;
	} else if (cW >= 450) {
		particleRadius = anime.random(24, 30);
		particleCount = 9;
	} else {
		particleRadius = anime.random(20, 28);
		particleCount = 7;
	}
	for (let i = 0; i < particleCount; i++) {
		var particle = new Circle({
			x: e.clientX,
			y: e.clientY,
			fill: getRandomColor(),
			r: particleRadius
		})
		particles.push(particle);
	}

	var particlesAnimation = anime({
		targets: particles,
		x: function(particle){
			return particle.x + anime.random(rippleSize, -rippleSize);
		},
		y: function(particle){
			return particle.y + anime.random(rippleSize * 1.15, -rippleSize * 1.15);
		},
		r: 0,
		easing: "easeOutExpo",
		duration: anime.random(600,900),
		complete: removeAnimation
	});


	// 画像ver
	let imageParticles = [];
	for (let i = 0; i < 7; i++) {
		let size = anime.random(24, 48);
		if (cW >= 1200) {
			size = anime.random(22, 44);
		} else if (cW >= 450) {
			size = anime.random(20, 40);
		} else {
			size = anime.random(20, 30);
		}
		let particle = new ImageParticle(e.clientX, e.clientY, size);
		imageParticles.push(particle);
	}

	let imageAnimation = anime({
		targets: imageParticles,
		duration: 3000,
		update: function() {
			imageParticles.forEach(p => p.update());
		},
		complete: function() {
			removeAnimation(imageAnimation);
		}
	});
	// animations.push(fillAnimation, rippleAnimation, particlesAnimation);
	animations.push(rippleAnimation, imageAnimation);
}
function getRandomColor() {
	const colors = ['#ebdcb2', '#f0efea', '#c9d1c8', '#a5c3cf', '#f3d3b8'];
	return colors[Math.floor(Math.random() * colors.length)];
}













// 実行3：円を作成
var Circle = function(opts) {
	extend(this, opts);
}
function extend(a, b){
	for(var key in b) {
		if(b.hasOwnProperty(key)) {
			a[key] = b[key];
		}
	}
	return a;
}
function calcPageFillRadius(x, y) {
	var l = Math.max(x - 0, cW - x);
	var h = Math.max(y - 0, cH - y);
	return Math.sqrt(Math.pow(l, 2) + Math.pow(h, 2));
}











// 実行4：アニメーション作成
var animate = anime({
	duration: Infinity,
	update: function() {
		ctx.clearRect(0, 0, cW, cH);
		// ctx.fillStyle = bgColor;
		// ctx.fillRect(0, 0, cW, cH);
		animations.forEach(function(anim) {
			anim.animatables.forEach(function(animatable) {
				animatable.target.draw(ctx);
				// animatable.target.draw();
			});
		});
	}
});













// 実行5：アニメーション実行
Circle.prototype.draw = function() {
	ctx.globalAlpha = this.opacity || 1;
	ctx.beginPath();
	ctx.arc(this.x, this.y, this.r, 0, 2 * Math.PI, false);
	if (this.stroke) {
		ctx.strokeStyle = this.stroke.color;
		ctx.lineWidth = this.stroke.width;
		ctx.stroke();
	}
	if (this.fill) {
		ctx.fillStyle = this.fill;
		ctx.fill();
	}
	// ctx.fillStyle = "rgba(#000, 0.0)";
	// ctx.clearRect(0, 0, cW, cH);
	ctx.closePath();
	ctx.globalAlpha = 1;
}














// 実行6：実行アニメーションの解除
function removeAnimation(animation) {
	var index = animations.indexOf(animation);
	if (index > -1) animations.splice(index, 1);
}








class ImageParticle {
	constructor(x, y, size, opacity = 1) {
		this.x = x;
		this.y = y;
		this.size = size;
		this.opacity = opacity;
		this.vx = anime.random(-10, 10);
		this.vy = anime.random(-10, 10);
		this.rotation = Math.random() * 2 * Math.PI;
		this.rotationSpeed = (Math.random() - 0.5) * 0.2;
		const index = Math.floor(Math.random() * iconImages.length);
		this.image = iconImages[index];
	}

	update() {
		if (cW >= 450) {
			this.x += this.vx;
			this.y += this.vy;
		} else {
			this.x += this.vx / 2.5;
			this.y += this.vy / 2.5;
		}
		this.opacity -= 0.02;
		this.rotation += this.rotationSpeed;
	}

	draw(ctx) {
		if (this.opacity <= 0) return;
		ctx.save();
		ctx.globalAlpha = this.opacity;
		ctx.translate(this.x + this.size / 2, this.y + this.size / 2);
		ctx.rotate(this.rotation);
		ctx.drawImage(this.image, -this.size / 2, -this.size / 2, this.size, this.size);

		// ctx.drawImage(this.image, this.x, this.y, this.size, this.size);

		ctx.restore();
	}
}