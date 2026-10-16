<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('makers')->insert([
            // ['name' => 'トヨタ自動車', 'furigana' => 'トヨタジドウシャ'],
            // ['name' => 'ホンダ', 'furigana' => 'ホンダ'],
            // ['name' => '日産自動車', 'furigana' => 'ニッサンジドウシャ'],
            // ['name' => 'マツダ', 'furigana' => 'マツダ'],
            // ['name' => 'スバル', 'furigana' => 'スバル'],
            // ['name' => '三菱自動車', 'furigana' => 'ミツビシジドウシャ'],
            // ['name' => 'スズキ', 'furigana' => 'スズキ'],
            // ['name' => 'ダイハツ', 'furigana' => 'ダイハツ'],
            // ['name' => 'いすゞ自動車', 'furigana' => 'イスズジドウシャ'],
            // ['name' => '日野自動車', 'furigana' => 'ヒノジドウシャ'],

            // ['name' => 'ソニー', 'furigana' => 'ソニー'],
            // ['name' => 'パナソニック', 'furigana' => 'パナソニック'],
            // ['name' => '東芝', 'furigana' => 'トウシバ'],
            // ['name' => 'シャープ', 'furigana' => 'シャープ'],
            // ['name' => '三菱電機', 'furigana' => 'ミツビシデンキ'],
            // ['name' => '日立製作所', 'furigana' => 'ヒタチセイサクショ'],
            // ['name' => 'NEC', 'furigana' => 'エヌイーシー'],
            // ['name' => '富士通', 'furigana' => 'フジツウ'],
            // ['name' => '京セラ', 'furigana' => 'キョウセラ'],
            // ['name' => 'オムロン', 'furigana' => 'オムロン'],

            // ['name' => 'アサヒビール', 'furigana' => 'アサヒビール'],
            // ['name' => 'キリンビール', 'furigana' => 'キリンビール'],
            // ['name' => 'サントリー', 'furigana' => 'サントリー'],
            // ['name' => 'サッポロビール', 'furigana' => 'サッポロビール'],
            // ['name' => '日清食品', 'furigana' => 'ニッシンショクヒン'],
            // ['name' => '味の素', 'furigana' => 'アジノモト'],
            // ['name' => 'ハウス食品', 'furigana' => 'ハウスショクヒン'],
            // ['name' => '明治', 'furigana' => 'メイジ'],
            // ['name' => '森永製菓', 'furigana' => 'モリナガセイカ'],
            // ['name' => 'グリコ', 'furigana' => 'グリコ'],

            // ['name' => '資生堂', 'furigana' => 'シセイドウ'],
            // ['name' => 'カネボウ', 'furigana' => 'カネボウ'],
            // ['name' => 'コーセー', 'furigana' => 'コーセー'],
            // ['name' => 'ファンケル', 'furigana' => 'ファンケル'],
            // ['name' => 'ドクターシーラボ', 'furigana' => 'ドクターシーラボ'],
            // ['name' => 'SK-II', 'furigana' => 'エスケーツー'],
            // ['name' => 'ロート製薬', 'furigana' => 'ロートセイヤク'],
            // ['name' => 'ライオン', 'furigana' => 'ライオン'],
            // ['name' => '花王', 'furigana' => 'カオウ'],
            // ['name' => '小林製薬', 'furigana' => 'コバヤシセイヤク'],

            // ['name' => 'Apple', 'furigana' => 'アップル'],
            // ['name' => 'Microsoft', 'furigana' => 'マイクロソフト'],
            // ['name' => 'Google', 'furigana' => 'グーグル'],
            // ['name' => 'Amazon', 'furigana' => 'アマゾン'],
            // ['name' => 'Meta', 'furigana' => 'メタ'],
            // ['name' => 'Intel', 'furigana' => 'インテル'],
            // ['name' => 'NVIDIA', 'furigana' => 'エヌビディア'],
            // ['name' => 'Samsung', 'furigana' => 'サムスン'],
            // ['name' => 'Huawei', 'furigana' => 'ファーウェイ'],
            // ['name' => 'ASUS', 'furigana' => 'エイスース'],

            // ['name' => 'Bosch', 'furigana' => 'ボッシュ'],
            // ['name' => 'Philips', 'furigana' => 'フィリップス'],
            // ['name' => 'Dyson', 'furigana' => 'ダイソン'],
            // ['name' => 'Whirlpool', 'furigana' => 'ワールプール'],
            // ['name' => 'Electrolux', 'furigana' => 'エレクトロラックス'],
            // ['name' => 'Bose', 'furigana' => 'ボーズ'],
            // ['name' => 'LG', 'furigana' => 'エルジー'],
            // ['name' => 'Haier', 'furigana' => 'ハイアール'],
            // ['name' => 'TCL', 'furigana' => 'ティーシーエル'],
            // ['name' => 'Arcelik', 'furigana' => 'アルチェリク'],

            // ['name' => 'マキタ', 'furigana' => 'マキタ'],
            // ['name' => 'リョービ', 'furigana' => 'リョービ'],
            // ['name' => 'HiKOKI', 'furigana' => 'ハイコーキ'],
            // ['name' => 'Bosch Tools', 'furigana' => 'ボッシュツール'],
            // ['name' => 'DeWalt', 'furigana' => 'デウォルト'],
            // ['name' => 'Hilti', 'furigana' => 'ヒルティ'],
            // ['name' => 'Milwaukee', 'furigana' => 'ミルウォーキー'],
            // ['name' => 'Makita USA', 'furigana' => 'マキタユーエスエー'],
            // ['name' => 'Snap-on', 'furigana' => 'スナップオン'],
            // ['name' => 'Craftsman', 'furigana' => 'クラフツマン'],
        ]);
    }
}
