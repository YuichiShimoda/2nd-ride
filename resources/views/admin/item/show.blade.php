@extends('adminlte::page')

@section('title', '査定品管理｜詳細')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminlte/item.css') }}">
@stop

@section('classes_body', 'page-show')

@section('content_header')
    <div class="tit-box">
        <h1>査定品管理｜詳細</h1>
    </div>
@stop

@section('content')
    <div class="card">
        <a href="{{ route('admin.appraisal.show', $item->appraisal_id) }}" class="card-header text-white">
            <div class="card-title">受付番号：{{ $item->appraisal->ticket_number }}</div>
        </a>
        <div class="card-body">
            <img class="image" src="{{ asset('image/uploader/' . $item->image) }}" alt="">
            <p><strong>査定品名：</strong>{{ $item->title }}</p>
            <p><strong>カテゴリ：</strong>{{ $item->category }}</p>
            <p><strong>状態<span class="parentheses">（ お客様用 ）</span>：</strong>{{ $item->condition_customer }}</p>
            <p><strong>状態<span class="parentheses">（ 事業者用 ）</span>：</strong>{{ $item->condition_seller }}</p>
            <p><strong>ブランド：</strong>{{ $item->brand }}</p>
            <p><strong>メーカー：</strong>{{ $item->maker }}</p>
            @if ($item->price == null)
                <p><strong>査定額：</strong>----<span class="yen">円</span></p>
            @else
                <p><strong>査定額：</strong>{{ number_format($item->price) }}<span class="yen">円</span></p>
            @endif
            @if ($item->is_visible)
                <p><strong>表示：</strong>○</p>
            @else
                <p><strong>表示：</strong>×</p>
            @endif
            <div class="memmo-box bg-light rounded border">
                <strong>詳細情報：</strong>
                {!! nl2br(e($item->memo)) !!}
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.item.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> 一覧へ戻る
            </a>
            <a href="{{ route('admin.item.edit', $item->id) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> 編集
            </a>
        </div>
    </div>
@stop