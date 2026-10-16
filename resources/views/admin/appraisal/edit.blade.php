@extends('adminlte::page')

@section('meta_tags')
    <meta name="format-detection" content="telephone=no">
@endsection

@section('title', '査定依頼管理｜編集')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminlte/appraisal.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
@stop

@section('classes_body', 'page-edit')

@section('content_header')
    <div class="tit-box">
        <h1>査定依頼管理：編集</h1>
        <a href="{{ route('admin.appraisal.index') }}" class="back-btn">
            <p>一覧に戻る</p>
        </a>
    </div>
@stop

@section('content')
    <form action="{{ route('admin.appraisal.update', $appraisal->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="main-box">
            <p class="tit">管理番号</p>
            <p class="appraisal-numb">{{ $appraisal->ticket_number }}</p>
            <div class="deadline-box">
                <p>依頼日時：</p>
                <p>
                    {{ \Carbon\Carbon::parse($appraisal->created_at)->format('Y年 n月 j日') }}
                    ( {{ \Carbon\Carbon::parse($appraisal->created_at)->locale('ja')->isoFormat('dd') }} )
                    {{ \Carbon\Carbon::parse($appraisal->created_at)->format('H:i') }}
                </p>
            </div>
        </div>
        <input type="hidden" name="ticket_number" value="{{ $appraisal->ticket_number }}">
        @error('ticket_number')
            <span class="invalid-feedback d-block mt-2" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        @php
            $status = [
                'SMSでお断り',
                'SMSで訪問調整中',
                'SMSで訪問確定',
                '電話でお断り',
                '電話で訪問調整中',
                '電話で訪問確定',
                '対応保留中',
                '折り返し連絡待ち',
            ];
        @endphp

        {{-- 対応状況 --}}
        <div class="d-block">
            <div class="form-group">
                <label class="required">対応状況</label>
                <div class="radio-box">
                    @foreach($status as $status_ele)
                        <div class="radio-ele">
                            <input type="radio" id="status_{{ $loop->iteration }}" name="status" value="{{ $status_ele }}" {{ old('status', $appraisal->status) == $status_ele ? 'checked' : '' }}>
                            <label for="status_{{ $loop->iteration }}">
                                {{ $status_ele }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            @error('status')
                <span class="invalid-feedback d-block mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- 初回対応日時 --}}
        @if (empty($appraisal->first_contact_at))
            <div class="d-block">
                <x-adminlte-input name="first_contact_at" label="初回対応日時" placeholder="2025-01-01 12:00" value="{{ old('first_contact_at', now()->format('Y-m-d H:i')) }}"/>
                <span class="regulation">※ 原則、依頼日時から24時間以内</span>
            </div>
        @else
            <div class="d-show mt-2">
                <strong>初回対応日時：</strong>
                <p>{{ $appraisal->first_contact_at }}</p>
            </div>
            <input type="hidden" name="first_contact_at" value="{{ $appraisal->first_contact_at }}"/>
        @endif
<!--         <div class="d-block">
            <x-adminlte-input name="first_contact_at" label="初回対応日時" placeholder="2025-01-01 12:00" value="{{ old('first_contact_at', $appraisal->first_contact_at) }}"/>
            <span class="regulation">※ 原則、依頼日時から24時間以内</span>
        </div> -->

        {{-- 対応者 --}}
        @php
            $staffs = [
                '猿丸',
                '柴原',
                '鈴木',
            ];
        @endphp
        <div class="d-block">
            <div class="form-group">
                <label>対応者</label>
                <div class="radio-box">
                    @foreach($staffs as $staff)
                        <div class="radio-ele">
                            <input type="radio" id="staff_{{ $loop->iteration }}" name="staff" value="{{ $staff }}" {{ old('staff', $appraisal->staff) == $staff ? 'checked' : '' }}>
                            <label for="staff_{{ $loop->iteration }}">
                                {{ $staff }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            @error('staff')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- エリア --}}
        <div class="d-show mt-4">
            <strong>エリア：</strong>
            <p>{{ $appraisal->area }}</p>
        </div>

        {{-- 名字 --}}
        <div class="d-show">
            <strong>名字：</strong>
            <p>{{ $appraisal->family_name }}</p>
        </div>

        {{-- 電話番号 --}}
        <div class="d-show">
            <strong>電話番号：</strong>
            <p>{{ $appraisal->tel1 }}-{{ $appraisal->tel2 }}-{{ $appraisal->tel3 }}</p>
        </div>

        {{-- アンケート --}}
        <div class="d-show">
            <strong>アンケート：</strong>
            <p>{{ $appraisal->experienced }}</p>
        </div>

        {{-- 希望・要望 --}}
        <div class="d-full-show">
            <strong>希望・要望：</strong>
            <p>{{ $appraisal->hope_request }}</p>
        </div>

        {{-- 画像枚数 --}}
        <div class="d-show">
            <strong>画像枚数：</strong>
            <p>{{ $items->count() }}枚</p>
        </div>
        <div class="gallery-box">
            <div class="thum-box">
                @foreach($items as $item)
                    <div class="img-ele modal__open-btn" data-id="{{ $item->id }}">
                        <img loading="lazy" src="{{ asset('image/uploader/' . $item->image) }}">
                    </div>
                @endforeach
            </div>
        </div>

        {{-- SMSのログ --}}
        <div class="d-block">
            <x-adminlte-textarea name="sms_log" label="SMSのログ" placeholder="" rows="7">{{ old('sms_log', $appraisal->sms_log) }}</x-adminlte-textarea>
        </div>

        {{-- 対応者のコメント --}}
        <div class="d-block">
            <x-adminlte-textarea name="comment" label="対応者のコメント" placeholder="" rows="7">{{ old('comment', $appraisal->comment) }}</x-adminlte-textarea>
        </div>

        {{-- 更新ボタン --}}
        <x-adminlte-button label="更新する" class="register-btn" type="submit"/>
    </form>





    <div id="all-modal" class="modal">
        <div class="modal__overlay js-close-modal">
            <button class="modal__close-btn js-close-modal">
                <span>CLOSE</span>
            </button>
        </div>
        <div class="modal__content">
            <div class="swiper modal__slider js-modal-swiper">
                <div class="swiper-wrapper">
                    @foreach($items as $item)
                        <div class="swiper-slide">
                            <div class="swiper-zoom-container">
                                <img loading="lazy" src="{{ asset('image/uploader/' . $item->image) }}">
                            </div>
                        </div>
                    @endforeach
                </div>
                @if($items->count() > 1)
                    <div class="slideshow-navigation">
                        <div class="modal_btn before_prev">
                            <img loading="lazy" src="{{ asset('image/adminlte/appraisal/modal_left_arrow.svg') }}">
                        </div>
                        <div class="modal_btn before_next">
                            <img loading="lazy" src="{{ asset('image/adminlte/appraisal/modal_right_arrow.svg') }}">
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/locale/ja.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js"></script>
    <script>
        moment.locale('ja');
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        let galleryModalBefore = null;

        $(".img-ele").click (function() {
            let all_options = {};
            if ( $("#all-modal .swiper .swiper-slide").length == 1 ) {
                all_options = {
                    loop: false
                }
            } else {
                const swiper_index = $(this).index(".img-ele");
                all_options = {
                    initialSlide: swiper_index,
                    loop: true,
                    speed: 600,
                    centeredSlides: true,
                    slidesPerView: 1.0,
                    spaceBetween: 0,
                    zoom: {
                        minRatio: 1,
                        maxRatio: 5,
                    },
                    navigation: {
                        prevEl: ".before_prev",
                        nextEl: ".before_next",
                    },
                }
            }

            if (galleryModalBefore) {
                galleryModalBefore.destroy(true, true);
            }
            galleryModalBefore = new Swiper("#all-modal .swiper", all_options);
            $("#all-modal").addClass('is-active');
        });

        $(".modal__close-btn").click (function() {
            $("#all-modal").removeClass('is-active');
        });
        $(".modal__overlay").click (function() {
            $("#all-modal").removeClass('is-active');
        });
    </script>
@endsection