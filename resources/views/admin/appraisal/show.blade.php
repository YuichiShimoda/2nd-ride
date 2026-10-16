@extends('adminlte::page')

@section('title', '査定依頼管理：閲覧')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminlte/appraisal.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
@stop

@section('classes_body', 'page-show')

@section('content_header')
    <div class="tit-box">
        <h1>査定依頼管理：閲覧</h1>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-header text-white">
            <h3 class="card-title">管理番号：{{ $appraisal->ticket_number }}</h3>
            <h3 class="card-sub-title">依頼日時：
                {{ \Carbon\Carbon::parse($appraisal->created_at)->format('Y年 n月 j日') }}
                ( {{ \Carbon\Carbon::parse($appraisal->created_at)->locale('ja')->isoFormat('dd') }} )
                {{ \Carbon\Carbon::parse($appraisal->created_at)->format('H:i') }}
            </h3>
        </div>
        <div class="card-body">
<!--             <div class="speech-bubble" style="display: none;">
                <p>この度は、買取猿丸くんのオンライン査定にお申し込みいただき、誠にありがとうございます。</p>
                <p>査定をご希望の商品を撮影のうえ、以下のURLより画像のアップロードをお願いいたします。</p><br>
                <p>受付番号：{{ $appraisal->ticket_number }}</p>
                <p>アップロード用URL：https://saru-kun.com/online?id={{ $appraisal->ticket_number }}</p>
                <p>本URLの有効期限：{{ \Carbon\Carbon::parse($appraisal->deadline)->format('Y年 n月 j日') }}まで</p><br>
                <p>本URLはお客様専用のものです。</p>
                <p>個人情報を保護するため、第三者への共有や転送は絶対にお控えください。</p>
                <p>お客様ご自身の責任で厳重に管理いただきますよう、お願い申し上げます。</p>
                <button onclick="copyText()"></button>
                <div id="snackbar">
                    <p>コピー完了！</p>
                </div>
            </div> -->
            <p><strong>対応状況：</strong>{{ $appraisal->status }}</p>
            <p><strong>初回対応日時：</strong>{{ $appraisal->first_contact_at ? $appraisal->first_contact_at : '----' }}<span class="regulation">※ 原則、依頼日時から24時間以内</span></p>
            <p><strong>対応者：</strong>{{ $appraisal->staff }}</p>
            <p><strong>エリア：</strong>{{ $appraisal->area }}</p>
            <p><strong>名字：</strong>{{ $appraisal->family_name }}</p>
            <p><strong>電話番号：</strong>
                <a href="tel:{{ $appraisal->tel1 }}{{ $appraisal->tel2 }}{{ $appraisal->tel3 }}" class="tel-link">{{ $appraisal->tel1 }}-{{ $appraisal->tel2 }}-{{ $appraisal->tel3 }}</a>
            </p>
            <p><strong>アンケート：</strong>{{ $appraisal->experienced }}</p>
            <div class="memmo-box bg-light rounded border">
                <strong>希望・要望：</strong>
                {!! nl2br(e($appraisal->hope_request)) !!}
            </div>
            <p class="mt-4"><strong>画像枚数：</strong>{{ $items->count() }}枚</p>
            <div class="gallery-box">
                <div class="thum-box">
                    @foreach($items as $item)
                        <div class="img-ele">
                            <img loading="lazy" src="{{ asset('image/uploader/' . $item->image) }}">
                        </div>
                    @endforeach
                </div>
<!--                 <button class="gallery-all-btn">
                    <img loading="lazy" src="{{ asset('image/adminlte/appraisal/check-icon.svg') }}">
                    <p>拡大表示</p>
                </button> -->
            </div>
            <div class="memmo-box bg-light rounded border mt-4">
                <strong>SMSのログ：</strong>
                {!! nl2br(e($appraisal->sms_log ?: '-------------')) !!}
            </div>
            <div class="memmo-box bg-light rounded border mt-4">
                <strong>対応者のコメント：</strong>
                {!! nl2br(e($appraisal->comment ?: '-------------')) !!}
            </div>

        </div>
        <div class="card-footer">
            <a href="{{ route('admin.appraisal.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> 一覧へ戻る
            </a>
            <a href="{{ route('admin.appraisal.edit', $appraisal->id) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> 編集
            </a>
        </div>
    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!--     <script>
        function copyText() {
            const ticketNumber = "{{ $appraisal->ticket_number }}";
            const url = "https://saru-kun.com/online?id=" + ticketNumber;
            const deadline = "{{ \Carbon\Carbon::parse($appraisal->deadline)->format('Y年 n月 j日') }}";

            const text = `この度は、買取猿丸くんのオンライン査定にお申し込みいただき、誠にありがとうございます。
査定をご希望の商品を撮影のうえ、以下のURLより画像のアップロードをお願いいたします。

受付番号：${ticketNumber}
アップロード用URL：${url}
本URLの有効期限：${deadline}まで

本URLはお客様専用のものです。
個人情報を保護するため、第三者への共有や転送は絶対にお控えください。
お客様ご自身の責任で厳重に管理いただきますよう、お願い申し上げます。`;
            navigator.clipboard.writeText(text);
            const snackbar = document.getElementById("snackbar");
            snackbar.className = "show";
            setTimeout(function () {
                snackbar.className = snackbar.className.replace("show", "");
            }, 3000);
        }
    </script> -->
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