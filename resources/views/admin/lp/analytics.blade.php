@extends('adminlte::page')

@section('title', '買取猿丸くんLP｜アナリティクス')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminlte/analytics.css') }}">
@stop

@section('content_header')
    <div class="tit-box">
        <h1>買取猿丸くんLP｜アナリティクス</h1>
    </div>
@stop

@section('content')
    <iframe id=report_box src=https://lookerstudio.google.com/embed/reporting/ce4151d8-d9a8-4797-9b9f-6a518d57888a/page/p_h3abvhwb9c frameborder=0 style=display:block;width:100%;border:0; allowfullscreen></iframe>
@stop