@extends('adminlte::page')

@section('title', '査定品管理｜編集')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminlte/item.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" />
@stop

@section('classes_body', 'page-edit')

@section('content_header')
    <div class="tit-box">
        <h1>査定品管理｜編集</h1>
        <a href="{{ route('admin.item.index') }}" class="back-btn">
            <p>一覧に戻る</p>
        </a>
    </div>
@stop

@section('content')
    <form action="{{ route('admin.item.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" name="appraisal_id" value="{{ old('appraisal_id', $item->appraisal_id) }}">
        @error('appraisal_id')
            <span class="d-block alert alert-danger" role="alert" style="position: initial;">
                <strong>受付番号が指定されていないため、登録できません。</strong>
            </span>
        @enderror

        {{-- 査定品名 --}}
        <div class="d-block">
            <x-adminlte-input name="title" label="査定品名" placeholder="査定品名" value="{{ old('title', $item->title) }}"/>
            <div class="form-note-box">
                <p>※ 30文字以内で入力してください。</p>
            </div>
        </div>

        {{-- 画像 --}}
        <div id="image" class="d-block">
            <div class="form-group">
                <label>画像</label>
                <div class="form-note-box">
                    <p>※ 画像の変更はおこなえません。</p>
                </div>
                <div class="file-upload-box edit-page">
                    <label class="file-upload-label">
                        <img class="preview-image" src="{{ asset('image/uploader/' . $item->image) }}">
                    </label>
                </div>
            </div>
            @error('image')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
        <script>
            const { createApp, ref } = Vue;
            createApp({
                setup() {
                    const imagePreview = ref(null);
                    const errorMessage = ref('');
                    const allowedExtensions = ['jpeg', 'jpg', 'png', 'gif', 'webp'];

                    const previewImage = (event) => {
                        const file = event.target.files[0];
                        console.log(file);
                        if (!file) {
                            resetFileInput();
                            return;
                        }
                        const extension = file.name.split('.').pop().toLowerCase();
                        if (!allowedExtensions.includes(extension)) {
                            imagePreview.value = null;
                            errorMessage.value = '対応している画像形式は「 jpeg / jpg / png / gif / webp 」のいずれかです。';
                            resetFileInput();
                            return;
                        }
                        errorMessage.value = '';

                        const reader = new FileReader();
                        reader.onload = e => {
                            imagePreview.value = e.target.result;
                            errorMessage.value = '';
                        };
                        reader.readAsDataURL(file);
                    };

                    const resetPreview = () => {
                        imagePreview.value = null;
                        errorMessage.value = '';
                        resetFileInput();
                    };
                    const resetFileInput = () => {
                        const fileInput = document.querySelector('input[name="image"]');
                        if (fileInput) {
                            fileInput.value = '';
                        }
                    };

                    return {
                        imagePreview,
                        errorMessage,
                        previewImage,
                        resetPreview
                    };
                }
            }).mount('#image');
        </script>

        {{-- カテゴリ --}}
        <div class="d-block">
            <div class="form-group">
                <label>カテゴリ</label>
                <div class="radio-box">
                    @foreach($category as $category_ele)
                        <div class="radio-ele">
                            <input type="radio" id="category_{{ $category_ele->id }}" name="category" value="{{ $category_ele->name }}" {{ old('category', $item->category) == $category_ele->name ? 'checked' : '' }}>
                            <label for="category_{{ $category_ele->id }}">
                                {{ $category_ele->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        @php
            $conditions = [
                '新品',
                '未使用に近い',
                '目立った傷や汚れなし',
                'やや傷や汚れあり',
                '傷や汚れあり',
                '全体的に状態が悪い',
            ];
        @endphp

        {{-- 状態（ お客様用 ） --}}
        <div class="d-block">
            <div class="form-group">
                <label>状態<span class="parentheses">（ お客様用 ）</span></label>
                <div class="radio-box">
                    @foreach($conditions as $condition)
                        <div class="radio-ele">
                            <input type="radio" id="condition_customer_{{ $loop->iteration }}" name="condition_customer" value="{{ $condition }}" {{ old('condition_customer', $item->condition_customer) == $condition ? 'checked' : '' }}>
                            <label for="condition_customer_{{ $loop->iteration }}">
                                {{ $condition }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- 状態（ 事業者用 ） --}}
        <div class="d-block">
            <div class="form-group">
                <label>状態<span class="parentheses">（ 事業者用 ）</span></label>
                <div class="radio-box">
                    @foreach($conditions as $condition)
                        <div class="radio-ele">
                            <input type="radio" id="condition_seller_{{ $loop->iteration }}" name="condition_seller" value="{{ $condition }}" {{ old('condition_seller', $item->condition_seller) == $condition ? 'checked' : '' }}>
                            <label for="condition_seller_{{ $loop->iteration }}">
                                {{ $condition }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- ブランド --}}
        <div class="d-block">
            <div class="form-group">
                <label>ブランド</label>
                <div class="input-group">
                    <div id="brand" class="autocomplete-box" data-initial-brand="{{ old('brand', $item->brand) }}"></div>
                </div>
            </div>
            <div class="form-note-box">
                <p>※ 入力中に候補が自動表示されます。</p>
            </div>
        </div>

        {{-- メーカー --}}
        <div class="d-block">
            <div class="form-group">
                <label>メーカー</label>
                <div class="input-group">
                    <div id="maker" class="autocomplete-box" data-initial-maker="{{ old('maker', $item->maker) }}"></div>
                </div>
            </div>
            <div class="form-note-box">
                <p>※ 入力中に候補が自動表示されます。</p>
            </div>
        </div>

        {{-- 査定額 --}}
        <div class="d-block price-box">
            <x-adminlte-input type="number" name="price" label="査定額" placeholder="100" value="{{ old('price', $item->price) }}" min="0"/>
            <p class="yen">円</p>
        </div>

        {{-- 表示 / 非表示 --}}
        <div class="d-block">
            <div class="form-group">
                <label>表示</label>
                <div class="toggle-box">
                    <label class="toggle-label" for="is_visible">
                        <input type="checkbox" id="is_visible" name="is_visible" value="1" {{ old('is_visible', $item->is_visible) ? 'checked' : '' }}>
                    </label>
                </div>
            </div>
            @error('is_visible')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- 詳細情報 --}}
        <div class="d-block">
            <x-adminlte-textarea name="memo" label="詳細情報" placeholder="査定品の詳細を入力してください。" rows="7">{{ old('memo', $item->memo) }}</x-adminlte-textarea>
        </div>

        {{-- 更新ボタン --}}
        <x-adminlte-button label="更新する" class="register-btn" type="submit"/>
    </form>
@stop

@section('js')
    @vite('resources/js/admin/item.js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/locale/ja.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js"></script>
    <script>
        moment.locale('ja');
    </script>
@endsection