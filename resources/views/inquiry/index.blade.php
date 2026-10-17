@extends('layouts.viewer')
@section('title', 'ご質問・ご相談｜セカンド・ライド｜2ND RiDE')
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
			<h1>ご質問・ご相談</h1>
		</div>
		<p class="en">INQUIRY</p>
	</section>









	<section id="test">
		<form action="{{ route('inquiry.confirm') }}" method="POST">
			@csrf
			<!-- お名前 -->
			<div>
				<label for="name">お名前：</label>
				<input type="text" id="name" name="name" value="{{ old('name', $input['name'] ?? '') }}">
				@error('name')
					<p style="color: red;">{{ $message }}</p>
				@enderror
			</div>

			<!-- メールアドレス -->
			<div>
				<label for="email">メールアドレス：</label>
				<input type="email" id="email" name="email" value="{{ old('email', $input['email'] ?? '') }}">
				@error('email')
					<p style="color: red;">{{ $message }}</p>
				@enderror
			</div>

			<!-- ご相談内容 -->
			<div>
				<label for="body">ご相談内容：</label><br>
				<textarea id="body" name="body" rows="8" cols="40">{{ old('body', $input['body'] ?? '') }}</textarea>
				@error('body')
					<p style="color: red;">{{ $message }}</p>
				@enderror
			</div>

			<div style="margin-top: 20px;">
				<button type="submit">確認画面へ進む</button>
			</div>
		</form>
	</section>
@stop





@section('js')
	@vite([
		'resources/js/inquiry.js',
	])
@stop