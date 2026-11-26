@extends('layouts.viewer')
@section('title', 'ご質問・ご相談 確認｜セカンド・ライド｜2ND RiDE')
@section('description', '')
@section('meta_tags')
	<meta name="robots" content="noindex,nofollow">
@stop

@section('css')
	<link href="{{ asset('/css/mouse.css') }}" rel='stylesheet' type='text/css' media='all'>
	<link href="{{ asset('/css/common.css') }}" rel='stylesheet' type='text/css' media='all'>
	<link href="{{ asset('/css/inquiry.css') }}" rel='stylesheet' type='text/css' media='all'>
@stop



@section('content_loader')
@stop



@section('content_sidebar')
@stop




@section('content')
	<section id="fv">
		<div class="content-box">
			<div class="left-box">
				<p class="en">INQUIRY</p>
				<h1 class="tit">ご質問・ご相談</h1>
				<div class="desc-box">
					<p>入力内容をご確認の上「 送信する 」ボタンを押してください。</p>
					<p>送信が完了しましたら、ご入力いただいたメールアドレス宛に自動確認メールを送信いたします。</p>
				</div>
			</div>
			<form class="form-confirm-box" action="{{ route('inquiry.thanks') }}" method="POST">
				@csrf
				<div class="check-inner">
					<div class="ele-box">
						<p class="list">お問い合わせ種別</p>
						<p class="detail">{{ $validated['inquiry_type'] }}</p>
					</div>
					@if(in_array($validated['inquiry_type'] ?? '', ['業務委託について', '業務提携・協業について'], true))
						<div class="ele-box">
							<p class="list">会社名</p>
							<p class="detail">{{ $validated['company'] }}</p>
						</div>
						@if(!empty($validated['department']))
							<div class="ele-box">
								<p class="list">部 署</p>
								<p class="detail">{{ $validated['department'] }}</p>
							</div>
						@endif
						@if(!empty($validated['role']))
							<div class="ele-box">
								<p class="list">役 職</p>
								<p class="detail">{{ $validated['role'] }}</p>
							</div>
						@endif
						<div class="ele-box">
							<p class="list">ご担当者</p>
							<p class="detail">{{ $validated['last_name'] }} {{ $validated['first_name'] }}</p>
						</div>
					@else
						<div class="ele-box">
							<p class="list">お名前</p>
							<p class="detail">{{ $validated['last_name'] }} {{ $validated['first_name'] }}</p>
						</div>
					@endif
					<div class="ele-box">
						<p class="list">ふりがな</p>
						<p class="detail">{{ $validated['last_name_kana'] }} {{ $validated['first_name_kana'] }}</p>
					</div>
					<div class="ele-box">
						<p class="list">メールアドレス</p>
						<p class="detail">{{ $validated['email'] }}</p>
					</div>
					<div class="ele-box">
						<p class="list">電話番号</p>
						<p class="detail">{{ $validated['tel1'] }}-{{ $validated['tel2'] }}-{{ $validated['tel3'] }}</p>
					</div>
					<div class="ele-box">
						<p class="list">ご相談内容</p>
						<p class="detail textarea">{!! nl2br(e($validated['body'])) !!}</p>
					</div>
					<div class="consent-box">
						<p><a class="privacy" target="" href="{{ route('privacy') }}">プライバシーポリシー</a>に同意</p>
					</div>
					<div class="btn-box">
						<button class="prev" type="submit" name="back" value="true">修正する</button>
						<button class="next" type="submit">送信する</button>
					</div>
				</div>
			</form>
			<img class="left-shage lazyload" data-src="{{ asset('/image/inquiry/left-shape.svg') }}" alt="シェイプ">
			<img class="right-shage lazyload" data-src="{{ asset('/image/inquiry/right-shape.svg') }}" alt="シェイプ">
			<img class="right-shage-sp lazyload" data-src="{{ asset('/image/inquiry/right-shape-sp.svg') }}" alt="シェイプ">
		</div>
	</section>









@stop





@section('js')
	@vite([
		'resources/js/defense.ts',
		'resources/js/hamburger-menu.ts',
		'resources/js/smooth-scroll.ts',
		'resources/js/mouse.ts',
		'resources/js/inquiry.ts',
	])
@stop