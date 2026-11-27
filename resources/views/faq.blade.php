@extends('layouts.viewer')
@section('title', 'よくある質問｜セカンド・ライド｜2ND RiDE')
@section('description', '')
@section('meta_tags')
    <meta name="robots" content="noindex,nofollow">
@stop

@section('css')
    <link href="{{ asset('/css/mouse.css') }}" rel='stylesheet' type='text/css' media='all'>
    <link href="{{ asset('/css/common.css') }}" rel='stylesheet' type='text/css' media='all'>
    <link href="{{ asset('/css/faq.css') }}" rel='stylesheet' type='text/css' media='all'>
@stop



@section('content_loader')
@stop



@section('content_sidebar')
@stop




@section('content')
    <section id="title">
        <div class="content-box">
            <h1>よくある質問</h1>
        </div>
        <p class="en">FAQ</p>
    </section>

    <section id="faq">
        <div class="fax-box">
            <div class="faq-ele">
                <div class="each-q accordion-title">
                    <div>
                        <span class="tri">▼</span>
                        <p class="tit">立ち合いなしでの作業は可能ですか？</p>
                    </div>
                </div>
                <div class="each-a accordion-content">
                    <div class="desc-box">
                        <p>可能です。</p>
                        <p>お客様の立ち合いがない場合、<span>写真や動画などで作業確認および報告</span>をおこなうこともできます。</p>
                        <p>なお、立ち合いなしでの作業をご希望の場合、お見積もりの確認に通常よりもお時間をいただく必要があります。</p>
                    </div>
                </div>
            </div>
            <div class="faq-ele">
                <div class="each-q accordion-title">
                    <div>
                        <span class="tri">▼</span>
                        <p class="tit">立ち合いなしでの作業は可能ですか？</p>
                    </div>
                </div>
                <div class="each-a accordion-content">
                    <div class="desc-box">
                        <p>可能です。</p>
                        <p>お客様の立ち合いがない場合、<span>写真や動画などで作業確認および報告</span>をおこなうこともできます。</p>
                        <p>なお、立ち合いなしでの作業をご希望の場合、お見積もりの確認に通常よりもお時間をいただく必要があります。</p>
                    </div>
                </div>
            </div>
            <div class="faq-ele">
                <div class="each-q accordion-title">
                    <div>
                        <span class="tri">▼</span>
                        <p class="tit">立ち合いなしでの作業は可能ですか？</p>
                    </div>
                </div>
                <div class="each-a accordion-content">
                    <div class="desc-box">
                        <p>可能です。</p>
                        <p>お客様の立ち合いがない場合、<span>写真や動画などで作業確認および報告</span>をおこなうこともできます。</p>
                        <p>なお、立ち合いなしでの作業をご希望の場合、お見積もりの確認に通常よりもお時間をいただく必要があります。</p>
                    </div>
                </div>
            </div>
            <div class="faq-ele">
                <div class="each-q accordion-title">
                    <div>
                        <span class="tri">▼</span>
                        <p class="tit">立ち合いなしでの作業は可能ですか？</p>
                    </div>
                </div>
                <div class="each-a accordion-content">
                    <div class="desc-box">
                        <p>可能です。</p>
                        <p>お客様の立ち合いがない場合、<span>写真や動画などで作業確認および報告</span>をおこなうこともできます。</p>
                        <p>なお、立ち合いなしでの作業をご希望の場合、お見積もりの確認に通常よりもお時間をいただく必要があります。</p>
                    </div>
                </div>
            </div>
            <div class="faq-ele">
                <div class="each-q accordion-title">
                    <div>
                        <span class="tri">▼</span>
                        <p class="tit">立ち合いなしでの作業は可能ですか？</p>
                    </div>
                </div>
                <div class="each-a accordion-content">
                    <div class="desc-box">
                        <p>可能です。</p>
                        <p>お客様の立ち合いがない場合、<span>写真や動画などで作業確認および報告</span>をおこなうこともできます。</p>
                        <p>なお、立ち合いなしでの作業をご希望の場合、お見積もりの確認に通常よりもお時間をいただく必要があります。</p>
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
        'resources/js/faq.ts',
    ])
@stop