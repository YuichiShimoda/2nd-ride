@extends('layouts.viewer')
@section('title', '買取実績｜セカンド・ライド｜2ND RiDE')
@section('description', '')
@section('meta_tags')
    <meta name="robots" content="noindex,nofollow">
@stop

@section('css')
    <link href="{{ asset('/css/mouse.css') }}" rel='stylesheet' type='text/css' media='all'>
    <link href="{{ asset('/css/common.css') }}" rel='stylesheet' type='text/css' media='all'>
    <link href="{{ asset('/css/result.css') }}" rel='stylesheet' type='text/css' media='all'>
@stop



@section('content_loader')
@stop



@section('content_sidebar')
@stop




@section('content')
    <section id="fv">
        <div class="content-box">
            <div class="tit-box">
                <p class="en">PURCHASED</p>
                <p class="en">ITEMS GALLERY</p>
                <h1 class="tit">買取実績</h1>
            </div>
            <div class="desc-box">
                <p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                <p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
            <div class="gallery-box">
                <div class="gallery-ele">
                    <div class="fig-box">
                        <img class="img lazyload" data-src="{{ asset('image/appointment/landscape1.webp') }}" alt="町">
                    </div>
                    <div class="info-box">
                        <h2 class="product">テキストテキストテキストテキスト</h2>
                        <div class="bottom-box">
                            <h3 class="cat">家電</h3>
                            <time class="time">2026.1.31</time>
                        </div>
                    </div>
                </div>
                <div class="gallery-ele">
                    <div class="fig-box">
                        <img class="img lazyload" data-src="{{ asset('image/appointment/landscape1.webp') }}" alt="町">
                    </div>
                    <div class="info-box">
                        <h2 class="product">テキストテキストテキストテキストテキストテキストテキストテキスト</h2>
                        <div class="bottom-box">
                            <h3 class="cat">家電</h3>
                            <time class="time">2026.1.31</time>
                        </div>
                    </div>
                </div>
                <div class="gallery-ele">
                    <div class="fig-box">
                        <img class="img lazyload" data-src="{{ asset('image/appointment/landscape1.webp') }}" alt="町">
                    </div>
                    <div class="info-box">
                        <h2 class="product">テキストテキストテキストテキスト</h2>
                        <div class="bottom-box">
                            <h3 class="cat">家電</h3>
                            <time class="time">2026.1.31</time>
                        </div>
                    </div>
                </div>
                <div class="gallery-ele">
                    <div class="fig-box">
                        <img class="img lazyload" data-src="{{ asset('image/appointment/landscape1.webp') }}" alt="町">
                    </div>
                    <div class="info-box">
                        <h2 class="product">テキストテキストテキストテキスト</h2>
                        <div class="bottom-box">
                            <h3 class="cat">家電</h3>
                            <time class="time">2026.1.31</time>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop





@section('js')
    @vite([
        'resources/js/defense.ts',
        'resources/js/hamburger-menu.ts',
        'resources/js/smooth-scroll.ts',
        'resources/js/mouse.ts',
        'resources/js/result.ts',
    ])
@stop