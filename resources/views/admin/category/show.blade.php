@extends('adminlte::page')

@section('title', 'カテゴリ管理｜詳細')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminlte/category.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
@stop

@section('classes_body', 'page-show')

@section('content_header')
    <div class="tit-box">
        <h1>カテゴリ管理｜詳細</h1>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p><strong>カテゴリ名：</strong>{{ $category->name }}</p>
            <p><strong>フリガナ：</strong>{{ $category->furigana }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.category.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> 一覧へ戻る
            </a>
            <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> 編集
            </a>
        </div>
    </div>
@stop







@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection