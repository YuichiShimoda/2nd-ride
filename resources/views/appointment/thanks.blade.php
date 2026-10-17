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
    <section id="title">
        <div class="content-box">
            <h1>ご予約 - 完了</h1>
        </div>
        <p class="en">APPOINTMENT</p>
    </section>









    <section id="test">
        <p>ご予約が完了しました</p>

        <p>お問い合わせ・ご予約いただき、誠にありがとうございました。</p>
        <p>ご入力いただいたメールアドレス宛に、自動確認メールを送信いたしましたのでご確認ください。</p>

        <div style="margin-top: 30px;">
            <a href="{{ route('top') }}">トップページへ戻る</a>
        </div>
    </section>
@stop





@section('js')
    @vite([
        'resources/js/appointment.js',
    ])
@stop