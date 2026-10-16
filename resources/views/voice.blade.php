@extends('layouts.viewer')
@section('title', 'アンケート｜買取猿丸くん')
@section('description', '')
@section('meta_tags')
    <meta name="robots" content="noindex,nofollow">
@stop

@section('css')
    <link href="{{ asset('/css/voice.css') }}" rel='stylesheet' type='text/css' media='all'>

    <style>
        @font-face {
            font-family: 'A-OTF Gothic MB101 Pro';
            src: url('/fonts/A-OTF-GothicMB101Pro-Medium.woff2') format('woff2');
            font-weight: 500;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'A-OTF Gothic MB101 Pro';
            src: url('/fonts/A-OTF-GothicMB101Pr5-DeBold.woff2') format('woff2');
            font-weight: 600;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'A-OTF Ryumin Pro';
            src: url('/fonts/A-OTF-RyuminPro-Medium.woff2') format('woff2');
            font-weight: 450;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'A-OTF Ryumin Pro';
            src: url('/fonts/A-OTF-RyuminPro-Bold.woff2') format('woff2');
            font-weight: 550;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'A-OTF Ryumin Pro';
            src: url('/fonts/A-OTF-RyuminPro-ExBold.woff2') format('woff2');
            font-weight: 600;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'A-OTF Ryumin Pro';
            src: url('/fonts/A-OTF-RyuminPro-Heavy.woff2') format('woff2');
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'A-OTF Ryumin Pro';
            src: url('/fonts/A-OTF-RyuminPro-ExHeavy.woff2') format('woff2');
            font-weight: 800;
            font-style: normal;
            font-display: swap;
        }
    </style>
    <script>
        (function(d) {
            var config = {
                kitId: 'lur1htk',
                scriptTimeout: 3000,
                async: true
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script>
@stop



@section('content_loader')
@stop



@section('content_sidebar')
@stop




@section('content')
    <header id="header">
        <div class="content-box">
            <a id="logo_sp_btn" href="{{ route('lp') }}">
                <img loading="lazy" class="color" src="{{ asset('image/online/logo.svg') }}" alt="">
            </a>
            <a id="open_btn" href="{{ route('lp') }}">
                <div class="inner_circle">
                    <div class="txt">TOP</div>
                </div>
            </a>
        </div>
    </header>







    <section id="title">
        <h1>アンケート</h1>
        @if (!session('success'))
            <div class="desc-box">
                <p class="base">“買取猿丸くん”では、お客様からのお声を募集しております。</p>
                <p class="base">以下のフォームに必要事項を入力または選択の上、送信してください。</p>
                <p class="base">率直なご意見・ご感想をお待ちしております。</p>
                <p class="note">※ 匿名のアンケートになります。個人情報に関する内容はご入力されないようご注意ください。</p>
                <p class="note">※ このアンケートに対する当店からの回答などはございません。予めご了承ください。</p>
            </div>
        @endif
    </section>


    @if (session('success'))
        <div class="wpcf7-response-success">送信されました。<br>貴重なご意見ありがとうございます。</div>
        <script>
            setTimeout(function() {
                window.location.href = "{{ route('lp') }}";
            }, 5000);
        </script>
    @endif




    @if (!session('success'))
        <section id="input-form">
            <form action="{{ route('voice.submit') }}" method="POST">
                @csrf

                <div class="input-box">
                    <p class="mark-desc"><span class="mark">*</span>は必須項目</p>

                    {{-- ニックネーム --}}
                    <div class="each-input" style="display: none;">
                        <div class="input-tittle">
                            <div class="input-s-tittle">ニックネーム</div>
                            <div class="required">*</div>
                        </div>
                        <div class="input-part">
                            <input type="text" name="your-name" class="input-name" placeholder="ハマちゃん" value="{{ old('your-name') }}">
                            @error('your-name')
                                <span class="wpcf7-not-valid-tip">入力してください。</span>
                            @enderror
                        </div>
                    </div>

                    {{-- 性別 --}}
                    <div class="each-input">
                        <div class="input-tittle">
                            <div class="input-s-tittle">性別</div>
                            <div class="required">*</div>
                        </div>
                        <div class="input-part">
                            <div class="select-box select-arrow">
                                <select name="your-sex" class="input-sex">
                                    <option value="" disabled {{ old('your-sex') == '' ? 'selected' : '' }}></option>
                                    @foreach (['男性','女性','その他'] as $sex)
                                        <option value="{{ $sex }}" {{ old('your-sex') == $sex ? 'selected' : '' }}>{{ $sex }}</option>
                                    @endforeach
                                </select>
                                @error('your-sex')
                                    <span class="wpcf7-not-valid-tip">選択してください。</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- 年齢 --}}
                    <div class="each-input">
                        <div class="input-tittle">
                            <div class="input-s-tittle">年齢</div>
                            <div class="required">*</div>
                        </div>
                        <div class="input-part">
                            <div class="select-box select-arrow">
                                <select name="your-age" class="input-age">
                                    <option value="" disabled {{ old('your-age') == '' ? 'selected' : '' }}></option>
                                    @foreach (['10代','20代','30代','40代','50代','60代','70代','80代','90代以上'] as $age)
                                        <option value="{{ $age }}" {{ old('your-age') == $age ? 'selected' : '' }}>{{ $age }}</option>
                                    @endforeach
                                </select>
                                @error('your-age')
                                    <span class="wpcf7-not-valid-tip">選択してください。</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- エリア --}}
                    <div class="each-input">
                        <div class="input-tittle">
                            <div class="input-s-tittle">エリア</div>
                            <div class="required">*</div>
                        </div>
                        <div class="input-part">
                            <div class="select-box select-arrow">
                                <select name="your-pref" class="input-pref">
                                    <option value="" disabled {{ old('your-pref') == '' ? 'selected' : '' }}></option>
                                    @foreach (['愛知県','岐阜県','三重県','滋賀県'] as $pref)
                                        <option value="{{ $pref }}" {{ old('your-pref') == $pref ? 'selected' : '' }}>{{ $pref }}</option>
                                    @endforeach
                                </select>
                                @error('your-pref')
                                    <span class="wpcf7-not-valid-tip">選択してください。</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="line"></div>

                    {{-- 利用日 --}}
                    <div class="each-input">
                        <div class="input-tittle">
                            <div class="input-s-tittle">利用日</div>
                            <div class="required">*</div>
                        </div>
                        <div class="input-part">
                            <div class="select-box select-arrow">
                                <select name="your-day" class="input-day">
                                    <option value="" disabled {{ old('your-day') == '' ? 'selected' : '' }}></option>
                                    @foreach (['3日以内', '1週間以内', '1ヶ月以内', '1ヶ月以上'] as $day)
                                        <option value="{{ $day }}" {{ old('your-day') == $day ? 'selected' : '' }}>{{ $day }}</option>
                                    @endforeach
                                </select>
                                @error('your-day')
                                    <span class="wpcf7-not-valid-tip">選択してください。</span>
                                @enderror
                            </div>
                        </div>
                    </div>

    <!--                 {{-- 来店人数 --}}
                    <div class="each-input">
                        <div class="input-tittle">
                            <div class="input-s-tittle">来店人数</div>
                            <div class="required">*</div>
                        </div>
                        <div class="input-part">
                            <div class="select-box select-arrow">
                                <select name="your-num" class="input-num">
                                    <option value="" disabled {{ old('your-num') == '' ? 'selected' : '' }}></option>
                                    @foreach (['1人','2人','3人','4人','5人以上'] as $num)
                                        <option value="{{ $num }}" {{ old('your-num') == $num ? 'selected' : '' }}>{{ $num }}</option>
                                    @endforeach
                                </select>
                                @error('your-num')
                                    <span class="wpcf7-not-valid-tip">選択してください。</span>
                                @enderror
                            </div>
                        </div>
                    </div> -->

    <!--                 {{-- 利用回数 --}}
                    <div class="each-input">
                        <div class="input-tittle">
                            <div class="input-s-tittle">利用回数</div>
                            <div class="required">*</div>
                        </div>
                        <div class="input-part">
                            <div class="select-box select-arrow">
                                <select name="your-visit-num" class="input-visit-num">
                                    <option value="" disabled {{ old('your-visit-num') == '' ? 'selected' : '' }}></option>
                                    @foreach (['1回','2回','3回','それ以上'] as $visitNum)
                                        <option value="{{ $visitNum }}" {{ old('your-visit-num') == $visitNum ? 'selected' : '' }}>{{ $visitNum }}</option>
                                    @endforeach
                                </select>
                                @error('your-visit-num')
                                    <span class="wpcf7-not-valid-tip">選択してください。</span>
                                @enderror
                            </div>
                        </div>
                    </div> -->

                    {{-- キャンペーン利用 --}}
                    <div class="each-input">
                        <div class="input-tittle">
                            <div class="input-s-tittle">キャンペーン利用</div>
                            <div class="required">*</div>
                        </div>
                        <div class="input-part">
                            <div class="select-box select-arrow">
                                <select name="your-campaign" class="input-campaign">
                                    <option value="" disabled {{ old('your-campaign') == '' ? 'selected' : '' }}></option>
                                    @foreach (['あり','なし'] as $campaign)
                                        <option value="{{ $campaign }}" {{ old('your-campaign') == $campaign ? 'selected' : '' }}>{{ $campaign }}</option>
                                    @endforeach
                                </select>
                                @error('your-campaign')
                                    <span class="wpcf7-not-valid-tip">選択してください。</span>
                                @enderror
                            </div>
                        </div>
                    </div>

    <!--                 {{-- 来店方法 --}}
                    <div class="each-input">
                        <div class="input-tittle">
                            <div class="input-s-tittle">来店方法</div>
                            <div class="required">*</div>
                        </div>
                        <div class="input-part">
                            <div class="select-box select-arrow">
                                <select name="your-visit-how" class="input-visit-how">
                                    <option value="" disabled {{ old('your-visit-how') == '' ? 'selected' : '' }}></option>
                                    @foreach (['徒歩','自転車','車','電車','その他'] as $how)
                                        <option value="{{ $how }}" {{ old('your-visit-how') == $how ? 'selected' : '' }}>{{ $how }}</option>
                                    @endforeach
                                </select>
                                @error('your-visit-how')
                                    <span class="wpcf7-not-valid-tip">選択してください。</span>
                                @enderror
                            </div>
                        </div>
                    </div> -->

                    {{-- 知ったキッカケ --}}
                    <div class="each-input">
                        <div class="input-tittle">
                            <div class="input-s-tittle">知ったキッカケ</div>
                            <div class="required">*</div>
                        </div>
                        <div class="input-part">
                            <div class="select-box select-arrow">
                                <select name="your-know" class="input-know">
                                    <option value="" disabled {{ old('your-know') == '' ? 'selected' : '' }}></option>
                                    @foreach (['チラシ','WEB検索','サービスカード','看板','SNS（X,Instagram等）','紹介','その他'] as $know)
                                        <option value="{{ $know }}" {{ old('your-know') == $know ? 'selected' : '' }}>{{ $know }}</option>
                                    @endforeach
                                </select>
                                @error('your-know')
                                    <span class="wpcf7-not-valid-tip">選択してください。</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="line"></div>

                    {{-- 各評価 --}}
                    @foreach (['your-call' => '電話対応', 'your-service' => '接客対応', 'your-appraisal' => '査定内容', 'your-purchase' => '買取対応', 'your-overall' => '総合評価'] as $name => $label)
                        <div class="each-input">
                            <div class="input-tittle">
                                <div class="input-s-tittle">{{ $label }}</div>
                                <div class="required">*</div>
                            </div>
                            <div class="input-part">
                                <div class="select-box select-arrow">
                                    <select name="{{ $name }}" class="input-{{ str_replace('your-', '', $name) }}">
                                        <option value="" disabled {{ old($name) == '' ? 'selected' : '' }}></option>
                                        @foreach (['★☆☆☆☆','★★☆☆☆','★★★☆☆','★★★★☆','★★★★★'] as $rating)
                                            <option value="{{ $rating }}" {{ old($name) == $rating ? 'selected' : '' }}>{{ $rating }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has($name))
                                        <span class="wpcf7-not-valid-tip">選択してください。</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- コメント --}}
                    <div class="each-input">
                        <div class="input-tittle">
                            <div class="input-s-tittle">コメント</div>
                        </div>
                        <div class="input-part">
                            <textarea name="your-request" class="input-request" placeholder="ご意見・ご感想をご入力ください。"></textarea>
                        </div>
                    </div>
                </div>
                {{-- 送信ボタン --}}
                <div class="btn-box">
                    <button type="submit" class="contact-button">送信する</button>
                </div>
                @if ($errors->any())
                    <div class="wpcf7-response-output">入力内容に問題があります。確認して再度お試しください。</div>
                @endif
            </form>
        </section>
    @endif




    <footer id="footer">
        <a class="logo-box" href="{{ route('lp') }}">
            <img class="logo" loading="lazy" src="{{ asset('/image/lp/footer/logo-white.svg') }}" alt="ロゴ">
        </a>
        <p class="copyright">
            <?php
                $currentYear = date('Y');
                if ($currentYear == 2025) {
                    echo "© 2025 - mono link. All rights reserved.";
                } else {
                    echo "© 2025 - $currentYear mono link. All rights reserved.";
                }
            ?>
        </p>
    </footer>
@stop





@section('js')
    @vite('resources/js/voice.js')
@stop