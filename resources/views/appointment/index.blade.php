@extends('layouts.viewer')
@section('title', 'ご予約｜セカンド・ライド｜2ND RiDE')
@section('description', '')
@section('meta_tags')
    <meta name="robots" content="noindex,nofollow">
@stop

@section('css')
    <link href="{{ asset('/css/mouse.css') }}" rel='stylesheet' type='text/css' media='all'>
    <link href="{{ asset('/css/common.css') }}" rel='stylesheet' type='text/css' media='all'>
    <link href="{{ asset('/css/appointment.css') }}" rel='stylesheet' type='text/css' media='all'>
@stop



@section('content_loader')
@stop



@section('content_sidebar')
@stop




@section('content')
    <section id="fv">
        <div class="content-box">
            <div class="left-box">
                <p class="en">APPOINTMENT</p>
                <h1 class="tit">ご予約</h1>
                <div class="desc-box">
                    <p>1日で返信します。テキストテキストテキストテキストテキスト</p>
                    <p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </div>
            </div>
            <form class="form-input-box" action="{{ route('appointment.confirm') }}" method="POST">
                @csrf
                <div class="form-inner">
                    <!-- ご要望 -->
                    <div class="ele-box">
                        <label class="required" for="request">ご要望</label>
                        <div class="checkbox-box">
					        <div class="checkbox-ele">
					            <input type="checkbox" id="request1" name="request[]" value="現金化したい" @checked(in_array('現金化したい', old('request', $input['request'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="request1">現金化したい</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="request2" name="request[]" value="相場が知りたい" @checked(in_array('相場が知りたい', old('request', $input['request'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="request2">相場が知りたい</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="request3" name="request[]" value="相見積もり中" @checked(in_array('相見積もり中', old('request', $input['request'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="request3">相見積もり中</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="request4" name="request[]" value="お片づけ" @checked(in_array('お片づけ', old('request', $input['request'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="request4">お片づけ</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="request5" name="request[]" value="生前整理" @checked(in_array('生前整理', old('request', $input['request'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="request5">生前整理</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="request6" name="request[]" value="遺品整理" @checked(in_array('遺品整理', old('request', $input['request'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="request6">遺品整理</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="request7" name="request[]" value="引越し予定" @checked(in_array('引越し予定', old('request', $input['request'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="request7">引越し予定</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="request8" name="request[]" value="お家の解体予定" @checked(in_array('お家の解体予定', old('request', $input['request'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="request8">お家の解体予定</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="request9" name="request[]" value="早く買い取ってほしい" @checked(in_array('早く買い取ってほしい', old('request', $input['request'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="request9">早く買い取ってほしい</label>
					        </div>
                        </div>
                        @error('request')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- 買取品カテゴリ -->
                    <div class="ele-box">
                        <label class="required" for="category">買取品カテゴリ</label>
                        <div class="checkbox-box">
					        <div class="checkbox-ele">
					            <input type="checkbox" id="category1" name="category[]" value="家電" @checked(in_array('家電', old('category', $input['category'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="category1">家電</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="category2" name="category[]" value="家具" @checked(in_array('家具', old('category', $input['category'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="category2">家具</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="category3" name="category[]" value="PC / 周辺機器" @checked(in_array('PC / 周辺機器', old('category', $input['category'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="category3">PC / 周辺機器</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="category4" name="category[]" value="カメラ" @checked(in_array('カメラ', old('category', $input['category'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="category4">カメラ</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="category5" name="category[]" value="時計" @checked(in_array('時計', old('category', $input['category'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="category5">時計</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="category6" name="category[]" value="楽器 / AV機器" @checked(in_array('楽器 / AV機器', old('category', $input['category'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="category6">楽器 / AV機器</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="category7" name="category[]" value="本 / 雑誌" @checked(in_array('本 / 雑誌', old('category', $input['category'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="category7">本 / 雑誌</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="category8" name="category[]" value="CD / DVD" @checked(in_array('CD / DVD', old('category', $input['category'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="category8">CD / DVD</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="category9" name="category[]" value="ゲーム機" @checked(in_array('ゲーム機', old('category', $input['category'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="category9">ゲーム機</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="category10" name="category[]" value="おもちゃ" @checked(in_array('おもちゃ', old('category', $input['category'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="category10">おもちゃ</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="category11" name="category[]" value="洋服 / 着物" @checked(in_array('洋服 / 着物', old('category', $input['category'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="category11">洋服 / 着物</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="category12" name="category[]" value="キッチン" @checked(in_array('キッチン', old('category', $input['category'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="category12">キッチン</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="category13" name="category[]" value="スポーツ" @checked(in_array('スポーツ', old('category', $input['category'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="category13">スポーツ</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="category14" name="category[]" value="工具" @checked(in_array('工具', old('category', $input['category'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="category14">工具</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="category15" name="category[]" value="ブランド品" @checked(in_array('ブランド品', old('category', $input['category'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="category15">ブランド品</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="category16" name="category[]" value="金 / プラチナ / ジュエリー" @checked(in_array('金 / プラチナ / ジュエリー', old('category', $input['category'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="category16">金 / プラチナ / ジュエリー</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="category17" name="category[]" value="美術品 / 骨董品" @checked(in_array('美術品 / 骨董品', old('category', $input['category'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="category17">美術品 / 骨董品</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="category18" name="category[]" value="美容 / 健康" @checked(in_array('美容 / 健康', old('category', $input['category'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="category18">美容 / 健康</label>
					        </div>
					        <div class="checkbox-ele">
					            <input type="checkbox" id="category19" name="category[]" value="仏壇 / 仏具" @checked(in_array('仏壇 / 仏具', old('category', $input['category'] ?? [])))>
					            <span class="fake-checkbox"></span>
					            <label class="label-text" for="category19">仏壇 / 仏具</label>
					        </div>
                        </div>
                        @error('category')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- 出張買取の希望エリア --}}
                    <div class="ele-box">
                        <label class="required" for="area">出張買取の希望エリア</label>
						<div class="two-row-box">
							<select id="pref" name="pref">
							    <option value="">都道府県</option>
							    <option value="愛知県" @selected(old('pref', $input['pref'] ?? '') === '愛知県')>愛知県</option>
							    <option value="三重県" @selected(old('pref', $input['pref'] ?? '') === '三重県')>三重県</option>
							    <option value="岐阜県" @selected(old('pref', $input['pref'] ?? '') === '岐阜県')>岐阜県</option>
							</select>
							<select id="area" name="area" data-old-area="{{ old('area', $input['area'] ?? '') }}">
							    <option value="">市区町村</option>
							</select>
						</div>
                        @error('pref')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                        @error('area')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="ele-box">
                    	<div class="date-box">
		                    <!-- 第1希望日 -->
		                    <div class="date-ele">
		                        <label class="required" for="first_day">第1希望日</label>
		                        <div class="input-box">
							        <input type="text" id="first_day" name="first_day" placeholder="2026.4.1" value="{{ old('first_day', $input['first_day'] ?? '') }}" readonly>
		                        </div>
		                    </div>

		                    <!-- 第2希望日 -->
		                    <div class="date-ele">
		                        <label for="second_day">第2希望日</label>
		                        <div class="input-box">
							        <input type="text" id="second_day" name="second_day" placeholder="2026.4.2" value="{{ old('second_day', $input['second_day'] ?? '') }}" readonly>
		                        </div>
		                    </div>

		                    <!-- 第3希望日 -->
		                    <div class="date-ele">
		                        <label for="third_day">第3希望日</label>
		                        <div class="input-box">
							        <input type="text" id="third_day" name="third_day" placeholder="2026.4.3" value="{{ old('third_day', $input['third_day'] ?? '') }}" readonly>
		                        </div>
		                    </div>
		                </div>
                        @error('first_day')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                        @error('second_day')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                        @error('third_day')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
	                </div>

	                <div class="ele-box">
	                    <div class="name-box">
		                    <!-- 苗字 -->
		                    <div class="name-ele">
		                        <label class="required" for="last_name">苗字</label>
		                        <div class="input-box">
		                            <input type="text" id="last_name" name="last_name" placeholder="田中" value="{{ old('last_name', $input['last_name'] ?? '') }}">
		                        </div>
		                    </div>

		                    <!-- ふりがな -->
		                    <div class="name-ele">
		                        <label class="required" for="last_name_kana">ふりがな</label>
		                        <div class="input-box">
		                            <input type="text" id="last_name_kana" name="last_name_kana" placeholder="たなか" value="{{ old('last_name_kana', $input['last_name_kana'] ?? '') }}">
		                        </div>
		                    </div>
	                    </div>
                        @error('last_name')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                        @error('last_name_kana')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
	                </div>

                    <!-- 電話番号 -->
                    <div class="ele-box">
                        <label class="required" for="tel">電話番号</label>
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
                        <label for="body">ご相談内容</label>
                        <div class="textarea-box">
                            <textarea id="body" name="body" placeholder="詳細をご自由に入力してください。" rows="6">{{ old('body', $input['body'] ?? '') }}</textarea>
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
			<div class="landscape-box swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img class="img lazyload" data-src="{{ asset('image/appointment/landscape1.webp') }}" alt="町">
					</div>
					<div class="swiper-slide">
						<img class="img lazyload" data-src="{{ asset('image/appointment/landscape2.webp') }}" alt="街">
					</div>
					<div class="swiper-slide">
						<img class="img lazyload" data-src="{{ asset('image/appointment/landscape3.webp') }}" alt="道">
					</div>
				</div>
			</div>
        </div>
    </section>


@stop





@section('js')
    @vite([
        'resources/js/defense.ts',
        'resources/js/hamburger-menu.ts',
        'resources/js/smooth-scroll.ts',
        'resources/js/mouse.ts',
        'resources/js/appointment.ts',
    ])
@stop
