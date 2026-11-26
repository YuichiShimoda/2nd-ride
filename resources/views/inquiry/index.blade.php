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
	<section id="fv">
		<div class="content-box">
			<div class="left-box">
				<p class="en">INQUIRY</p>
				<h1 class="tit">ご質問・ご相談</h1>
				<div class="desc-box">
					<p>Webフォームをご利用ください。</p>
					<p>お問い合わせにつきましては、3営業日以内にご回答させていただきます。</p>
				</div>
			</div>
			<form class="form-input-box" action="{{ route('inquiry.confirm') }}" method="POST">
				@csrf
				<div class="form-inner">
					<!-- お問い合わせ種別 -->
					<div class="ele-box">
						<label class="required" for="inquiry_type">お問い合わせ種別</label>
						<div class="radio-box">
							<div class="radio-ele">
								<input type="radio" id="inquiry_type1" name="inquiry_type" value="サービスについて" @checked(old('inquiry_type', $input['inquiry_type'] ?? '') === 'サービスについて')>
								<label for="inquiry_type1">サービスについて</label>
							</div>
							<div class="radio-ele">
								<input type="radio" id="inquiry_type2" name="inquiry_type" value="業務委託について" @checked(old('inquiry_type', $input['inquiry_type'] ?? '') === '業務委託について')>
								<label for="inquiry_type2">業務委託について</label>
							</div>
							<div class="radio-ele">
								<input type="radio" id="inquiry_type3" name="inquiry_type" value="業務提携・協業について" @checked(old('inquiry_type', $input['inquiry_type'] ?? '') === '業務提携・協業について')>
								<label for="inquiry_type3">業務提携・協業について</label>
							</div>
							<div class="radio-ele">
								<input type="radio" id="inquiry_type4" name="inquiry_type" value="その他のご相談" @checked(old('inquiry_type', $input['inquiry_type'] ?? '') === 'その他のご相談')>
								<label for="inquiry_type4">その他のご相談</label>
							</div>
						</div>
						@error('inquiry_type')
							<p class="error-msg">{{ $message }}</p>
						@enderror
					</div>

					<div id="companyInfo" class="section-box" style="display: none;">
						{{-- 会社名 --}}
						<div class="ele-box">
							<label class="required" for="company">会社名</label>
							<div class="input-box">
								<input type="text" id="company" name="company" placeholder="株式会社 〇〇〇" value="{{ old('company', $input['company'] ?? '') }}">
							</div>
							@error('company')
								<p class="error-msg">{{ $message }}</p>
							@enderror
						</div>

						{{-- 部署 --}}
						<div class="ele-box">
							<label for="department">部署</label>
							<div class="input-box">
								<input type="text" id="department" name="department" placeholder="営業部" value="{{ old('department', $input['department'] ?? '') }}">
							</div>
						</div>

						{{-- 役職 --}}
						<div class="ele-box">
							<label for="role">役職</label>
							<div class="input-box">
								<input type="text" id="role" name="role" placeholder="課長" value="{{ old('role', $input['role'] ?? '') }}">
							</div>
						</div>

						{{-- ご担当者 --}}
						<div class="ele-box">
							<label class="required">ご担当者</label>
							<div class="two-row-box">
								<div class="input-box">
									<input type="text" id="last_name" name="last_name" placeholder="姓" value="{{ old('last_name', $input['last_name'] ?? '') }}">
								</div>
								<div class="input-box second">
									<input type="text" id="first_name" name="first_name" placeholder="名" value="{{ old('first_name', $input['first_name'] ?? '') }}">
								</div>
							</div>
							@error('last_name')
								<p class="error-msg">{{ $message }}</p>
							@enderror
							@error('first_name')
								<p class="error-msg">{{ $message }}</p>
							@enderror
						</div>
					</div>
					<div id="personalInfo" class="section-box">
						<!-- お名前 -->
						<div class="ele-box">
							<label class="required" for="name">お名前</label>
							<div class="two-row-box">
								<div class="input-box">
									<input type="text" id="last_name" name="last_name" placeholder="姓" value="{{ old('last_name', $input['last_name'] ?? '') }}">
								</div>
								<div class="input-box second">
									<input type="text" id="first_name" name="first_name" placeholder="名" value="{{ old('first_name', $input['first_name'] ?? '') }}">
								</div>
							</div>
							@error('last_name')
								<p class="error-msg">{{ $message }}</p>
							@enderror
							@error('first_name')
								<p class="error-msg">{{ $message }}</p>
							@enderror
						</div>
					</div>

					<!-- ふりがな -->
					<div class="ele-box">
						<label class="required" for="name">ふりがな</label>
						<div class="two-row-box">
							<div class="input-box">
								<input type="text" id="last_name_kana" name="last_name_kana" placeholder="せい" value="{{ old('last_name_kana', $input['last_name_kana'] ?? '') }}">
							</div>
							<div class="input-box second">
								<input type="text" id="first_name_kana" name="first_name_kana" placeholder="めい" value="{{ old('first_name_kana', $input['first_name_kana'] ?? '') }}">
							</div>
						</div>
						@error('last_name_kana')
							<p class="error-msg">{{ $message }}</p>
						@enderror
						@error('first_name_kana')
							<p class="error-msg">{{ $message }}</p>
						@enderror
					</div>

					<!-- メールアドレス -->
					<div class="ele-box">
						<label class="required" for="email">メールアドレス</label>
						<div class="input-box">
							<input type="email" id="email" name="email" placeholder="info@example.com" value="{{ old('email', $input['email'] ?? '') }}">
						</div>
						@error('email')
							<p class="error-msg">{{ $message }}</p>
						@enderror
					</div>

					<!-- 電話番号 -->
					<div class="ele-box">
						<label class="required" for="email">電話番号</label>
						<div class="tel-box">
							<div class="input-box">
								<input type="tel" id="tel1" name="tel1" placeholder="090" value="{{ old('tel1', $input['tel1'] ?? '') }}">
							</div>
							<p class="hyphen">ー</p>
							<div class="input-box">
								<input type="tel" id="tel2" name="tel2" placeholder="1234" value="{{ old('tel2', $input['tel2'] ?? '') }}">
							</div>
							<p class="hyphen">ー</p>
							<div class="input-box">
								<input type="tel" id="tel3" name="tel3" placeholder="5678" value="{{ old('tel3', $input['tel3'] ?? '') }}">
							</div>
						</div>
						@error('tel1')
							<p class="error-msg">{{ $message }}</p>
						@enderror
						@error('tel2')
							<p class="error-msg">{{ $message }}</p>
						@enderror
						@error('tel3')
							<p class="error-msg">{{ $message }}</p>
						@enderror
					</div>

					<!-- ご相談内容 -->
					<div class="ele-box">
						<label class="required" for="body">ご相談内容</label>
						<div class="textarea-box">
							<textarea id="body" name="body" placeholder="詳細をご自由に入力してください。" rows="8">{{ old('body', $input['body'] ?? '') }}</textarea>
						</div>
						@error('body')
							<p class="error-msg">{{ $message }}</p>
						@enderror
					</div>

					<div class="btn-box">
						<button type="submit">確認画面へ進む</button>
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