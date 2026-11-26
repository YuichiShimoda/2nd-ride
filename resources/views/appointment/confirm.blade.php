@extends('layouts.viewer')
@section('title', 'ご予約 確認｜セカンド・ライド｜2ND RiDE')
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
    <section id="fv" class="confirm">
        <div class="content-box">
            <div class="left-box">
                <p class="en">APPOINTMENT</p>
                <h1 class="tit">ご予約</h1>
                <div class="desc-box">
                    <p>入力内容をご確認の上「 送信する 」ボタンを押してください。</p>
                    <p>送信が完了しましたら、ご入力いただいたメールアドレス宛に自動確認メールを送信いたします。</p>
                </div>
            </div>
            <form class="form-confirm-box" action="{{ route('appointment.thanks') }}" method="POST">
                @csrf
                <div class="check-inner">
                    <div class="ele-box">
                        <p class="list">ご予約の理由</p>
                        <p class="detail">{{ implode('、', $validated['request']) }}</p>
                    </div>
                    <div class="ele-box">
                        <p class="list">買取品カテゴリ</p>
                        <p class="detail">{{ implode('、', $validated['category']) }}</p>
                    </div>
                    <div class="ele-box">
                        <p class="list">出張買取の希望エリア</p>
                        <p class="detail">{{ $validated['pref'] }} {{ $validated['area'] }}</p>
                    </div>
                    <div class="ele-box">
                        <p class="list">第1希望日</p>
                        <p class="detail">{{ $validated['first_day'] }}</p>
                    </div>
                    <div class="ele-box">
                        <p class="list">第2希望日</p>
                        <p class="detail">{{ $validated['second_day'] }}</p>
                    </div>
                    <div class="ele-box">
                        <p class="list">第3希望日</p>
                        <p class="detail">{{ $validated['third_day'] }}</p>
                    </div>
                    <div class="ele-box">
                        <p class="list">お名前</p>
                        <p class="detail">{{ $validated['last_name'] }}（ {{ $validated['last_name_kana'] }} ）</p>
                    </div>
                    <div class="ele-box">
                        <p class="list">電話番号</p>
                        <p class="detail">{{ $validated['tel1'] }}-{{ $validated['tel2'] }}-{{ $validated['tel3'] }}</p>
                    </div>
                    <div class="ele-box">
                        <p class="list">ご要望</p>
                        <p class="detail textarea">{!! nl2br(e($validated['body'])) !!}</p>
                    </div>
                    <div class="consent-box">
                        <input type="checkbox" name="consent" value="1">
                        <div class="text-box">
                            <a class="policy" href="{{ route('policy') }}" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a>
                            <p class="text">に同意</p>
                        </div>
                    </div>
                    @error('consent')
                        <p class="consent-error">{{ $message }}</p>
                    @enderror
                    <div class="btn-box">
                        <button class="prev" type="submit" name="back" value="true">修正する</button>
                        <button class="next" type="submit">送信する</button>
                    </div>
                </div>
            </form>
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