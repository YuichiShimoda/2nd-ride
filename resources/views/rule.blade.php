@extends('layouts.viewer')
@section('title', '特定商取引法に基づく表記｜セカンド・ライド｜2ND RiDE')
@section('description', '')
@section('meta_tags')
    <meta name="robots" content="noindex,nofollow">
@stop

@section('css')
    <link href="{{ asset('/css/mouse.css') }}" rel='stylesheet' type='text/css' media='all'>
    <link href="{{ asset('/css/common.css') }}" rel='stylesheet' type='text/css' media='all'>
    <link href="{{ asset('/css/rule.css') }}" rel='stylesheet' type='text/css' media='all'>
@stop



@section('content_loader')
@stop



@section('content_sidebar')
@stop




@section('content')
    <section id="title">
        <h1>特定商取引法に基づく表記</h1>
    </section>


    <section id="clause">
        <p class="outline">特定商取引に基づく表記は下記のとおりです。</p>
        <div class="info-box">
            <div class="left-box">
                <div class="outline-ele">
                    <P>事業者</P>
                    <p>株式会社 mono link</p>
                </div>
                <div class="outline-ele">
                    <P>代表者</P>
                    <p>猿丸 敬将</p>
                </div>
                <div class="outline-ele">
                    <P>住所</P>
                    <p>〒452-0932<br>愛知県 清須市 朝日 城屋敷 65</p>
                </div>
                <div class="outline-ele">
                    <P>電話番号</P>
                    <p>0120-979-986</p>
                </div>
                <div class="outline-ele">
                    <P>メールアドレス</P>
                    <p><img class="email" loading="lazy" src="{{ asset('/image/rule/email.svg') }}" alt=""></p>
                </div>
                <div class="outline-ele">
                    <P>クーリングオフについて</P>
                    <p>契約書を受領した日から8日間は、契約解除の意思を書面で発送することにより契約解除可能</p>
                </div>
                <div class="outline-ele">
                    <P>古物商許可</P>
                    <p>愛知県公安委員会：第<span class="num">541042305500</span>号</p>
                </div>
            </div>
        </div>
    </section>
@stop





@section('js')
    @vite([
        'resources/js/rule.js',
    ])
@stop