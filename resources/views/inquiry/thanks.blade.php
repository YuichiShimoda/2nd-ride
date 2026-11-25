@extends('layouts.viewer')
@section('title', 'ご質問・ご相談 完了｜セカンド・ライド｜2ND RiDE')
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
		<div class="complete-box">
			<div class="inside-box">
				<p class="en">INQUIRY</p>
				<h1 class="tit">ご質問・ご相談</h1>
				<div class="desc-box">
					<p>ご相談いただき、誠にありがとうございました。</p>
					<p>ご入力いただいたメールアドレス宛に、自動確認メールを送信いたしましたのでご確認ください。</p>
				</div>
				<a class="top-link" href="{{ route('top') }}">
					<p>トップページへ戻る</p>
				</a>
			</div>
			<img class="left-shage lazyload" data-src="{{ asset('/image/inquiry/left-shape.svg') }}" alt="シェイプ">
			<img class="right-shage lazyload" data-src="{{ asset('/image/inquiry/right-shape.svg') }}" alt="シェイプ">
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