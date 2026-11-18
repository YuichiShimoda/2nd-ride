import $ from "jquery";

import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Lenis from "lenis";

// Lenis → ScrollTrigger同期
gsap.registerPlugin(ScrollTrigger);

// Lenis 初期化
const lenis = new Lenis({
    duration: 5.5,
    smoothWheel: true,
});

lenis.on("scroll", ScrollTrigger.update);

// GSAP ticker同期
gsap.ticker.add((time) => {
    lenis.raf(time * 1000);
});

gsap.ticker.lagSmoothing(0);