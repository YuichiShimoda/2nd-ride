@extends('adminlte::page')

@section('title', '買取猿丸くん｜Google広告')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminlte/analytics.css') }}">
@stop

@section('content_header')
    <div class="tit-box">
        <h1>買取猿丸くん｜Google広告</h1>
    </div>
@stop

@section('content')
    <iframe id=report_box src=https://lookerstudio.google.com/embed/reporting/03fd487f-f61e-43ab-a353-e9c0c48bbe5b/page/p_h3abvhwb9c frameborder=0 style=display:block;width:100%;border:0; allowfullscreen></iframe>
@stop