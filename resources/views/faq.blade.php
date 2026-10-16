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









    <section id="test">
        <p>作成中</p>
    </section>
@stop





@section('js')
    @vite([
        'resources/js/faq.js',
    ])
@stop