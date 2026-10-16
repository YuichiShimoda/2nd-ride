@extends('adminlte::page')

@section('meta_tags')
    <meta name="format-detection" content="telephone=no">
@endsection

@section('title', '査定依頼管理：一覧')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminlte/appraisal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminlte/index-option.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection

@section('classes_body', 'page-index')

@section('content_header')
    @if(session('success'))
        <x-adminlte-alert theme="success" title="{{ session('success') }}"></x-adminlte-alert>
    @endif
    <div class="tit-box">
        <h1>査定依頼管理：一覧</h1>
        <a href="{{ route('admin.appraisal.create') }}" class="create-btn" style="display: none;">
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
    @if ($appraisal->isEmpty())
        <p class="table-empty-msg">表示するデータがありません。</p>
    @else
        <x-adminlte-datatable id="appraisalTable" :heads="['対応状況', '画像枚数', '依頼日時', 'エリア', '名字', '電話番号', '管理番号', '対応者', '操作']" striped hoverable bordered compressed>
            @foreach($appraisal as $appraisal_ele)
                <tr>
                    <td class="{{ $appraisal_ele->status === '新規査定依頼' ? 'new' : '' }}">{{ $appraisal_ele->status }}</td>
                    <td>{{ $appraisal_ele->items->count() }}</td>
                    <td data-order="{{ \Carbon\Carbon::parse($appraisal_ele->created_at)->format('Y-m-d H:i:s') }}">
                        {{ \Carbon\Carbon::parse($appraisal_ele->created_at)->format('Y年 n月 j日') }}
                        ( {{ \Carbon\Carbon::parse($appraisal_ele->created_at)->locale('ja')->isoFormat('dd') }} )
                        {{ \Carbon\Carbon::parse($appraisal_ele->created_at)->format('H:i') }}
                    </td>
                    <td>{{ $appraisal_ele->area }}</td>
                    <td>{{ $appraisal_ele->family_name }}</td>
                    <td>{{ $appraisal_ele->tel1 }}-{{ $appraisal_ele->tel2 }}-{{ $appraisal_ele->tel3 }}</td>
                    <td>{{ $appraisal_ele->ticket_number }}</td>
                    <td>{{ $appraisal_ele->staff }}</td>
                    <td>
                        <a href="{{ route('admin.appraisal.show', $appraisal_ele->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.appraisal.edit', $appraisal_ele->id) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.appraisal.destroy', $appraisal_ele->id) }}" method="POST" class="d-inline">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- 削除確認用スクリプト --}}
    <script>
        $(window).on('load', function () {
            setTimeout(function() {
                if ($.fn.DataTable.isDataTable('#appraisalTable')) {
                    $('#appraisalTable').DataTable().destroy();
                }
                $('#appraisalTable').DataTable({
                    "order": [[2, 'desc']],
                    language: {
                        url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/ja.json'
                    },
                    lengthMenu: [[10, 30, 50], [10, 30, 50]]
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