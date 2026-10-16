gsap.registerPlugin(ScrollTrigger)

// Lenis 初期化
const lenis = new Lenis({
	duration: 5.5,
	smoothWheel: true,
	smoothTouch: false,
})

// Lenis → ScrollTrigger同期
lenis.on("scroll", ScrollTrigger.update)

// requestAnimationFrame
function raf(time) {
	lenis.raf(time)
	requestAnimationFrame(raf)
}

requestAnimationFrame(raf)

// GSAP ticker同期
gsap.ticker.add((time) => {
	lenis.raf(time * 1000)
})

gsap.ticker.lagSmoothing(0)