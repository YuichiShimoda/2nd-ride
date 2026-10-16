@extends('adminlte::page')

@section('title', 'カテゴリ管理｜編集')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminlte/category.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" />
@stop

@section('classes_body', 'page-edit')

@section('content_header')
    <div class="tit-box">
        <h1>カテゴリ管理｜編集</h1>
        <a href="{{ route('admin.category.index') }}" class="back-btn">
            <p>一覧に戻る</p>
        </a>
    </div>
@stop

@section('content')
    <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- カテゴリ --}}
        <div class="d-block">
            <x-adminlte-input name="name" label="カテゴリ" placeholder="家具" value="{{ old('name', $category->name) }}"/>
        </div>

        {{-- フリガナ --}}
        <div class="d-block">
            <x-adminlte-input name="furigana" label="フリガナ" placeholder="カグ" value="{{ old('furigana', $category->furigana) }}"/>
            <div class="form-note-box">
                <p>※ 全角カナまたは"・"で入力してください。</p>
            </div>
        </div>

        {{-- 順番 --}}
        <input type="hidden" name="order"value="{{ $category->order }}"/>

        {{-- 更新ボタン --}}
        <x-adminlte-button label="更新する" class="register-btn" type="submit"/>
    </form>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection