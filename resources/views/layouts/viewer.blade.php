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


<!--             <div id="cursor" class="cursor-box">
                <div class="inside">
                    <div class="circle">
                        <img class="gold lazyload" data-src="{{ asset('image/lp/mouse.webp') }}" alt="円">
                    </div>
                </div>
            </div>
            <canvas id="c"></canvas> -->








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
                <!-- <img class="ribbon lazyload" data-src="{{ asset('image/modal/ribbon.webp') }}" alt="リボン"> -->
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
                    <a class="logo-box" href="{{ route('top') }}">
                        <img class="logo lazyload" data-src="{{ asset('/image/logo-white.svg') }}" alt="2ND RiDE">
                    </a>
                    <div class="right-box">
                        <div class="invoice-ele">
                            <p class="tit">適格請求書発行事業者登録番号</p>
                            <p class="detail">T<span class="num">000011112222</span></p>
                        </div>
                        <div class="licenses-ele">
                            <p class="tit">古物商許可：愛知県公安委員会</p>
                            <p class="detail">第<span class="num">111122223333</span>号</p>
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





            <script src="https://cdn.jsdelivr.net/npm/jquery@4/dist/jquery.min.js"></script>
            <script src="https://unpkg.com/lenis@1.3.18/dist/lenis.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/ScrollTrigger.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/ScrollToPlugin.min.js"></script>

            <script>
                $('.ham-box').on('click', function() {
                    var videoElement = $('#modal').find('.video')[0];
                    var $video = $('#modal').find('.video');

                    $('#modal').find('.md-overlay').fadeIn();
                    $('#modal').find('.md-contents').hide();
                    $video.show();

                    if (videoElement) {
                        videoElement.currentTime = 0;
                        videoElement.play();
                    }
                    $video.delay(600).fadeOut();
                    $('#modal').find('.md-contents').delay(1000).fadeIn();
                });

                $('.modal-close').on('click', function() {
                    $('#modal').find('.md-overlay, .md-contents').fadeOut();
                    var videoElement = $('#modal').find('.video')[0];
                    if (videoElement) {
                        videoElement.pause();
                    }
                });
                $(".md-contents").hover(
                    function () {
                        $("#modal").addClass("is-play");
                    },
                    function () {
                        $("#modal").removeClass("is-play");
                    }
                );
            </script>

            <script>
                document.oncontextmenu = function () {return false;}
                $(document).on('keydown', function(e) {
                    // Ctrl + Shift + I (開発者ツールの起動)
                    if ((e.ctrlKey || e.metaKey) && e.shiftKey && e.key === 'I') {
                        e.preventDefault();
                        // console.log('開発者ツールの起動を禁止しました。');
                    }
                    // F12キー (多くのブラウザで開発者ツールの起動)
                    if (e.key === 'F12') {
                        // e.preventDefault();
                        // console.log('F12キーによる開発者ツールの起動を禁止しました。');
                    }
                    // Ctrl + U (Winソースコードの表示)
                    if ((e.ctrlKey || e.metaKey) && e.key === 'u') {
                        e.preventDefault();
                        // console.log('Winソースコードの表示を禁止しました。');
                    }
                    // Command + Option + U (Macソースコードの表示)
                    if (e.metaKey && e.altKey && e.key === 'u') {
                        e.preventDefault();
                        // console.log('Macソースコードの表示を禁止しました。');
                    }
                    // Command + Option + I (Mac開発者ツールの起動)
                    if (e.metaKey && e.altKey && e.key === 'I') {
                        e.preventDefault();
                        // console.log('Mac開発者ツールの起動を禁止しました。');
                    }
                });
            </script>

            @yield('js')
            @vite([
                'resources/js/smooth-scroll.js'
            ])
        </body>
    </div>
</html>
