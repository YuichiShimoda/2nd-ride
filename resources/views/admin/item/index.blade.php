@extends('adminlte::page')

@section('title', '査定品管理')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminlte/item.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminlte/index-option.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection

@section('classes_body', 'page-index')

@section('content_header')
    @if(session('success'))
        <x-adminlte-alert theme="success" title="{{ session('success') }}"></x-adminlte-alert>
    @endif
    <div class="tit-box">
        <h1>査定品管理</h1>
        <a href="{{ route('admin.item.create') }}" class="create-btn" style="display: none;">
            <p>新規作成</p>
        </a>
    </div>
<!--     <div class="desc-box">
        <p></p>
        <p></p>
        <p></p>
    </div> -->
@endsection

@section('content')
    {{-- テーブル表示 --}}
    @if ($item->isEmpty())
        <p class="table-empty-msg">表示するデータがありません。</p>
    @else
        <x-adminlte-datatable id="itemTable" :heads="['ID', '受付番号', 'カテゴリ', '状態　　　事業者用', 'ブランド', 'メーカー', '査定額', '画像', '表示', '操作']" striped hoverable bordered compressed>
            @foreach($item as $item_ele)
                <tr>
                    <td>{{ $item_ele->id }}</td>
                    <td>{{ $item_ele->appraisal->ticket_number }}</td>
                    <td>{{ $item_ele->category }}</td>
                    <td>{{ $item_ele->condition_seller }}</td>
                    <td>{{ $item_ele->brand }}</td>
                    <td>{{ $item_ele->maker }}</td>
                    <td>@if ($item_ele->price == null)----@else{{ number_format($item_ele->price) }}@endif</td>
                    <td><img class="image modal__open-btn" src="{{ asset('image/uploader/' . $item_ele->image) }}" data-id="{{ $item_ele->id }}" alt=""></td>
                    <td>
                        <div class="toggle-box">
                            <label class="toggle-label" for="is_visible">
                                <input type="checkbox" id="is_visible" name="is_visible" value="1" {{ old('is_visible', $item_ele->is_visible) ? 'checked' : '' }}>
                            </label>
                        </div>
                    </td>
                    <td>
                        <a href="{{ route('admin.item.show', $item_ele->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.item.edit', $item_ele->id) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.item.destroy', $item_ele->id) }}" method="POST" class="d-inline">
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
        <div id="individual-modal" class="modal">
            <div class="md-overlay basic-hover"></div>
            <div class="md-contents">
                <div class="md-inner basic-hover">
                    <img class="answer-image" src="" alt="">
                </div>
            </div>
            <button class="modal-close-btn js-close-modal">
                <span>CLOSE</span>
            </button>
        </div>
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
                if ($.fn.DataTable.isDataTable('#itemTable')) {
                    $('#itemTable').DataTable().destroy();
                }
                const table = $('#itemTable').DataTable({
                    "order": [[0, 'desc']],
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
    <script>
        const itemDetails = @json($item->keyBy('id'));
        $(".modal__open-btn").each(function() {
            $(this).on('click', function(e) {
                e.preventDefault();
                const itemId = $(this).data('id');
                const item = itemDetails[itemId];

                if (item) {
                    const imageBasePath = "{{ asset('image/uploader') }}/";
                    $('.answer-image').attr('src', imageBasePath + item.image);
                }
                $("#individual-modal").addClass('is-active');
            });
        });
        $(".modal-close-btn").click (function() {
            $("#individual-modal").removeClass('is-active');
        });
        $(".md-overlay").click (function() {
            $("#individual-modal").removeClass('is-active');
        });
    </script>
@endsection