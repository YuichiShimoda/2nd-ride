@extends('adminlte::page')

@section('title', '株式会社 mono link｜アナリティクス')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminlte/analytics.css') }}">
@stop

@section('content_header')
    <div class="tit-box">
        <h1>株式会社 mono link｜アナリティクス</h1>
    </div>
@stop

@section('content')
    <iframe id=report_box src=https://lookerstudio.google.com/embed/reporting/4ff4ff35-088a-4f42-88b0-8a6deafb3558/page/p_h3abvhwb9c frameborder=0 style=display:block;width:100%;border:0; allowfullscreen></iframe>
@stop