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
	<section id="title">
		<div class="content-box">
			<h1>ご質問・ご相談 - 確認</h1>
		</div>
		<p class="en">INQUIRY</p>
	</section>









	<section id="test">
		<p>入力内容をご確認の上、「送信する」ボタンを押してください。</p>
		<form action="{{ route('inquiry.thanks') }}" method="POST">
			@csrf
			<table border="1" cellpadding="10" style="border-collapse: collapse;">
				<tr>
					<th>お名前</th>
					<td>{{ $validated['name'] }}</td>
				</tr>
				<tr>
					<th>メールアドレス</th>
					<td>{{ $validated['email'] }}</td>
				</tr>
				<tr>
					<th>ご相談内容</th>
					<td>{!! nl2br(e($validated['body'])) !!}</td>
				</tr>
			</table>

			<div style="margin-top: 20px;">
				<!-- 修正ボタン -->
				<button type="submit" name="back" value="true">修正する</button>
				<!-- 送信ボタン -->
				<button type="submit">送信する</button>
			</div>
		</form>
	</section>
@stop





@section('js')
	@vite([
		'resources/js/inquiry.js',
	])
@stop