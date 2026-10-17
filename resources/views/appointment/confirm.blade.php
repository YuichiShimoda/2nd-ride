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
    <section id="title">
        <div class="content-box">
            <h1>ご予約 - 確認</h1>
        </div>
        <p class="en">APPOINTMENT</p>
    </section>









    <section id="test">
        <p>入力内容をご確認の上、「送信する」ボタンを押してください。</p>
        <form action="{{ route('appointment.thanks') }}" method="POST">
            @csrf
            <table border="1" cellpadding="10" style="border-collapse: collapse;">
                <tr>
                    <th>お名前</th>
                    <td>{{ $validated['name'] }}</td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>{{ $validated['email'] }}</td>
                </tr>
                <tr>
                    <th>ご予約希望日時</th>
                    <td>{{ \Carbon\Carbon::parse($validated['reserve_at'])->format('Y年m月d日 H時i分') }}</td>
                </tr>
            </table>

            <div style="margin-top: 20px;">
                <!-- 修正ボタン（Controllerで 'back' の有無を判定します） -->
                <button type="submit" name="back" value="true">修正する</button>
                <!-- 送信ボタン -->
                <button type="submit">送信する</button>
            </div>
        </form>
    </section>
@stop





@section('js')
    @vite([
        'resources/js/appointment.js',
    ])
@stop