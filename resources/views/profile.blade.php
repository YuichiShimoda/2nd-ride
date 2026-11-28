@extends('layouts.viewer')
@section('title', 'プロフィール｜セカンド・ライド｜2ND RiDE')
@section('description', '')
@section('meta_tags')
    <meta name="robots" content="noindex,nofollow">
@stop

@section('css')
    <link href="{{ asset('/css/mouse.css') }}" rel='stylesheet' type='text/css' media='all'>
    <link href="{{ asset('/css/common.css') }}" rel='stylesheet' type='text/css' media='all'>
    <link href="{{ asset('/css/profile.css') }}" rel='stylesheet' type='text/css' media='all'>
@stop



@section('content_loader')
@stop



@section('content_sidebar')
@stop




@section('content')
    <section id="fv">
        <div class="content-box">
            <div class="tit-box">
                <h1 class="tit">プロフィール</h1>
                <p class="en">PROFILE</p>
            </div>
        </div>
    </section>



    <section id="intro">
        <div class="head-box">
            <h2 class="head">人と未来の可能性を信じ</h2>
            <h2 class="head">新たな価値を創造する</h2>
            <h2 class="head">挑戦の先に、次の時代を切り拓く</h2>
        </div>
        <div class="content-box">
            <div class="desc-box">
                <p>変化し続ける時代の中で、常に新たな可能性を追求し、挑戦を続ける経営者。独自の視点と柔軟な発想を大切にしながら、既存の価値観にとらわれない事業づくりに取り組んでいる。</p>
                <p>経営において最も重視するのは、人と人とのつながり、そして一人ひとりが持つ可能性。</p>
                <p>多様な個性や才能が交わることで生まれる新たな価値を信じ、社員とともに成長できる組織づくりを目指す。</p>
                <p>目先の成果だけでなく、その先にある未来を見据え、誠実な姿勢と確かな決断力で事業を牽引。</p>
                <p>社会に新しい価値を届けることを使命に、次なるステージへの挑戦を続けている。</p>
            </div>
        </div>
    </section>







@stop





@section('js')
    @vite([
        'resources/js/profile.ts',
    ])
@stop