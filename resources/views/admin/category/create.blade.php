@extends('adminlte::page')

@section('title', 'カテゴリ管理｜新規作成')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminlte/category.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" />
@stop

@section('classes_body', 'page-create')

@section('content_header')
    <div class="tit-box">
        <h1>カテゴリ管理<span>｜</span>新規作成</h1>
        <a href="{{ route('admin.category.index') }}" class="back-btn">
            <p>一覧に戻る</p>
        </a>
    </div>
@stop

@section('content')
    <form action="{{ route('admin.category.store') }}" method="POST">
        @csrf

        {{-- カテゴリ --}}
        <div class="d-block">
            <x-adminlte-input name="name" label="カテゴリ" placeholder="家具" value="{{ old('name') }}"/>
        </div>

        {{-- フリガナ --}}
        <div class="d-block">
            <x-adminlte-input name="furigana" label="フリガナ" placeholder="カグ" value="{{ old('furigana') }}"/>
            <div class="form-note-box">
                <p>※ 全角カナまたは"・"で入力してください。</p>
            </div>
        </div>

        {{-- 順番 --}}
        <input type="hidden" name="order"value="{{ $order }}"/>

        {{-- 登録ボタン --}}
        <x-adminlte-button label="登録する" class="register-btn" type="submit"/>
    </form>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/locale/ja.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js"></script>
    <script>
        moment.locale('ja');
    </script>
@endsection