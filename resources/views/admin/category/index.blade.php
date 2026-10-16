@extends('adminlte::page')

@section('title', 'カテゴリ管理')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminlte/category.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminlte/index-option.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection

@section('classes_body', 'page-index')

@section('content_header')
    @if(session('success'))
        <x-adminlte-alert theme="success" title="{{ session('success') }}"></x-adminlte-alert>
    @endif
    <div class="tit-box">
        <h1>カテゴリ管理</h1>
        <a href="{{ route('admin.category.create') }}" class="create-btn">
            <p>新規作成</p>
        </a>
    </div>
<!--     <div class="desc-box">
        <p></p>
        <p></p>
    </div> -->
@endsection

@section('content')
    {{-- テーブル表示 --}}
    @if ($category->isEmpty())
        <p class="table-empty-msg">表示するデータがありません。</p>
    @else
        <!-- <div id="sort"></div> -->
        <x-adminlte-datatable id="categoryTable" :heads="['ID', 'カテゴリ名', 'フリガナ', '操作']" striped hoverable bordered compressed>
            @foreach($category as $category_ele)
                <tr>
                    <td>{{ $category_ele->order }}</td>
                    <td>{{ $category_ele->name }}</td>
                    <td>{{ $category_ele->furigana }}</td>
                    <td>
                        <a href="{{ route('admin.category.show', $category_ele->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.category.edit', $category_ele->id) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.category.destroy', $category_ele->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-xs btn-danger delete-btn" type="submit">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    @endif
@endsection

@section('js')
    @vite('resources/js/admin/category.js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- 削除確認用スクリプト --}}
    <script>
        $(window).on('load', function () {
            setTimeout(function() {
                if ($.fn.DataTable.isDataTable('#categoryTable')) {
                    $('#categoryTable').DataTable().destroy();
                }
                $('#categoryTable').DataTable({
                    "order": [[0, 'asc']],
                    language: {
                        url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/ja.json'
                    },
                    lengthMenu: [[30, 20, 10], [30, 20, 10]]
                });
            }, 100);
            $('.delete-btn').on('click', function (e) {
                e.preventDefault();
                const $form = $(this).closest('form');
                Swal.fire({
                    title: '削除してよろしいでしょうか？',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#007bff',
                    cancelButtonColor: '#999',
                    confirmButtonText: 'OK',
                    cancelButtonText: 'キャンセル',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $form.submit();
                    }
                });
            });
        });
    </script>
@endsection


