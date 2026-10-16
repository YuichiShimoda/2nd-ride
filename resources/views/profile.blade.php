@extends('layouts.viewer')
@section('title', 'プロフィール｜セカンド・ライド｜2ND RiDE')
@section('description', '')
@section('meta_tags')
    <meta name="robots" content="noindex,nofollow">
@stop

@section('css')
    <link href="{{ asset('/css/mouse.css') }}" rel='stylesheet' type='text/css' media='all'>
    <link href="{{ asset('/css/common.css') }}" rel='stylesheet' type='text/css' media='all'>
    <link href="{{ asset('/css/profile.css') }}" rel='stylesheet' type='text/css' media='all'>
@stop



@section('content_loader')
@stop



@section('content_sidebar')
@stop




@section('content')
    <section id="title">
        <div class="content-box">
            <h1>プロフィール</h1>
        </div>
        <p class="en">PROFILE</p>
    </section>









    <section id="test">
        <p>作成中</p>
    </section>
@stop





@section('js')
    @vite([
        'resources/js/profile.js',
    ])
@stop