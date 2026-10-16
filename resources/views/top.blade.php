@extends('layouts.viewer')
@section('title', 'セカンド・ライド｜2ND RiDE')
@section('description', '')
@section('meta_tags')
@stop

@section('css')
	<link href="{{ asset('/css/mouse.css') }}" rel='stylesheet' type='text/css' media='all'>
	<link href="{{ asset('/css/common.css') }}" rel='stylesheet' type='text/css' media='all'>
	<link href="{{ asset('/css/style-sp.css') }}" rel='stylesheet' type='text/css' media='all and (max-width: 700px)'>
	<link href="{{ asset('/css/style.css') }}" rel='stylesheet' type='text/css' media='all and (min-width: 700px)'>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@14/swiper-bundle.min.css">
@stop



@section('content_loader')
@stop



@section('content_sidebar')
@stop




@section('content')
<!-- 	<section id="test">
		<div class="content-box">
			<h1 data-splitting class="slash-animation">SAMURAI</h1>
		</div>
	</section>
	<section id="test2">
		<div class="content-box">
			<div class="glitch-wrapper">
				<img class="glitch-img base lazyload" data-src="{{ asset('/image/top/service/service1.webp') }}" alt="予約">
				<img class="glitch-img red-layer lazyload" data-src="{{ asset('/image/top/service/service1.webp') }}" alt="予約">
				<img class="glitch-img cyan-layer lazyload" data-src="{{ asset('/image/top/service/service1.webp') }}" alt="予約">
			</div>
		</div>
	</section> -->

















	<section id="mv">
		<div class="container">
			<div class="sticky-box">
				<div class="content-box">
					<img class="logo lazyload" data-src="{{ asset('/image/logo.svg') }}" alt="2ND RiDE">
					<div class="en-box">
						<p><span class="green" data-splitting>CHALLENGE</span></p>
						<p data-splitting>OPENS</p>
						<p data-splitting>NEW <span class="green" data-splitting>WAY</span></p>
					</div>
					<div class="right-bottom-box">
						<p class="desc">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						<svg class="hatching" viewBox="0 0 24 130" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 123.379L24 90V96.6243L0 130V123.379Z" fill="#00A000"/>
							<path d="M0 108.376L24 75V81.6209L0 115V108.376Z" fill="#00A000"/>
							<path d="M0 93.3791L24 60V66.6209L0 100V93.3791Z" fill="#00A000"/>
							<path d="M0 78.3791L24 45V51.6209L0 85V78.3791Z" fill="#00A000"/>
							<path d="M0 63.3791L24 30V36.6209L0 70V63.3791Z" fill="#00A000"/>
							<path d="M0 48.3791L24 15V21.6243L0 55V48.3791Z" fill="#00A000"/>
							<path d="M0 33.3757L24 0V6.62086L0 40V33.3757Z" fill="#00A000"/>
						</svg>
					</div>
					<div class="top-rect"></div>
					<img class="top-shape lazyload" data-src="{{ asset('/image/top/mv/top-shape.svg') }}" alt="シェイプ">
					<div class="bottom-shape-box">
						<div class="inner-box">
							<div class="scroll-box">
								<p class="txt">Scroll</p>
								<div class="line"></div>
							</div>
						</div>
						<img class="bottom-shape lazyload" data-src="{{ asset('/image/top/mv/bottom-shape.svg') }}" alt="シェイプ">
					</div>
				</div>
			</div>
		</div>
	</section>
	<div id="mv-scroll-space"></div>








	<section id="belief">
		<div class="container">
			<div class="sticky-box">
				<div class="content-box">
					<div class="txt-box">
						<div class="sentence-box">
							<p class="txt" data-splitting>地域の暮らしに寄り添い</p>
							<p class="txt" data-splitting>価値を最大化して社会に貢献する</p>
							<p class="top-char">信</p>
							<p class="bottom-char">念</p>
							<div class="logo-box">
								<img class="logo lazyload" data-src="{{ asset('/image/logo.svg') }}" alt="2ND RiDE">
								<div class="streak-box">
									<div class="base"></div>
									<div class="highlight"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="scroll-box">
						<div class="inner-box">
							<div class="base"></div>
							<div class="progress"></div>
						</div>
					</div>
					<div class="ticker slider-box1">
						<div class="ticker-track">
							<div class="ticker-group">
								<p>CONCEPT</p>
								<p>BELIEF</p>
								<p>PHILOSOPHY</p>
								<p>PRIDE</p>
							</div>
							<div class="ticker-group" aria-hidden="true">
								<p>CONCEPT</p>
								<p>BELIEF</p>
								<p>PHILOSOPHY</p>
								<p>PRIDE</p>
							</div>
						</div>
					</div>
					<div class="ticker slider-box2">
						<div class="ticker-track">
							<div class="ticker-group">
								<p>CONCEPT</p>
								<p>BELIEF</p>
								<p>PHILOSOPHY</p>
								<p>PRIDE</p>
							</div>
							<div class="ticker-group" aria-hidden="true">
								<p>CONCEPT</p>
								<p>BELIEF</p>
								<p>PHILOSOPHY</p>
								<p>PRIDE</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div id="belief-scroll-space"></div>









	<section id="service">
		<div class="container">
			<div class="sticky-box">
				<div class="content-box">
					<div class="rect"></div>
					<div class="circle-box">
						<div class="inner-box">
							<div class="circle1"></div>
							<div class="circle2"></div>
							<div class="small-circle"></div>
						</div>
					</div>
					<img class="pixel lazyload" data-src="{{ asset('/image/top/service/pixel.svg') }}" alt="pixel">
					<div class="black-bg"></div>
				</div>
			</div>
			<div class="scroll-content-box">
				<div class="tit-box">
					<p class="en" data-splitting>Service</p>
					<div class="desc-box">
						<p>出張買取とは、～～～～ストテキストテキストテキストサービスです。</p>
						<p>愛知県・三重県・岐阜県～～～～テキストテキストテキストテキストテキストテキスト</p>
						<p>テキストテキストテキストテキストテキストテキストをご提供します。</p>
					</div>
				</div>
				<div class="step-box">
					<div class="circle-trace-box">
						<div class="circle-ele"></div>
						<div class="circle-ele"></div>
						<div class="circle-ele"></div>
						<div class="circle-ele"></div>
					</div>
					<div class="road-box">
						<div class="inner-box">
							<div class="car-box">
								<div class="inside-box">
									<img class="car lazyload" data-src="{{ asset('/image/top/service/van.webp') }}" alt="ハイエース">
									<img class="l-light lazyload" data-src="{{ asset('/image/top/service/l-light.svg') }}" alt="左ライト">
									<img class="r-light lazyload" data-src="{{ asset('/image/top/service/r-light.svg') }}" alt="右ライト">
								</div>
							</div>
						</div>
					</div>
					<div class="top-diagonal-box">
						<div class="inner-box">
							<div class="label-box">
								<h2>出張買取</h2>
							</div>
						</div>
					</div>
					<div class="bottom-diagonal-box">
						<div class="inner-box"></div>
					</div>
					<div class="left-box">
						<div class="step-ele">
							<div class="img-box">
								<img class="img base lazyload" data-src="{{ asset('/image/top/service/service1.webp') }}" alt="予約">
								<img class="img red-layer lazyload" data-src="{{ asset('/image/top/service/service1.webp') }}" alt="グリッチ背景1">
								<img class="img cyan-layer lazyload" data-src="{{ asset('/image/top/service/service1.webp') }}" alt="グリッチ背景1">
							</div>
							<div class="head-box">
								<span class="num">01</span>
								<h2>事前にご<span class="green">予約</span></h2>
							</div>
							<div class="desc-box">
								<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
								<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
								<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
							</div>
						</div>
						<div class="step-ele">
							<div class="img-box">
								<img class="img base lazyload" data-src="{{ asset('/image/top/service/service3.webp') }}" alt="受取">
								<img class="img red-layer lazyload" data-src="{{ asset('/image/top/service/service3.webp') }}" alt="グリッチ背景1">
								<img class="img cyan-layer lazyload" data-src="{{ asset('/image/top/service/service3.webp') }}" alt="グリッチ背景1">
							</div>
							<div class="head-box">
								<span class="num">03</span>
								<h2>現金の<span class="green">受取</span></h2>
							</div>
							<div class="desc-box">
								<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
								<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
								<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
							</div>
						</div>
					</div>
					<div class="right-box">
						<div class="step-ele">
							<div class="img-box">
								<img class="img base lazyload" data-src="{{ asset('/image/top/service/service2.webp') }}" alt="査定">
								<img class="img red-layer lazyload" data-src="{{ asset('/image/top/service/service2.webp') }}" alt="グリッチ背景1">
								<img class="img cyan-layer lazyload" data-src="{{ asset('/image/top/service/service2.webp') }}" alt="グリッチ背景1">
							</div>
							<div class="head-box">
								<span class="num">02</span>
								<h2>ご自宅で<span class="green">査定</span></h2>
							</div>
							<div class="desc-box">
								<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
								<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
								<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
							</div>
						</div>
						<div class="step-ele">
							<div class="img-box">
								<img class="img base lazyload" data-src="{{ asset('/image/top/service/service4.webp') }}" alt="搬出">
								<img class="img red-layer lazyload" data-src="{{ asset('/image/top/service/service4.webp') }}" alt="グリッチ背景1">
								<img class="img cyan-layer lazyload" data-src="{{ asset('/image/top/service/service4.webp') }}" alt="グリッチ背景1">
							</div>
							<div class="head-box">
								<span class="num">04</span>
								<h2><span class="green">搬出</span>・清掃</h2>
							</div>
							<div class="desc-box">
								<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
								<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
								<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
							</div>
						</div>
					</div>
				</div>
				<a class="link-box" href="#">
					<p>サービスについて</p>
					<div class="arrow-box">
						<div class="v-line"></div>
						<svg class="arrow" viewBox="0 0 17 14" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.278291 0.307588C0.660694 -0.0907492 1.29393 -0.103965 1.69235 0.278291L7.94235 6.27829C8.13878 6.46686 8.24997 6.72768 8.24997 6.99997C8.24997 7.27227 8.13878 7.53308 7.94235 7.72165L1.69235 13.7217C1.29393 14.1039 0.660694 14.0907 0.278291 13.6924C-0.103964 13.2939 -0.0907491 12.6607 0.307587 12.2783L5.80563 6.99997L0.307587 1.72165C-0.0907493 1.33925 -0.103965 0.706012 0.278291 0.307588ZM9.02829 0.307588C9.41069 -0.0907493 10.0439 -0.103965 10.4424 0.278291L16.6924 6.27829C16.8888 6.46686 17 6.72768 17 6.99997C17 7.27227 16.8888 7.53308 16.6924 7.72165L10.4424 13.7217C10.0439 14.1039 9.41069 14.0907 9.02829 13.6924C8.64604 13.2939 8.65925 12.6607 9.05759 12.2783L14.5556 6.99997L9.05759 1.72165C8.65925 1.33925 8.64604 0.706012 9.02829 0.307588Z"/>
						</svg>
					</div>
				</a>
			</div>
		</div>
	</section>















	<section id="landscape">
		<img class="img lazyload" data-src="{{ asset('/image/top/landscape/town.webp') }}" alt="町">
		<div class="dots"></div>
	</section>














	<section id="expert">
		<div class="container">
			<div class="sticky-box">
				<div class="content-box">
					<div class="txt-box">
						<div class="sentence-box">
							<p class="en-line top4">EXPERTS</p>
							<p class="en-line top3">EXPERTS</p>
							<p class="en-line top2">EXPERTS</p>
							<p class="en-line top1">EXPERTS</p>
							<p class="en center">EXPERTS</p>
							<p class="en-line bottom1">EXPERTS</p>
							<p class="en-line bottom2">EXPERTS</p>
							<p class="en-line bottom3">EXPERTS</p>
							<p class="en-line bottom4">EXPERTS</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



















	<section id="category">
		<div class="container">
			<div class="sticky-box">
				<div class="content-box">
					<img class="pixel lazyload" data-src="{{ asset('/image/top/category/pixel-bg.webp') }}" alt="pixel">
					<img class="top-brush-stroke lazyload" data-src="{{ asset('/image/top/category/top-brush-stroke.svg') }}" alt="ブラシストローク">
					<img class="bottom-brush-stroke lazyload" data-src="{{ asset('/image/top/category/bottom-brush-stroke.svg') }}" alt="ブラシストローク">
					<img class="top-grunge-paint lazyload" data-src="{{ asset('/image/top/category/top-grunge-paint.svg') }}" alt="グランジペイント">
					<img class="bottom-grunge-paint lazyload" data-src="{{ asset('/image/top/category/bottom-grunge-paint.svg') }}" alt="グランジペイント">
				</div>
			</div>
			<div class="scroll-content-box">
				<div class="video-box">
					<div class="video-ele">
						<div class="inner-box">
							<div class="base-box">
								<video class="video" preload="none" autoplay loop muted playsinline disablepictureinpicture data-src="{{ asset('/movie/top/category/appliance.mp4') }}"></video>
							</div>
							<h2 class="cat-tit">家電</h2>
							<ul class="desc-box">
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
							</ul>
							<svg class="arrow" viewBox="0 0 62 62" xmlns="http://www.w3.org/2000/svg">
								<path d="M61.1913 0V61H59.1913V2H0.23822V0H61.1913Z" fill="white"/>
								<path d="M60.9453 1.81348L1.41406 61.3906L0 59.9775L59.5303 0.399414L60.9453 1.81348Z" fill="white"/>
							</svg>
							<div class="img-box">
								<img class="img lazyload" data-src="{{ asset('/image/top/category/appliance.webp') }}" alt="家電">
							</div>
							<div class="bg"></div>
						</div>
					</div>
					<div class="video-ele">
						<div class="inner-box">
							<div class="video-box">
								<video class="video" preload="none" autoplay loop muted playsinline disablepictureinpicture data-src="{{ asset('/movie/top/category/camera.mp4') }}"></video>
							</div>
							<h2 class="cat-tit">カメラ</h2>
							<ul class="desc-box">
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
							</ul>
							<svg class="arrow" viewBox="0 0 62 62" xmlns="http://www.w3.org/2000/svg">
								<path d="M61.1913 0V61H59.1913V2H0.23822V0H61.1913Z" fill="white"/>
								<path d="M60.9453 1.81348L1.41406 61.3906L0 59.9775L59.5303 0.399414L60.9453 1.81348Z" fill="white"/>
							</svg>
							<div class="img-box">
								<img class="img lazyload" data-src="{{ asset('/image/top/category/camera.webp') }}" alt="カメラ">
							</div>
							<div class="bg"></div>
						</div>
					</div>
					<div class="video-ele">
						<div class="inner-box">
							<div class="video-box">
								<video class="video" preload="none" autoplay loop muted playsinline disablepictureinpicture data-src="{{ asset('/movie/top/category/watch.mp4') }}"></video>
							</div>
							<h2 class="cat-tit">時計</h2>
							<ul class="desc-box">
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
							</ul>
							<svg class="arrow" viewBox="0 0 62 62" xmlns="http://www.w3.org/2000/svg">
								<path d="M61.1913 0V61H59.1913V2H0.23822V0H61.1913Z" fill="white"/>
								<path d="M60.9453 1.81348L1.41406 61.3906L0 59.9775L59.5303 0.399414L60.9453 1.81348Z" fill="white"/>
							</svg>
							<div class="img-box">
								<img class="img lazyload" data-src="{{ asset('/image/top/category/watch.webp') }}" alt="時計">
							</div>
							<div class="bg"></div>
						</div>
					</div>
					<div class="video-ele">
						<div class="inner-box">
							<div class="video-box">
								<video class="video" preload="none" autoplay loop muted playsinline disablepictureinpicture data-src="{{ asset('/movie/top/category/antique.mp4') }}"></video>
							</div>
							<h2 class="cat-tit">骨董品</h2>
							<ul class="desc-box">
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
							</ul>
							<svg class="arrow" viewBox="0 0 62 62" xmlns="http://www.w3.org/2000/svg">
								<path d="M61.1913 0V61H59.1913V2H0.23822V0H61.1913Z" fill="white"/>
								<path d="M60.9453 1.81348L1.41406 61.3906L0 59.9775L59.5303 0.399414L60.9453 1.81348Z" fill="white"/>
							</svg>
							<div class="img-box">
								<img class="img lazyload" data-src="{{ asset('/image/top/category/antique.webp') }}" alt="骨董品">
							</div>
							<div class="bg"></div>
						</div>
					</div>
					<div class="video-ele">
						<div class="inner-box">
							<div class="img-box" style="position: initial; opacity: 1.0;">
								<img class="img lazyload" data-src="{{ asset('/image/top/category/hobby.webp') }}" alt="おもちゃ">
							</div>
							<h2 class="cat-tit">ホビー</h2>
							<ul class="desc-box">
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
								<li>テキスト</li>
							</ul>
							<svg class="arrow" viewBox="0 0 62 62" xmlns="http://www.w3.org/2000/svg">
								<path d="M61.1913 0V61H59.1913V2H0.23822V0H61.1913Z" fill="white"/>
								<path d="M60.9453 1.81348L1.41406 61.3906L0 59.9775L59.5303 0.399414L60.9453 1.81348Z" fill="white"/>
							</svg>
							<div class="bg"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>














	<section id="marugoto">
		<div class="content-box">
			<div class="tit-box">
				<div class="left-box">
					<div class="label-box">
						<div class="dots"></div>
						<p class="solution">こんなお悩みも解決</p>
					</div>
					<div class="head-box">
						<h2 class="head-content">お家を<span class="start-bracket">『</span><span class="inside">まるごと</span><span class="end-bracket">』</span>お片づけ</h2>
						<h2 class="head-content reveal">お家を<span class="start-bracket">『</span><span class="inside">まるごと</span><span class="end-bracket">』</span>お片づけ</h2>
					</div>
					<div class="desc-box">
						<p>大掛かりな整理は、心理的にも体力的にも大きな負担がかかるものです。</p>
						<p>「 片づけたいけれど、思い出が多くて進まない 」や「 遠方で通えない 」とお悩みなら、お任せください。</p>
						<p>お家を「まるごと」迅速・丁寧に整理し、ご家族の心と空間にゆとりを取り戻します。</p>
					</div>
				</div>
				<div class="right-box">
					<img class="img lazyload" data-src="{{ asset('/image/top/marugoto/frame.webp') }}" alt="before after">
				</div>
			</div>
			<div class="project-box">
				<div class="project-ele">
					<div class="inner-box hover-slider-container">
						<div class="image-after">
							<img class="img lazyload" data-src="{{ asset('/image/top/marugoto/ihin-after.webp') }}" alt="遺品整理">
						</div>
						<div class="image-before">
							<img class="img lazyload" data-src="{{ asset('/image/top/marugoto/ihin-before.webp') }}" alt="遺品整理">
						</div>
						<div class="slider-line-box">
							<div class="inner-box">
								<div class="circle"></div>
							</div>
						</div>
						<div class="cat-tit-box">
							<div class="inner-tit-box">
								<h2 class="head-content">遺品整理</h2>
								<h2 class="head-content reveal">遺品整理</h2>
							</div>
						</div>
						<div class="desc-box">
							<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
							<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
						<div class="bg"></div>
					</div>
				</div>
				<div class="project-ele">
					<div class="inner-box hover-slider-container">
						<div class="image-after">
							<img class="img lazyload" data-src="{{ asset('/image/top/marugoto/akiya-after.webp') }}" alt="空き家整理">
						</div>
						<div class="image-before">
							<img class="img lazyload" data-src="{{ asset('/image/top/marugoto/akiya-before.webp') }}" alt="空き家整理">
						</div>
						<div class="slider-line-box">
							<div class="inner-box">
								<div class="circle"></div>
							</div>
						</div>
						<div class="cat-tit-box">
							<div class="inner-tit-box">
								<h2 class="head-content">空き家整理</h2>
								<h2 class="head-content reveal">空き家整理</h2>
							</div>
						</div>
						<div class="desc-box">
							<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
							<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
						<div class="bg"></div>
					</div>
				</div>
			</div>
		</div>
	</section>









	<section id="result">
		<div class="container">
			<div class="sticky-box">
				<div class="content-box">
					<div class="left-box">
						<div class="info-box">
							<h2 class="head">買取実績</h2>
							<div class="desc-box">
								<p>さまざまな品の買い取りをおこなっています。<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
								<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
								<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
							</div>
						</div>
						<a class="link-box" href="{{ route('result') }}">
							<p>買取実績をみる</p>
							<div class="arrow-box">
								<div class="v-line"></div>
								<svg class="arrow" viewBox="0 0 17 14" xmlns="http://www.w3.org/2000/svg">
									<path d="M0.278291 0.307588C0.660694 -0.0907492 1.29393 -0.103965 1.69235 0.278291L7.94235 6.27829C8.13878 6.46686 8.24997 6.72768 8.24997 6.99997C8.24997 7.27227 8.13878 7.53308 7.94235 7.72165L1.69235 13.7217C1.29393 14.1039 0.660694 14.0907 0.278291 13.6924C-0.103964 13.2939 -0.0907491 12.6607 0.307587 12.2783L5.80563 6.99997L0.307587 1.72165C-0.0907493 1.33925 -0.103965 0.706012 0.278291 0.307588ZM9.02829 0.307588C9.41069 -0.0907493 10.0439 -0.103965 10.4424 0.278291L16.6924 6.27829C16.8888 6.46686 17 6.72768 17 6.99997C17 7.27227 16.8888 7.53308 16.6924 7.72165L10.4424 13.7217C10.0439 14.1039 9.41069 14.0907 9.02829 13.6924C8.64604 13.2939 8.65925 12.6607 9.05759 12.2783L14.5556 6.99997L9.05759 1.72165C8.65925 1.33925 8.64604 0.706012 9.02829 0.307588Z"/>
								</svg>
							</div>
						</a>
					</div>
					<div class="fig-box">
						<div class="inner-box">
							<img class="img lazyload" data-src="{{ asset('/image/top/result/sofa.webp') }}" alt="ソファ">
							<div class="guitar-box">
								<img class="img lazyload" data-src="{{ asset('/image/top/result/guitar.webp') }}" alt="ギター">
							</div>
							<div class="dresser-box">
								<img class="img lazyload" data-src="{{ asset('/image/top/result/dresser.webp') }}" alt="タンス">
							</div>
							<div class="gift-box">
								<img class="img lazyload" data-src="{{ asset('/image/top/result/gift.webp') }}" alt="贈答品">
							</div>
							<div class="leather-shoes-box">
								<img class="img lazyload" data-src="{{ asset('/image/top/result/leather-shoes.webp') }}" alt="革靴">
							</div>
						</div>
					</div>
					<div class="text-pattern-box">
						<div class="ticker slider-box1">
							<div class="ticker-track">
								<div class="ticker-group">
									<h3>UNIQLO</h3>
									<h3>ZARA</h3>
									<h3>NIKE</h3>
									<h3>THE NORTH FACE</h3>
									<h3>LOUIS VUITTON</h3>
									<h3>H&M</h3>
									<h3>UNITED ARROWS</h3>
									<h3>GUCCI</h3>
									<h3>GAP</h3>
									<h3>Maison Margiela</h3>
									<h3>Supreme</h3>
								</div>
								<div class="ticker-group">
									<h3>UNIQLO</h3>
									<h3>ZARA</h3>
									<h3>NIKE</h3>
									<h3>THE NORTH FACE</h3>
									<h3>LOUIS VUITTON</h3>
									<h3>H&M</h3>
									<h3>UNITED ARROWS</h3>
									<h3>GUCCI</h3>
									<h3>GAP</h3>
									<h3>Maison Margiela</h3>
									<h3>Supreme</h3>
								</div>
							</div>
						</div>
						<div class="ticker slider-box2">
							<div class="ticker-track">
								<div class="ticker-group">
									<h3>洗濯機</h3>
									<h3>電子レンジ</h3>
									<h3>エアコン</h3>
									<h3>マッサージチェア</h3>
									<h3>冷蔵庫</h3>
									<h3>ガスコンロ</h3>
									<h3>ランニングマシン</h3>
									<h3>テレビ</h3>
									<h3>食洗機</h3>
								</div>
								<div class="ticker-group">
									<h3>洗濯機</h3>
									<h3>電子レンジ</h3>
									<h3>エアコン</h3>
									<h3>マッサージチェア</h3>
									<h3>冷蔵庫</h3>
									<h3>ガスコンロ</h3>
									<h3>ランニングマシン</h3>
									<h3>テレビ</h3>
									<h3>食洗機</h3>
								</div>
							</div>
						</div>
						<div class="ticker slider-box3">
							<div class="ticker-track">
								<div class="ticker-group">
									<h3>学習机</h3>
									<h3>ソファ</h3>
									<h3>ダイニングテーブル</h3>
									<h3>タンス</h3>
									<h3>テレビ台</h3>
									<h3>ベッド</h3>
									<h3>椅子</h3>
									<h3>ハンガーラック</h3>
									<h3>本棚</h3>
									<h3>スタンドライト</h3>
									<h3>間仕切り</h3>
									<h3>ローテーブル</h3>
									<h3>ドレッサー</h3>
								</div>
								<div class="ticker-group">
									<h3>学習机</h3>
									<h3>ソファ</h3>
									<h3>ダイニングテーブル</h3>
									<h3>タンス</h3>
									<h3>テレビ台</h3>
									<h3>ベッド</h3>
									<h3>椅子</h3>
									<h3>ハンガーラック</h3>
									<h3>本棚</h3>
									<h3>スタンドライト</h3>
									<h3>間仕切り</h3>
									<h3>ローテーブル</h3>
									<h3>ドレッサー</h3>
								</div>
							</div>
						</div>
						<div class="ticker slider-box4">
							<div class="ticker-track">
								<div class="ticker-group">
									<h3>Patek Philippe</h3>
									<h3>Audemars Piguet</h3>
									<h3>Vacheron Constantin</h3>
									<h3>A.Lange&Söhne</h3>
									<h3>Breguet</h3>
									<h3>Rolex</h3>
									<h3>Citizen</h3>
									<h3>Omega</h3>
									<h3>Grand Seiko</h3>
									<h3>Tudor</h3>
									<h3>Hamilton</h3>
									<h3>IWC</h3>
									<h3>Cartier</h3>
									<h3>TAG Heuer</h3>
									<h3>Breitling</h3>
									<h3>Panerai</h3>
									<h3>CASIO</h3>
								</div>
								<div class="ticker-group">
									<h3>Patek Philippe</h3>
									<h3>Audemars Piguet</h3>
									<h3>Vacheron Constantin</h3>
									<h3>A.Lange&Söhne</h3>
									<h3>Breguet</h3>
									<h3>Rolex</h3>
									<h3>Citizen</h3>
									<h3>Omega</h3>
									<h3>Grand Seiko</h3>
									<h3>Tudor</h3>
									<h3>Hamilton</h3>
									<h3>IWC</h3>
									<h3>Cartier</h3>
									<h3>TAG Heuer</h3>
									<h3>Breitling</h3>
									<h3>Panerai</h3>
									<h3>CASIO</h3>
								</div>
							</div>
						</div>
						<div class="ticker slider-box5">
							<div class="ticker-track">
								<div class="ticker-group">
									<h3>スマートフォン</h3>
									<h3>パソコン</h3>
									<h3>デジタルカメラ</h3>
									<h3>ゲーム機</h3>
									<h3>ドライヤー</h3>
									<h3>美顔器</h3>
									<h3>エスプレッソマシン</h3>
									<h3>ミキサー</h3>
									<h3>サーキュレーター</h3>
									<h3>ラジオ</h3>
								</div>
								<div class="ticker-group">
									<h3>スマートフォン</h3>
									<h3>パソコン</h3>
									<h3>デジタルカメラ</h3>
									<h3>ゲーム機</h3>
									<h3>ドライヤー</h3>
									<h3>美顔器</h3>
									<h3>エスプレッソマシン</h3>
									<h3>ミキサー</h3>
									<h3>サーキュレーター</h3>
									<h3>ラジオ</h3>
								</div>
							</div>
						</div>
						<div class="ticker slider-box6">
							<div class="ticker-track">
								<div class="ticker-group">
									<h3>Tiffany&Co.</h3>
									<h3>Cartier</h3>
									<h3>Van Cleef&Arpels</h3>
									<h3>BVLGARI</h3>
									<h3>Harry Winston</h3>
									<h3>MIKIMOTO</h3>
									<h3>Chaumet</h3>
									<h3>Boucheron</h3>
									<h3>4℃</h3>
									<h3>CHANEL</h3>
									<h3>HERMÈS</h3>
									<h3>Star Jewelry</h3>
									<h3>DIOR</h3>
									<h3>Chopard</h3>
								</div>
								<div class="ticker-group">
									<h3>Tiffany&Co.</h3>
									<h3>Cartier</h3>
									<h3>Van Cleef&Arpels</h3>
									<h3>BVLGARI</h3>
									<h3>Harry Winston</h3>
									<h3>MIKIMOTO</h3>
									<h3>Chaumet</h3>
									<h3>Boucheron</h3>
									<h3>4℃</h3>
									<h3>CHANEL</h3>
									<h3>HERMÈS</h3>
									<h3>Star Jewelry</h3>
									<h3>DIOR</h3>
									<h3>Chopard</h3>
								</div>
							</div>
						</div>
						<div class="ticker slider-box7">
							<div class="ticker-track">
								<div class="ticker-group">
									<h3>太鼓</h3>
									<h3>バイオリン</h3>
									<h3>木琴</h3>
									<h3>コンポ</h3>
									<h3>DJ機器</h3>
									<h3>ギター</h3>
									<h3>アンプ</h3>
									<h3>ピアノ</h3>
									<h3>トランペット</h3>
									<h3>三味線</h3>
									<h3>アコーディオン</h3>
									<h3>フルート</h3>
									<h3>シンバル</h3>
									<h3>MIDIキーワード</h3>
									<h3>ベース</h3>
									<h3>サックス</h3>
									<h3>エフェクター</h3>
									<h3>スピーカー</h3>
								</div>
								<div class="ticker-group">
									<h3>太鼓</h3>
									<h3>バイオリン</h3>
									<h3>木琴</h3>
									<h3>コンポ</h3>
									<h3>DJ機器</h3>
									<h3>ギター</h3>
									<h3>アンプ</h3>
									<h3>ピアノ</h3>
									<h3>トランペット</h3>
									<h3>三味線</h3>
									<h3>アコーディオン</h3>
									<h3>フルート</h3>
									<h3>シンバル</h3>
									<h3>MIDIキーワード</h3>
									<h3>ベース</h3>
									<h3>サックス</h3>
									<h3>エフェクター</h3>
									<h3>スピーカー</h3>
								</div>
							</div>
						</div>
						<div class="ticker slider-box8">
							<div class="ticker-track">
								<div class="ticker-group">
									<h3>バック</h3>
									<h3>財布</h3>
									<h3>ベルト</h3>
									<h3>ネクタイ</h3>
									<h3>腕時計</h3>
									<h3>スーツ</h3>
									<h3>着物</h3>
									<h3>帽子</h3>
									<h3>万年筆</h3>
									<h3>スカーフ</h3>
								</div>
								<div class="ticker-group">
									<h3>バック</h3>
									<h3>財布</h3>
									<h3>ベルト</h3>
									<h3>ネクタイ</h3>
									<h3>腕時計</h3>
									<h3>スーツ</h3>
									<h3>着物</h3>
									<h3>帽子</h3>
									<h3>万年筆</h3>
									<h3>スカーフ</h3>
								</div>
							</div>
						</div>
						<div class="ticker slider-box9">
							<div class="ticker-track">
								<div class="ticker-group">
									<h3>フライパン</h3>
									<h3>食器</h3>
									<h3>スプーン</h3>
									<h3>鍋</h3>
									<h3>フォーク</h3>
									<h3>キッチンばさみ</h3>
									<h3>包丁</h3>
									<h3>グラス</h3>
									<h3>魔法ビン</h3>
									<h3>デジタルスケール</h3>
									<h3>茶道具</h3>
									<h3>タオル</h3>
									<h3>炊飯器</h3>
									<h3>キッチンカウンター</h3>
									<h3>圧力鍋</h3>
									<h3>タンブラー</h3>
								</div>
								<div class="ticker-group">
									<h3>フライパン</h3>
									<h3>食器</h3>
									<h3>スプーン</h3>
									<h3>鍋</h3>
									<h3>フォーク</h3>
									<h3>キッチンばさみ</h3>
									<h3>包丁</h3>
									<h3>グラス</h3>
									<h3>魔法ビン</h3>
									<h3>デジタルスケール</h3>
									<h3>茶道具</h3>
									<h3>タオル</h3>
									<h3>炊飯器</h3>
									<h3>キッチンカウンター</h3>
									<h3>圧力鍋</h3>
									<h3>タンブラー</h3>
								</div>
							</div>
						</div>
						<div class="ticker slider-box10">
							<div class="ticker-track">
								<div class="ticker-group">
									<h3>ザック</h3>
									<h3>ヘルメット</h3>
									<h3>自転車</h3>
									<h3>ゴルフクラブ</h3>
									<h3>ユニフォーム</h3>
									<h3>スノーボード</h3>
									<h3>寝袋</h3>
									<h3>ダンベル</h3>
									<h3>テニスラケット</h3>
									<h3>ロードバイク</h3>
									<h3>シュノーケル</h3>
									<h3>スパイク</h3>
									<h3>テント</h3>
								</div>
								<div class="ticker-group">
									<h3>ザック</h3>
									<h3>ヘルメット</h3>
									<h3>自転車</h3>
									<h3>ゴルフクラブ</h3>
									<h3>ユニフォーム</h3>
									<h3>スノーボード</h3>
									<h3>寝袋</h3>
									<h3>ダンベル</h3>
									<h3>テニスラケット</h3>
									<h3>ロードバイク</h3>
									<h3>シュノーケル</h3>
									<h3>スパイク</h3>
									<h3>テント</h3>
								</div>
							</div>
						</div>
						<div class="ticker slider-box11">
							<div class="ticker-track">
								<div class="ticker-group">
									<h3>Vitra</h3>
									<h3>Artek</h3>
									<h3>IKEA</h3>
									<h3>ニトリ</h3>
									<h3>ACTUS</h3>
									<h3>Francfranc</h3>
									<h3>IDÉE</h3>
									<h3>Fritz Hansen</h3>
									<h3>unico</h3>
									<h3>Minotti</h3>
									<h3>無印良品</h3>
									<h3>B&B Italia</h3>
									<h3>カリモク家具</h3>
									<h3>マルニ木工</h3>
									<h3>Cassina</h3>
								</div>
								<div class="ticker-group">
									<h3>Vitra</h3>
									<h3>Artek</h3>
									<h3>IKEA</h3>
									<h3>ニトリ</h3>
									<h3>ACTUS</h3>
									<h3>Francfranc</h3>
									<h3>IDÉE</h3>
									<h3>Fritz Hansen</h3>
									<h3>unico</h3>
									<h3>Minotti</h3>
									<h3>無印良品</h3>
									<h3>B&B Italia</h3>
									<h3>カリモク家具</h3>
									<h3>マルニ木工</h3>
									<h3>Cassina</h3>
								</div>
							</div>
						</div>
						<div class="ticker slider-box12">
							<div class="ticker-track">
								<div class="ticker-group">
									<h3>指輪</h3>
									<h3>イヤリング</h3>
									<h3>ピアス</h3>
									<h3>基板</h3>
									<h3>ネックレス</h3>
									<h3>ギフト券</h3>
									<h3>古銭</h3>
									<h3>インゴット</h3>
									<h3>記念コイン</h3>
									<h3>ブローチ</h3>
									<h3>切手</h3>
									<h3>金杯</h3>
								</div>
								<div class="ticker-group">
									<h3>指輪</h3>
									<h3>イヤリング</h3>
									<h3>ピアス</h3>
									<h3>基板</h3>
									<h3>ネックレス</h3>
									<h3>ギフト券</h3>
									<h3>古銭</h3>
									<h3>インゴット</h3>
									<h3>記念コイン</h3>
									<h3>ブローチ</h3>
									<h3>切手</h3>
									<h3>金杯</h3>
								</div>
							</div>
						</div>
						<div class="ticker slider-box13">
							<div class="ticker-track">
								<div class="ticker-group">
									<p>UNIQLO</p>
									<p>ZARA</p>
									<p>NIKE</p>
									<p>THE NORTH FACE</p>
									<p>LOUIS VUITTON</p>
									<p>H&M</p>
									<p>UNITED ARROWS</p>
									<p>GUCCI</p>
									<p>GAP</p>
									<p>Maison Margiela</p>
									<p>Supreme</p>
								</div>
								<div class="ticker-group">
									<p>UNIQLO</p>
									<p>ZARA</p>
									<p>NIKE</p>
									<p>THE NORTH FACE</p>
									<p>LOUIS VUITTON</p>
									<p>H&M</p>
									<p>UNITED ARROWS</p>
									<p>GUCCI</p>
									<p>GAP</p>
									<p>Maison Margiela</p>
									<p>Supreme</p>
								</div>
							</div>
						</div>
						<div class="ticker slider-box14">
							<div class="ticker-track">
								<div class="ticker-group">
									<p>洗濯機</p>
									<p>電子レンジ</p>
									<p>エアコン</p>
									<p>マッサージチェア</p>
									<p>冷蔵庫</p>
									<p>ガスコンロ</p>
									<p>ランニングマシン</p>
									<p>テレビ</p>
									<p>食洗機</p>
								</div>
								<div class="ticker-group">
									<p>洗濯機</p>
									<p>電子レンジ</p>
									<p>エアコン</p>
									<p>マッサージチェア</p>
									<p>冷蔵庫</p>
									<p>ガスコンロ</p>
									<p>ランニングマシン</p>
									<p>テレビ</p>
									<p>食洗機</p>
								</div>
							</div>
						</div>
						<div class="ticker slider-box15">
							<div class="ticker-track">
								<div class="ticker-group">
									<p>学習机</p>
									<p>ソファ</p>
									<p>ダイニングテーブル</p>
									<p>タンス</p>
									<p>テレビ台</p>
									<p>ベッド</p>
									<p>椅子</p>
									<p>ハンガーラック</p>
									<p>本棚</p>
									<p>スタンドライト</p>
									<p>間仕切り</p>
									<p>ローテーブル</p>
									<p>ドレッサー</p>
								</div>
								<div class="ticker-group">
									<p>学習机</p>
									<p>ソファ</p>
									<p>ダイニングテーブル</p>
									<p>タンス</p>
									<p>テレビ台</p>
									<p>ベッド</p>
									<p>椅子</p>
									<p>ハンガーラック</p>
									<p>本棚</p>
									<p>スタンドライト</p>
									<p>間仕切り</p>
									<p>ローテーブル</p>
									<p>ドレッサー</p>
								</div>
							</div>
						</div>
						<div class="ticker slider-box16">
							<div class="ticker-track">
								<div class="ticker-group">
									<p>Patek Philippe</p>
									<p>Audemars Piguet</p>
									<p>Vacheron Constantin</p>
									<p>A.Lange&Söhne</p>
									<p>Breguet</p>
									<p>Rolex</p>
									<p>Citizen</p>
									<p>Omega</p>
									<p>Grand Seiko</p>
									<p>Tudor</p>
									<p>Hamilton</p>
									<p>IWC</p>
									<p>Cartier</p>
									<p>TAG Heuer</p>
									<p>Breitling</p>
									<p>Panerai</p>
									<p>CASIO</p>
								</div>
								<div class="ticker-group">
									<p>Patek Philippe</p>
									<p>Audemars Piguet</p>
									<p>Vacheron Constantin</p>
									<p>A.Lange&Söhne</p>
									<p>Breguet</p>
									<p>Rolex</p>
									<p>Citizen</p>
									<p>Omega</p>
									<p>Grand Seiko</p>
									<p>Tudor</p>
									<p>Hamilton</p>
									<p>IWC</p>
									<p>Cartier</p>
									<p>TAG Heuer</p>
									<p>Breitling</p>
									<p>Panerai</p>
									<p>CASIO</p>
								</div>
							</div>
						</div>
						<div class="ticker slider-box17">
							<div class="ticker-track">
								<div class="ticker-group">
									<p>スマートフォン</p>
									<p>パソコン</p>
									<p>デジタルカメラ</p>
									<p>ゲーム機</p>
									<p>ドライヤー</p>
									<p>美顔器</p>
									<p>エスプレッソマシン</p>
									<p>ミキサー</p>
									<p>サーキュレーター</p>
									<p>ラジオ</p>
								</div>
								<div class="ticker-group">
									<p>スマートフォン</p>
									<p>パソコン</p>
									<p>デジタルカメラ</p>
									<p>ゲーム機</p>
									<p>ドライヤー</p>
									<p>美顔器</p>
									<p>エスプレッソマシン</p>
									<p>ミキサー</p>
									<p>サーキュレーター</p>
									<p>ラジオ</p>
								</div>
							</div>
						</div>
						<div class="ticker slider-box18">
							<div class="ticker-track">
								<div class="ticker-group">
									<p>Tiffany&Co.</p>
									<p>Cartier</p>
									<p>Van Cleef&Arpels</p>
									<p>BVLGARI</p>
									<p>Harry Winston</p>
									<p>MIKIMOTO</p>
									<p>Chaumet</p>
									<p>Boucheron</p>
									<p>4℃</p>
									<p>CHANEL</p>
									<p>HERMÈS</p>
									<p>Star Jewelry</p>
									<p>DIOR</p>
									<p>Chopard</p>
								</div>
								<div class="ticker-group">
									<p>Tiffany&Co.</p>
									<p>Cartier</p>
									<p>Van Cleef&Arpels</p>
									<p>BVLGARI</p>
									<p>Harry Winston</p>
									<p>MIKIMOTO</p>
									<p>Chaumet</p>
									<p>Boucheron</p>
									<p>4℃</p>
									<p>CHANEL</p>
									<p>HERMÈS</p>
									<p>Star Jewelry</p>
									<p>DIOR</p>
									<p>Chopard</p>
								</div>
							</div>
						</div>
						<div class="ticker slider-box19">
							<div class="ticker-track">
								<div class="ticker-group">
									<p>太鼓</p>
									<p>バイオリン</p>
									<p>木琴</p>
									<p>コンポ</p>
									<p>DJ機器</p>
									<p>ギター</p>
									<p>アンプ</p>
									<p>ピアノ</p>
									<p>トランペット</p>
									<p>三味線</p>
									<p>アコーディオン</p>
									<p>フルート</p>
									<p>シンバル</p>
									<p>MIDIキーワード</p>
									<p>ベース</p>
									<p>サックス</p>
									<p>エフェクター</p>
									<p>スピーカー</p>
								</div>
								<div class="ticker-group">
									<p>太鼓</p>
									<p>バイオリン</p>
									<p>木琴</p>
									<p>コンポ</p>
									<p>DJ機器</p>
									<p>ギター</p>
									<p>アンプ</p>
									<p>ピアノ</p>
									<p>トランペット</p>
									<p>三味線</p>
									<p>アコーディオン</p>
									<p>フルート</p>
									<p>シンバル</p>
									<p>MIDIキーワード</p>
									<p>ベース</p>
									<p>サックス</p>
									<p>エフェクター</p>
									<p>スピーカー</p>
								</div>
							</div>
						</div>
						<div class="ticker slider-box20">
							<div class="ticker-track">
								<div class="ticker-group">
									<p>バック</p>
									<p>財布</p>
									<p>ベルト</p>
									<p>ネクタイ</p>
									<p>腕時計</p>
									<p>スーツ</p>
									<p>着物</p>
									<p>帽子</p>
									<p>万年筆</p>
									<p>スカーフ</p>
								</div>
								<div class="ticker-group">
									<p>バック</p>
									<p>財布</p>
									<p>ベルト</p>
									<p>ネクタイ</p>
									<p>腕時計</p>
									<p>スーツ</p>
									<p>着物</p>
									<p>帽子</p>
									<p>万年筆</p>
									<p>スカーフ</p>
								</div>
							</div>
						</div>
						<div class="ticker slider-box21">
							<div class="ticker-track">
								<div class="ticker-group">
									<p>フライパン</p>
									<p>食器</p>
									<p>スプーン</p>
									<p>鍋</p>
									<p>フォーク</p>
									<p>キッチンばさみ</p>
									<p>包丁</p>
									<p>グラス</p>
									<p>魔法ビン</p>
									<p>デジタルスケール</p>
									<p>茶道具</p>
									<p>タオル</p>
									<p>炊飯器</p>
									<p>キッチンカウンター</p>
									<p>圧力鍋</p>
									<p>タンブラー</p>
								</div>
								<div class="ticker-group">
									<p>フライパン</p>
									<p>食器</p>
									<p>スプーン</p>
									<p>鍋</p>
									<p>フォーク</p>
									<p>キッチンばさみ</p>
									<p>包丁</p>
									<p>グラス</p>
									<p>魔法ビン</p>
									<p>デジタルスケール</p>
									<p>茶道具</p>
									<p>タオル</p>
									<p>炊飯器</p>
									<p>キッチンカウンター</p>
									<p>圧力鍋</p>
									<p>タンブラー</p>
								</div>
							</div>
						</div>
						<div class="ticker slider-box22">
							<div class="ticker-track">
								<div class="ticker-group">
									<p>ザック</p>
									<p>ヘルメット</p>
									<p>自転車</p>
									<p>ゴルフクラブ</p>
									<p>ユニフォーム</p>
									<p>スノーボード</p>
									<p>寝袋</p>
									<p>ダンベル</p>
									<p>テニスラケット</p>
									<p>ロードバイク</p>
									<p>シュノーケル</p>
									<p>スパイク</p>
									<p>テント</p>
								</div>
								<div class="ticker-group">
									<p>ザック</p>
									<p>ヘルメット</p>
									<p>自転車</p>
									<p>ゴルフクラブ</p>
									<p>ユニフォーム</p>
									<p>スノーボード</p>
									<p>寝袋</p>
									<p>ダンベル</p>
									<p>テニスラケット</p>
									<p>ロードバイク</p>
									<p>シュノーケル</p>
									<p>スパイク</p>
									<p>テント</p>
								</div>
							</div>
						</div>
						<div class="ticker slider-box23">
							<div class="ticker-track">
								<div class="ticker-group">
									<p>Vitra</p>
									<p>Artek</p>
									<p>IKEA</p>
									<p>ニトリ</p>
									<p>ACTUS</p>
									<p>Francfranc</p>
									<p>IDÉE</p>
									<p>Fritz Hansen</p>
									<p>unico</p>
									<p>Minotti</p>
									<p>無印良品</p>
									<p>B&B Italia</p>
									<p>カリモク家具</p>
									<p>マルニ木工</p>
									<p>Cassina</p>
								</div>
								<div class="ticker-group">
									<p>Vitra</p>
									<p>Artek</p>
									<p>IKEA</p>
									<p>ニトリ</p>
									<p>ACTUS</p>
									<p>Francfranc</p>
									<p>IDÉE</p>
									<p>Fritz Hansen</p>
									<p>unico</p>
									<p>Minotti</p>
									<p>無印良品</p>
									<p>B&B Italia</p>
									<p>カリモク家具</p>
									<p>マルニ木工</p>
									<p>Cassina</p>
								</div>
							</div>
						</div>
						<div class="ticker slider-box24">
							<div class="ticker-track">
								<div class="ticker-group">
									<p>指輪</p>
									<p>イヤリング</p>
									<p>ピアス</p>
									<p>基板</p>
									<p>ネックレス</p>
									<p>ギフト券</p>
									<p>古銭</p>
									<p>インゴット</p>
									<p>記念コイン</p>
									<p>ブローチ</p>
									<p>切手</p>
									<p>金杯</p>
								</div>
								<div class="ticker-group">
									<p>指輪</p>
									<p>イヤリング</p>
									<p>ピアス</p>
									<p>基板</p>
									<p>ネックレス</p>
									<p>ギフト券</p>
									<p>古銭</p>
									<p>インゴット</p>
									<p>記念コイン</p>
									<p>ブローチ</p>
									<p>切手</p>
									<p>金杯</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="cross-box">
					<div class="inner-box">
						<div class="ticker cross-slider-box1">
							<div class="ticker-track">
								<div class="ticker-group">
									<p data-splitting>LOCATION</p>
									<p data-splitting>COMPANY</p>
									<p data-splitting>TEL</p>
									<p data-splitting>REPRESENTATIVE</p>
									<p data-splitting>LOCATION</p>
									<p data-splitting>COMPANY</p>
									<p data-splitting>TEL</p>
									<p data-splitting>REPRESENTATIVE</p>
								</div>
								<div class="ticker-group">
									<p data-splitting>LOCATION</p>
									<p data-splitting>COMPANY</p>
									<p data-splitting>TEL</p>
									<p data-splitting>REPRESENTATIVE</p>
									<p data-splitting>LOCATION</p>
									<p data-splitting>COMPANY</p>
									<p data-splitting>TEL</p>
									<p data-splitting>REPRESENTATIVE</p>
								</div>
							</div>
						</div>
						<div class="ticker cross-slider-box2">
							<div class="ticker-track">
								<div class="ticker-group">
									<p data-splitting>LOCATION</p>
									<p data-splitting>COMPANY</p>
									<p data-splitting>TEL</p>
									<p data-splitting>REPRESENTATIVE</p>
									<p data-splitting>LOCATION</p>
									<p data-splitting>COMPANY</p>
									<p data-splitting>TEL</p>
									<p data-splitting>REPRESENTATIVE</p>
								</div>
								<div class="ticker-group">
									<p data-splitting>LOCATION</p>
									<p data-splitting>COMPANY</p>
									<p data-splitting>TEL</p>
									<p data-splitting>REPRESENTATIVE</p>
									<p data-splitting>LOCATION</p>
									<p data-splitting>COMPANY</p>
									<p data-splitting>TEL</p>
									<p data-splitting>REPRESENTATIVE</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div id="result-scroll-space"></div>

















	<section id="info">
		<div class="content-box">
			<div class="tit-box">
				<p class="en" data-splitting>Info</p>
				<h2 class="jp" data-splitting>運営者情報</h2>
			</div>
			<div class="detail-box">
				<div class="left-box">
					<div class="info-ele">
						<h3>屋号</h3>
						<p>セカンド・ライド</p>
						<div class="streak-box">
							<div class="inner-box">
								<div class="base"></div>
								<div class="highlight"></div>
							</div>
						</div>
					</div>
					<div class="info-ele">
						<h3>代表者名</h3>
						<p>柴原 輝</p>
						<div class="streak-box">
							<div class="inner-box">
								<div class="base"></div>
								<div class="highlight"></div>
							</div>
						</div>
					</div>
					<div class="info-ele">
						<h3>所在地</h3>
						<div class="address-box">
							<p class="post-code-box"><span class="mark">〒</span>492-8092</p>
							<p class="address">愛知県 稲沢市 下津穂所 一丁目 5-9</p>
						</div>
						<div class="streak-box">
							<div class="inner-box">
								<div class="base"></div>
								<div class="highlight"></div>
							</div>
						</div>
					</div>
					<div class="info-ele">
						<h3>電話番号</h3>
						<a class="tel" href="tel:07011464820">070-1146-4820</a>
						<div class="streak-box">
							<div class="inner-box">
								<div class="base"></div>
								<div class="highlight"></div>
							</div>
						</div>
					</div>
					<div class="info-ele">
						<h3>メールアドレス</h3>
						<a class="mail" href="mailto:info@2nd-ride.jp">info@2nd-ride.jp</a>
						<div class="streak-box">
							<div class="inner-box">
								<div class="base"></div>
								<div class="highlight"></div>
							</div>
						</div>
					</div>
					<div class="info-ele">
						<h3>公式URL</h3>
						<p>https://2nd-ride.jp</p>
						<div class="streak-box">
							<div class="inner-box">
								<div class="base"></div>
								<div class="highlight"></div>
							</div>
						</div>
					</div>
					<div class="info-ele">
						<h3>古物商許可</h3>
						<p>愛知県公安委員会　第<span class="num">111122223333</span>号</p>
						<div class="streak-box">
							<div class="inner-box">
								<div class="base"></div>
								<div class="highlight"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="right-box">
					<img class="img lazyload" data-src="{{ asset('/image/top/info/office.webp') }}" alt="事務所">
				</div>
			</div>
		</div>
	</section>






















	<section id="promise">
		<div class="container">
			<div class="sticky-box">
				<div class="content-box">
					<div class="txt-box">
						<div class="sentence-box">
							<p class="txt">テキストテキストテキストテキスト</p>
							<p class="txt">テキストテキストテキスト</p>
							<div class="top-tit-box">
								<h2 data-splitting>3つの約束</h2>
								<div class="streak-box">
									<div class="base"></div>
									<div class="highlight"></div>
								</div>
							</div>
							<div class="logo-box">
								<img class="logo lazyload" data-src="{{ asset('/image/logo.svg') }}" alt="2ND RiDE">
							</div>
						</div>
					</div>
					<div class="fig1-box">
						<img class="img lazyload" data-src="{{ asset('/image/top/promise/promise1.webp') }}" alt="おばあちゃん">
					</div>
					<div class="fig2-box">
						<img class="img lazyload" data-src="{{ asset('/image/top/promise/promise2.webp') }}" alt="高齢者夫婦">
					</div>
					<div class="fig3-box">
						<img class="img lazyload" data-src="{{ asset('/image/top/promise/promise3.webp') }}" alt="30代男性">
					</div>
					<div class="fig4-box">
						<img class="img lazyload" data-src="{{ asset('/image/top/promise/promise4.webp') }}" alt="戸建て住宅">
					</div>
					<div class="fig5-box">
						<img class="img lazyload" data-src="{{ asset('/image/top/promise/promise5.webp') }}" alt="握手">
					</div>
					<div class="fig6-box">
						<img class="img lazyload" data-src="{{ asset('/image/top/promise/promise6.webp') }}" alt="玄関前あいさつ">
					</div>
				</div>
			</div>
		</div>
	</section>
@stop





@section('js')
	<script src="https://cdn.jsdelivr.net/npm/swiper@14/swiper-bundle.min.js"></script><!-- swiper -->
    @vite([
        'resources/js/top.js',
    ])
@stop