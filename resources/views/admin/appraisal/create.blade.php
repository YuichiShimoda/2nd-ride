@extends('adminlte::page')

@section('title', '査定依頼管理｜新規作成')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/adminlte/appraisal.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" />
@stop

@section('classes_body', 'page-create')

@section('content_header')
    <div class="tit-box">
        <h1>査定依頼管理<span>｜</span>新規作成</h1>
        <a href="{{ route('admin.appraisal.index') }}" class="back-btn">
            <p>一覧に戻る</p>
        </a>
    </div>
@stop

@section('content')
    <form action="{{ route('admin.appraisal.store') }}" method="POST">
        @csrf

        <div class="main-box">
            <p class="tit">管理番号</p>
            <p class="appraisal-numb">{{ $ticket_number }}</p>
            <div class="deadline-box">
                <p>申込み日：</p>
                <p>{{ \Carbon\Carbon::today()->addDays(7)->format('Y年 n月 j日') }}</p>
            </div>
        </div>
        <input type="hidden" name="ticket_number" value="{{ $ticket_number }}">
        <input type="hidden" name="deadline" value="{{ \Carbon\Carbon::today()->addDays(7)->format('Y-m-d') }}">
        <input type="hidden" name="status" value="新規査定依頼">
        @error('ticket_number')
            <span class="invalid-feedback d-block mt-2" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @error('deadline')
            <span class="invalid-feedback d-block mt-2" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @error('status')
            <span class="invalid-feedback d-block mt-2" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        {{-- 担当者 --}}
        @php
            $staffs = [
                '猿丸',
                '柴原',
                '鈴木',
            ];
        @endphp
        <div class="d-block">
            <div class="form-group">
                <label>担当者</label>
                <div class="staff-radio-box">
                    @foreach($staffs as $staff)
                        <div class="radio-ele">
                            <input type="radio" id="staff_{{ $loop->iteration }}" name="staff" value="{{ $staff }}" {{ old('staff') == $staff ? 'checked' : '' }}>
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
        @php
            $index = 1;
            // -----　愛知　-----
            $aichi_ku = ['千種区','東区','北区','西区','中村区','中区','昭和区','瑞穂区','熱田区','中川区','港区','南区','守山区','緑区','名東区','天白区'];
            $aichi_city = ['豊橋市','岡崎市','一宮市','瀬戸市','半田市','春日井市','豊川市','津島市','碧南市','刈谷市','豊田市','安城市','西尾市','蒲郡市','犬山市','常滑市','江南市','小牧市','稲沢市','新城市','東海市','大府市','知多市','知立市','尾張旭市','高浜市','岩倉市','豊明市','日進市','田原市','愛西市','清須市','北名古屋市','弥富市','みよし市','あま市','長久手市'];
            $aichi_district = ['愛知郡','西春日井郡','丹羽郡','海部郡','知多郡','額田郡','北設楽郡'];
            $aichi_town = ['東郷町','豊山町','大口町','扶桑町','大治町','蟹江町','阿久比町','東浦町','南知多町','美浜町','武豊町','幸田町','設楽町','東栄町'];
            $aichi_village = ['飛島村','豊根村'];
            // -----　岐阜　-----
            $gifu_city = ['岐阜市','大垣市','高山市','多治見市','関市','中津川市','美濃市','瑞浪市','羽島市','恵那市','美濃加茂市','土岐市','各務原市','可児市','山県市','瑞穂市','飛騨市','本巣市','郡上市','下呂市','海津市'];
            $gifu_district = ['羽島郡','養老郡','不破郡','安八郡','揖斐郡','本巣郡','加茂郡','可児郡','大野郡'];
            $gifu_town = ['岐南町','笠松町','養老町','垂井町','関ケ原町','神戸町','輪之内町','安八町','揖斐川町','大野町','池田町','北方町','坂祝町','富加町','川辺町','七宗町','八百津町','白川町','御嵩町'];
            $gifu_village = ['東白川村','白川村'];
            // -----　三重　-----
            $mie_city = ['津市','四日市市','伊勢市','松阪市','桑名市','鈴鹿市','名張市','尾鷲市','亀山市','鳥羽市','熊野市','いなべ市','志摩市','伊賀市'];
            $mie_district = ['桑名郡','員弁郡','三重郡','多気郡','度会郡','北牟婁郡','南牟婁郡'];
            $mie_town = ['木曽岬町','東員町','菰野町','朝日町','川越町','多気町','明和町','大台町','玉城町','度会町','大紀町','南伊勢町','紀北町','御浜町','紀宝町'];
            // -----　滋賀　-----
            $shiga_city = ['大津市','彦根市','長浜市','近江八幡市','草津市','守山市','栗東市','甲賀市','野洲市','湖南市','高島市','東近江市','米原市'];
            $shiga_district = ['蒲生郡','愛知郡','犬上郡'];
            $shiga_town = ['日野町','竜王町','愛荘町','豊郷町','甲良町','多賀町'];
            // -----　その他　-----
            $other = ['他県','不明','未回答'];
        @endphp
        <div class="d-block">
            <div class="form-group">
                <label>エリア</label>
                <div class="pref-box">
                    <p class="pref-name">愛知県</p>
                    <div class="radio-box">
                        @foreach($aichi_ku as $aichi_ele_ku)
                            <div class="radio-ele">
                                <input type="radio" id="area_{{ $index }}" name="area" value="{{ $aichi_ele_ku }}" {{ old('area') == $aichi_ele_ku ? 'checked' : '' }}>
                                <label for="area_{{ $index }}">
                                    {{ $aichi_ele_ku }}
                                </label>
                            </div>
                            @php $index++; @endphp
                        @endforeach
                    </div>
                    <div class="radio-box">
                        @foreach($aichi_city as $aichi_ele_city)
                            <div class="radio-ele">
                                <input type="radio" id="area_{{ $index }}" name="area" value="{{ $aichi_ele_city }}" {{ old('area') == $aichi_ele_city ? 'checked' : '' }}>
                                <label for="area_{{ $index }}">
                                    {{ $aichi_ele_city }}
                                </label>
                            </div>
                            @php $index++; @endphp
                        @endforeach
                    </div>
                    <div class="radio-box">
                        @foreach($aichi_district as $aichi_ele_district)
                            <div class="radio-ele">
                                <input type="radio" id="area_{{ $index }}" name="area" value="{{ $aichi_ele_district }}" {{ old('area') == $aichi_ele_district ? 'checked' : '' }}>
                                <label for="area_{{ $index }}">
                                    {{ $aichi_ele_district }}
                                </label>
                            </div>
                            @php $index++; @endphp
                        @endforeach
                    </div>
                    <div class="radio-box">
                        @foreach($aichi_town as $aichi_ele_town)
                            <div class="radio-ele">
                                <input type="radio" id="area_{{ $index }}" name="area" value="{{ $aichi_ele_town }}" {{ old('area') == $aichi_ele_town ? 'checked' : '' }}>
                                <label for="area_{{ $index }}">
                                    {{ $aichi_ele_town }}
                                </label>
                            </div>
                            @php $index++; @endphp
                        @endforeach
                    </div>
                    <div class="radio-box">
                        @foreach($aichi_village as $aichi_ele_village)
                            <div class="radio-ele">
                                <input type="radio" id="area_{{ $index }}" name="area" value="{{ $aichi_ele_village }}" {{ old('area') == $aichi_ele_village ? 'checked' : '' }}>
                                <label for="area_{{ $index }}">
                                    {{ $aichi_ele_village }}
                                </label>
                            </div>
                            @php $index++; @endphp
                        @endforeach
                    </div>
                </div>

                <div class="pref-box">
                    <p class="pref-name">岐阜県</p>
                    <div class="radio-box">
                        @foreach($gifu_city as $gifu_ele_city)
                            <div class="radio-ele">
                                <input type="radio" id="area_{{ $index }}" name="area" value="{{ $gifu_ele_city }}" {{ old('area') == $gifu_ele_city ? 'checked' : '' }}>
                                <label for="area_{{ $index }}">
                                    {{ $gifu_ele_city }}
                                </label>
                            </div>
                            @php $index++; @endphp
                        @endforeach
                    </div>
                    <div class="radio-box">
                        @foreach($gifu_district as $gifu_ele_district)
                            <div class="radio-ele">
                                <input type="radio" id="area_{{ $index }}" name="area" value="{{ $gifu_ele_district }}" {{ old('area') == $gifu_ele_district ? 'checked' : '' }}>
                                <label for="area_{{ $index }}">
                                    {{ $gifu_ele_district }}
                                </label>
                            </div>
                            @php $index++; @endphp
                        @endforeach
                    </div>
                    <div class="radio-box">
                        @foreach($gifu_town as $gifu_ele_town)
                            <div class="radio-ele">
                                <input type="radio" id="area_{{ $index }}" name="area" value="{{ $gifu_ele_town }}" {{ old('area') == $gifu_ele_town ? 'checked' : '' }}>
                                <label for="area_{{ $index }}">
                                    {{ $gifu_ele_town }}
                                </label>
                            </div>
                            @php $index++; @endphp
                        @endforeach
                    </div>
                    <div class="radio-box">
                        @foreach($gifu_village as $gifu_ele_village)
                            <div class="radio-ele">
                                <input type="radio" id="area_{{ $index }}" name="area" value="{{ $gifu_ele_village }}" {{ old('area') == $gifu_ele_village ? 'checked' : '' }}>
                                <label for="area_{{ $index }}">
                                    {{ $gifu_ele_village }}
                                </label>
                            </div>
                            @php $index++; @endphp
                        @endforeach
                    </div>
                </div>

                <div class="pref-box">
                    <p class="pref-name">三重県</p>
                    <div class="radio-box">
                        @foreach($mie_city as $mie_ele_city)
                            <div class="radio-ele">
                                <input type="radio" id="area_{{ $index }}" name="area" value="{{ $mie_ele_city }}" {{ old('area') == $mie_ele_city ? 'checked' : '' }}>
                                <label for="area_{{ $index }}">
                                    {{ $mie_ele_city }}
                                </label>
                            </div>
                            @php $index++; @endphp
                        @endforeach
                    </div>
                    <div class="radio-box">
                        @foreach($mie_district as $mie_ele_district)
                            <div class="radio-ele">
                                <input type="radio" id="area_{{ $index }}" name="area" value="{{ $mie_ele_district }}" {{ old('area') == $mie_ele_district ? 'checked' : '' }}>
                                <label for="area_{{ $index }}">
                                    {{ $mie_ele_district }}
                                </label>
                            </div>
                            @php $index++; @endphp
                        @endforeach
                    </div>
                    <div class="radio-box">
                        @foreach($mie_town as $mie_ele_town)
                            <div class="radio-ele">
                                <input type="radio" id="area_{{ $index }}" name="area" value="{{ $mie_ele_town }}" {{ old('area') == $mie_ele_town ? 'checked' : '' }}>
                                <label for="area_{{ $index }}">
                                    {{ $mie_ele_town }}
                                </label>
                            </div>
                            @php $index++; @endphp
                        @endforeach
                    </div>
                </div>

                <div class="pref-box">
                    <p class="pref-name">滋賀県</p>
                    <div class="radio-box">
                        @foreach($shiga_city as $shiga_ele_city)
                            <div class="radio-ele">
                                <input type="radio" id="area_{{ $index }}" name="area" value="{{ $shiga_ele_city }}" {{ old('area') == $shiga_ele_city ? 'checked' : '' }}>
                                <label for="area_{{ $index }}">
                                    {{ $shiga_ele_city }}
                                </label>
                            </div>
                            @php $index++; @endphp
                        @endforeach
                    </div>
                    <div class="radio-box">
                        @foreach($shiga_district as $shiga_ele_district)
                            <div class="radio-ele">
                                <input type="radio" id="area_{{ $index }}" name="area" value="{{ $shiga_ele_district }}" {{ old('area') == $shiga_ele_district ? 'checked' : '' }}>
                                <label for="area_{{ $index }}">
                                    {{ $shiga_ele_district }}
                                </label>
                            </div>
                            @php $index++; @endphp
                        @endforeach
                    </div>
                    <div class="radio-box">
                        @foreach($shiga_town as $shiga_ele_town)
                            <div class="radio-ele">
                                <input type="radio" id="area_{{ $index }}" name="area" value="{{ $shiga_ele_town }}" {{ old('area') == $shiga_ele_town ? 'checked' : '' }}>
                                <label for="area_{{ $index }}">
                                    {{ $shiga_ele_town }}
                                </label>
                            </div>
                            @php $index++; @endphp
                        @endforeach
                    </div>
                </div>

                <div class="pref-box">
                    <p class="pref-name">その他</p>
                    <div class="radio-box">
                        @foreach($other as $other_ele)
                            <div class="radio-ele">
                                <input type="radio" id="area_{{ $index }}" name="area" value="{{ $other_ele }}" {{ old('area') == $other_ele ? 'checked' : '' }}>
                                <label for="area_{{ $index }}">
                                    {{ $other_ele }}
                                </label>
                            </div>
                            @php $index++; @endphp
                        @endforeach
                    </div>
                </div>
            </div>
            @error('area')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- メモ --}}
        <div class="d-block">
            <x-adminlte-textarea name="memo" label="メモ" placeholder="補足情報を入力してください。" rows="7">{{ old('memo') }}</x-adminlte-textarea>
        </div>

        {{-- 登録ボタン --}}
        <x-adminlte-button label="登録する" class="register-btn" type="submit"/>
    </form>
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/locale/ja.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js"></script>
    <script>
        moment.locale('ja');
    </script>
@endsection