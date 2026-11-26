@extends('layouts.viewer')
@section('title', 'ご予約 完了｜セカンド・ライド｜2ND RiDE')
@section('description', '')
@section('meta_tags')
    <meta name="robots" content="noindex,nofollow">
@stop

@section('css')
    <link href="{{ asset('/css/mouse.css') }}" rel='stylesheet' type='text/css' media='all'>
    <link href="{{ asset('/css/common.css') }}" rel='stylesheet' type='text/css' media='all'>
    <link href="{{ asset('/css/appointment.css') }}" rel='stylesheet' type='text/css' media='all'>
@stop



@section('content_loader')
@stop



@section('content_sidebar')
@stop




@section('content')
    <section id="fv" class="thanks">
        <div class="complete-box">
            <div class="inside-box">
                <p class="en">APPOINTMENT</p>
                <h1 class="tit">ご予約</h1>
                <div class="desc-box">
                    <p>お問い合わせいただき、誠にありがとうございます。</p>
                    <p>ご入力いただいたメールアドレス宛に、<br>自動確認メールを送信いたしましたのでご確認ください。</p>
                </div>
                <a class="top-link" href="{{ route('top') }}">
                    <p>TOPへ戻る</p>
                </a>
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
        'resources/js/appointment.ts',
    ])
@stop