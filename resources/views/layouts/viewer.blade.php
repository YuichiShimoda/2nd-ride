<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<title>@yield('title')</title>
		<meta name="description" content="@yield('description')">
		@yield('meta_tags')
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
		<meta name="format-detection" content="telephone=no">
		<meta property="og:image" content="{{ asset('image/ogp-image.png') }}" />
		<meta name="google-site-verification" content="" />

		<link rel="icon" type="image/png" href="{{ asset('image/favicon/favicon-96x96.png') }}" sizes="96x96" />
		<link rel="icon" type="image/svg+xml" href="{{ asset('image/favicon/favicon.svg') }}" />
		<link rel="shortcut icon" href="{{ asset('image/favicon/favicon.ico') }}" />
		<link rel="apple-touch-icon" href="{{ asset('image/favicon/apple-touch-icon.png') }}" sizes="180x180" />
		<link rel="manifest" href="{{ asset('image/favicon/site.webmanifest') }}" />

		<style>
			@font-face {
				font-family: 'ferry';
				src: url("{{ asset('fonts/Ferry.woff2') }}") format('woff2');
				font-weight: 400;
				font-style: normal;
				font-display: swap;
			}
		</style>
		<!-- Adobe Fonts -->
		<script>
			(function(d) {
				var config = {
					kitId: 'kge6jjx',
					scriptTimeout: 3000,
					async: true
				},
				h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
			})(document);
		</script>

		<!-- Google Tag Manager -->
		<!-- 後で設定 -->
		<!-- End Google Tag Manager -->

		<!-- Google tag (gtag.js) / Google Ads ver -->
		<!-- 後で設定 -->

		<link href="{{ asset('css/reset.css') }}" rel='stylesheet' type='text/css' media='all'>
		@yield('css')
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap" rel="stylesheet">
	</head>

	@yield('content_loader')

	<div id="wrap">
		<body>
			<!-- Google Tag Manager (noscript) -->
			<!-- 後で設定 -->
			<!-- End Google Tag Manager (noscript) -->


			<div id="cursor" class="cursor-box">
				<div class="inside">
					<div class="circle">
						<!-- <img class="gold lazyload" data-src="{{ asset('image/lp/mouse.webp') }}" alt="円"> -->
						<div class="center-circle"></div>
					</div>
				</div>
			</div>
			<!-- <canvas id="c"></canvas> -->








			<header class="header-box">
				<div class="ham-box">
					<div class="row-box">
						<div class="dot"></div>
						<div class="dot"></div>
						<div class="dot"></div>
					</div>
					<div class="row-box">
						<div class="dot"></div>
						<div class="dot"></div>
						<div class="dot"></div>
					</div>
					<div class="row-box">
						<div class="dot"></div>
						<div class="dot"></div>
						<div class="dot"></div>
					</div>
				</div>
			</header>

			<link href="{{ asset('css/modal.css') }}" rel='stylesheet' type='text/css' media='all'>
			<div id="modal" class="modal">
				<div class="md-overlay basic-hover">
					<div class="inner-box">
						<div class="close-box modal-close">
							<div class="row-box">
								<div class="dot"></div>
								<div class="dot"></div>
								<div class="dot"></div>
							</div>
							<div class="row-box">
								<div class="dot"></div>
								<div class="dot"></div>
								<div class="dot"></div>
							</div>
							<div class="row-box">
								<div class="dot"></div>
								<div class="dot"></div>
								<div class="dot"></div>
							</div>
						</div>
						<div class="glitch-video-box">
							<video class="video" preload="none" autoplay muted playsinline disablepictureinpicture data-src="{{ asset('/movie/glitch.mp4') }}"></video>
						</div>
						<div class="panel-box">
							<div class="panel-ele"></div>
							<div class="panel-ele"></div>
							<div class="panel-ele"></div>
							<div class="panel-ele"></div>
							<div class="panel-ele"></div>
							<div class="panel-ele"></div>
							<div class="panel-ele"></div>
							<div class="panel-ele"></div>
							<div class="panel-ele"></div>
						</div>
					</div>
				</div>
				<div class="md-contents">
					<div class="inside-box">
						<div class="sub-tit-box">
							<p class="txt">MENU</p>
							<div class="rect"></div>
							<div class="left-streak-box">
								<div class="line-box">
									<div class="base"></div>
									<div class="highlight"></div>
								</div>
							</div>
							<div class="right-streak-box">
								<div class="line-box">
									<div class="base"></div>
									<div class="highlight"></div>
								</div>
							</div>
						</div>
						<nav class="top-nav-box">
							<ul>
								<li class="global-nav-box">
									<a class="link-box" href="{{ route('result') }}">
										<p class="en">RESULT</p>
										<h3 class="jp">買取実績</h3>
									</a>
								</li>
								<li class="global-nav-box">
									<a class="link-box" href="{{ route('faq') }}">
										<p class="en">FAQ</p>
										<h3 class="jp">よくある質問</h3>
									</a>
								</li>
								<li class="global-nav-box">
									<a class="link-box" href="{{ route('profile') }}">
										<p class="en">PROFILE</p>
										<h3 class="jp">プロフィール</h3>
									</a>
								</li>
							</ul>
						</nav>
						<div class="sub-tit-box">
							<p class="txt">CONTACT</p>
							<div class="rect"></div>
							<div class="left-streak-box">
								<div class="line-box">
									<div class="base"></div>
									<div class="highlight"></div>
								</div>
							</div>
							<div class="right-streak-box">
								<div class="line-box">
									<div class="base"></div>
									<div class="highlight"></div>
								</div>
							</div>
						</div>
						<nav class="bottom-nav-box">
							<ul>
								<li class="global-nav-box">
									<a class="link-box" href="{{ route('appointment.index') }}">
										<p class="en">APPOINTMENT</p>
										<h3 class="jp">ご予約</h3>
									</a>
								</li>
								<li class="global-nav-box">
									<a class="link-box" href="{{ route('inquiry.index') }}">
										<p class="en">INQUIRY</p>
										<h3 class="jp">ご質問・ご相談</h3>
									</a>
								</li>
							</ul>
						</nav>
						<div class="close-box modal-close">
							<svg class="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 219.58 219.58">
								<path d="M214.22,5.36c-7.15-7.15-18.73-7.15-25.88,0l-78.55,78.55L31.24,5.36C24.09-1.79,12.51-1.79,5.36,5.36s-7.15,18.73,0,25.88l78.55,78.55L5.36,188.34c-7.15,7.15-7.15,18.73,0,25.88,3.57,3.57,8.26,5.36,12.94,5.36s9.36-1.79,12.94-5.36l78.55-78.55,78.55,78.55c3.57,3.57,8.26,5.36,12.94,5.36s9.36-1.79,12.94-5.36c7.15-7.15,7.15-18.73,0-25.88l-78.55-78.55L214.22,31.24c7.15-7.15,7.15-18.73,0-25.88h0Z"/>
							</svg>
						</div>
					</div>
				</div>
			</div>














			<main role="main">
				@yield('content')
			</main>













			<section id="contact">
				<div class="content-box">
					<a class="left-box" href="{{ route('appointment.index') }}">
						<div class="tit-box">
							<p class="en" data-splitting>Appointment</p>
							<h2 class="jp">ご予約</h2>
						</div>
						<img class="img lazyload" data-src="{{ asset('/image/top/contact/appointment.webp') }}" alt="カレンダー">
					</a>
					<a class="right-box" href="{{ route('inquiry.index') }}">
						<div class="tit-box">
							<p class="en" data-splitting>Inquiry</p>
							<h2 class="jp">ご質問・ご相談</h2>
						</div>
						<img class="img lazyload" data-src="{{ asset('/image/top/contact/inquiry.webp') }}" alt="連絡手段">
					</a>
				</div>
			</section>
















			<footer id="footer">
				<div class="content-box">
					<div class="left-box">
						<div class="menu-box">
							<p class="en">Menu</p>
							<div class="link-box">
								<a class="link" href="{{ route('result') }}">買取実績</a>
								<a class="link" href="{{ route('faq') }}">よくある質問</a>
								<a class="link" href="{{ route('profile') }}">プロフィール</a>
							</div>
						</div>
						<div class="contact-box">
							<p class="en">Contact</p>
							<div class="link-box">
								<a class="link" href="{{ route('appointment.index') }}">ご予約</a>
								<a class="link" href="{{ route('inquiry.index') }}">ご質問・ご相談</a>
								<a class="link" href="tel:07011464820">070-1146-4820</a>
							</div>
						</div>
					</div>
					<a class="logo-box is-animating" href="{{ route('top') }}">
						<svg class="logo" viewBox="0 0 460 127" xmlns="http://www.w3.org/2000/svg">
							<g class="swoosh-box">
								<path class="green-swoosh" d="M300.645 34.2593C287.02 -5.52333 222.491 -13.0923 183.475 34.7841C220.896 -11.1345 328.277 11.0275 286.132 84.8001C302.966 62.7591 304.843 46.511 300.645 34.2593Z" fill="#00A000"/>
								<path class="gray-top" d="M236.56 0.025747C211.774 -0.620141 177.481 10.8847 156.509 34.6817H172.112C186.664 13.9729 213.792 0.792739 236.56 0.025747Z" fill="#CCCCCC"/>
								<path class="gray-bottom" d="M268.976 103.976H251.375C239.426 110.072 230.323 114.956 213.61 117.923C189.894 122.142 155.964 116.167 145.468 102.523C170.557 135.1 236.782 132.779 268.996 103.956L268.976 103.976Z" fill="#CCCCCC"/>
							</g>
							<g class="letter-box">
								<path class="letter" d="M24.2615 79.5116H57.5858C62.0263 79.5116 65.3971 83.5282 64.6301 87.9082L62.5511 97.5158H0L1.53401 88.8366C3.71391 77.1299 6.62045 71.5995 10.6775 67.0379C14.7345 62.4965 21.5568 59.4285 31.1444 57.8542L47.9377 55.3918C51.2479 54.8064 52.358 53.7972 52.4993 49.8412C52.5801 47.964 51.5103 46.3695 48.5432 46.3695H39.7429C33.8289 46.3695 32.3352 47.298 30.2966 48.9934C28.8635 50.1843 27.2084 51.0118 25.3515 51.0118H8.82053C10.294 42.6556 13.8262 36.5197 19.3971 32.604C24.968 28.6883 32.6582 26.7305 42.4274 26.7305H47.756C57.4647 26.7305 64.2668 28.6479 68.1623 32.4627C72.0579 36.2775 73.2892 42.2116 71.8763 50.2246C70.645 57.2083 68.1018 62.436 64.2264 65.9278C61.3199 68.5517 58.3326 69.6417 53.67 70.6912C50.7231 71.3573 47.7358 71.8821 44.7284 72.2656L31.649 74.0014C27.713 75.0106 24.9478 77.5942 24.2413 79.4914L24.2615 79.5116Z" fill="#fff"/>
								<path class="letter" d="M136.385 97.516H119.914L96.1171 67.3208L91.8179 91.6828C91.2124 95.0536 88.2856 97.516 84.8543 97.516H71.5529L81.5441 40.8394H101.143L122.397 67.8052L126.111 46.7331C126.717 43.322 129.684 40.8394 133.135 40.8394H146.376L136.385 97.516Z" fill="#fff"/>
								<path class="letter" d="M212.843 67.9666L212.419 70.3887C210.683 80.2183 206.909 87.1818 201.076 91.3195C195.242 95.4573 186.583 97.516 175.139 97.516H142.44L151.402 46.6725C151.987 43.3018 154.934 40.8394 158.346 40.8394H185.11C196.575 40.8394 204.487 42.8981 208.867 47.0358C213.247 51.1736 214.559 58.137 212.843 67.9666ZM168.761 57.3499L164.582 80.9853H176.693C181.981 80.9853 185.877 80.1578 188.4 78.4825C190.923 76.8072 192.538 73.9815 193.244 69.985L193.527 68.3703C194.233 64.3739 193.607 61.5481 191.69 59.8729C189.752 58.1976 186.159 57.3701 180.871 57.3701H168.761V57.3499Z" fill="#fff"/>
								<path class="letter" d="M268.875 72.7479C278.059 69.1955 283.549 62.3128 285.345 52.1198C286.718 44.349 285.507 38.4553 281.753 34.4387C277.978 30.422 271.761 28.4238 263.062 28.4238H224.147L221.422 43.905H257.653C261.972 43.905 264.858 47.3968 264.091 51.7162C263.324 56.0355 259.207 59.5274 254.907 59.5274H218.677L211.975 97.5338H233.31L237.287 75.0287H246.369L254.746 97.5338H278.745L268.895 72.7479H268.875Z" fill="#fff"/>
								<path class="letter" d="M300.664 97.5162H319.9L326.601 59.5098H307.365L300.664 97.5162Z" fill="#fff"/>
								<path class="l-i-dot" d="M325.552 40.8394H313.704C311.948 40.8394 310.434 42.1109 310.131 43.8468L309.001 50.2855C308.618 52.5057 310.313 54.5443 312.574 54.5443H324.422C326.178 54.5443 327.692 53.2727 327.995 51.5369L329.125 45.0982C329.508 42.8779 327.813 40.8394 325.552 40.8394Z" fill="#00A000"/>
								<path class="letter" d="M396.802 67.9666L396.379 70.3887C394.643 80.2183 390.868 87.1818 385.035 91.3195C379.202 95.4573 370.543 97.516 359.098 97.516H326.4L335.361 46.6523C335.947 43.2816 338.874 40.8394 342.285 40.8394H369.069C380.534 40.8394 388.446 42.8981 392.826 47.0358C397.206 51.1736 398.518 58.137 396.802 67.9666ZM352.7 57.3499L348.522 80.9853H360.632C365.92 80.9853 369.816 80.1578 372.339 78.4825C374.862 76.8072 376.477 73.9815 377.183 69.985L377.466 68.3703C378.172 64.3739 377.547 61.5481 375.629 59.8729C373.691 58.1976 370.099 57.3701 364.81 57.3701H352.7V57.3499Z" fill="#fff"/>
								<path class="letter" d="M454.005 92.0257L453.016 97.5157H396.278L405.24 46.7328C405.846 43.3217 408.813 40.8188 412.284 40.8188H460L457.356 54.544H422.881L421.347 65.1204H452.33L450.15 76.8675H419.167L417.996 83.73H447.062C451.462 83.73 454.772 87.7063 454.005 92.0257Z" fill="#fff"/>
							</g>
						</svg>
					</a>
					<div class="right-box">
						<div class="invoice-ele">
							<p class="tit">適格請求書発行事業者登録番号</p>
							<p class="detail">T<span class="num">000011112222</span></p>
						</div>
						<div class="licenses-ele">
							<p class="tit">古物商許可：愛知県公安委員会</p>
							<p class="detail">第<span class="num">542642600300</span>号</p>
						</div>
						<div class="link-box">
							<a class="link" href="{{ route('rule') }}">特定商取引法に基づく表記</a>
							<a class="link" href="{{ route('policy') }}">プライバシーポリシー</a>
						</div>
					</div>
					<p class="copyright">
						<?php
							$currentYear = date('Y');
							if ($currentYear == 2026) {
								echo "© 2026 - 2ND RiDE. All rights reserved.";
							} else {
								echo "© 2026 - $currentYear 2ND RiDE. All rights reserved.";
							}
						?>
					</p>
				</div>
			</footer>


			<script>
				document.addEventListener('DOMContentLoaded', () => {
					const logoBox = document.querySelector('#footer .logo-box');
					if (!logoBox) return;
					setInterval(() => {
						logoBox.classList.remove('is-animating');
						void logoBox.offsetWidth;
						logoBox.classList.add('is-animating');
					}, 6000);
				});
			</script>



			@yield('js')
			@vite([
			])
		</body>
	</div>
</html>
