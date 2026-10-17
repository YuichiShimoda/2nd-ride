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
	<section id="title">
		<div class="content-box">
			<h1>ご質問・ご相談 - 完了</h1>
		</div>
		<p class="en">INQUIRY</p>
	</section>









	<section id="test">
		<h1>お問い合わせ（ご相談）が完了しました</h1>

		<p>ご相談いただき、誠にありがとうございました。</p>
		<p>ご入力いただいたメールアドレス宛に、自動確認メールを送信いたしましたのでご確認ください。</p>

		<div style="margin-top: 30px;">
			<a href="{{ route('top') }}">トップページへ戻る</a>
		</div>
	</section>
@stop





@section('js')
	@vite([
		'resources/js/inquiry.js',
	])
@stop