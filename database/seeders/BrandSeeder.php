<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            // ['name' => 'ナイキ', 'furigana' => 'ナイキ'],
            // ['name' => 'アディダス', 'furigana' => 'アディダス'],
            // ['name' => 'ユニクロ', 'furigana' => 'ユニクロ'],
            // ['name' => 'ジーユー', 'furigana' => 'ジーユー'],
            // ['name' => 'ザラ', 'furigana' => 'ザラ'],
            // ['name' => 'エイチ・アンド・エム', 'furigana' => 'エイチアンドエム'],
            // ['name' => 'シュプリーム', 'furigana' => 'シュプリーム'],
            // ['name' => 'リーバイス', 'furigana' => 'リーバイス'],
            // ['name' => 'ラルフローレン', 'furigana' => 'ラルフローレン'],
            // ['name' => 'ザ・ノース・フェイス', 'furigana' => 'ザノースフェイス'],
            // ['name' => 'パタゴニア', 'furigana' => 'パタゴニア'],
            // ['name' => 'コロンビア', 'furigana' => 'コロンビア'],
            // ['name' => 'バーバリー', 'furigana' => 'バーバリー'],
            // ['name' => 'ルイ・ヴィトン', 'furigana' => 'ルイヴィトン'],
            // ['name' => 'シャネル', 'furigana' => 'シャネル'],
            // ['name' => 'グッチ', 'furigana' => 'グッチ'],
            // ['name' => 'プラダ', 'furigana' => 'プラダ'],
            // ['name' => 'ディオール', 'furigana' => 'ディオール'],
            // ['name' => 'エルメス', 'furigana' => 'エルメス'],
            // ['name' => 'コム デ ギャルソン', 'furigana' => 'コムデギャルソン'],

            // ['name' => 'トヨタ', 'furigana' => 'トヨタ'],
            // ['name' => 'ホンダ', 'furigana' => 'ホンダ'],
            // ['name' => '日産', 'furigana' => 'ニッサン'],
            // ['name' => 'マツダ', 'furigana' => 'マツダ'],
            // ['name' => 'スバル', 'furigana' => 'スバル'],
            // ['name' => '三菱自動車', 'furigana' => 'ミツビシジドウシャ'],
            // ['name' => 'レクサス', 'furigana' => 'レクサス'],
            // ['name' => 'BMW', 'furigana' => 'ビーエムダブリュー'],
            // ['name' => 'メルセデス・ベンツ', 'furigana' => 'メルセデスベンツ'],
            // ['name' => 'アウディ', 'furigana' => 'アウディ'],
            // ['name' => 'フォルクスワーゲン', 'furigana' => 'フォルクスワーゲン'],
            // ['name' => 'ポルシェ', 'furigana' => 'ポルシェ'],
            // ['name' => 'フェラーリ', 'furigana' => 'フェラーリ'],
            // ['name' => 'ランボルギーニ', 'furigana' => 'ランボルギーニ'],
            // ['name' => 'テスラ', 'furigana' => 'テスラ'],
            // ['name' => 'フォード', 'furigana' => 'フォード'],
            // ['name' => 'シボレー', 'furigana' => 'シボレー'],
            // ['name' => 'ボルボ', 'furigana' => 'ボルボ'],
            // ['name' => 'ジャガー', 'furigana' => 'ジャガー'],
            // ['name' => 'ランドローバー', 'furigana' => 'ランドローバー'],

            // ['name' => 'アップル', 'furigana' => 'アップル'],
            // ['name' => 'マイクロソフト', 'furigana' => 'マイクロソフト'],
            // ['name' => 'グーグル', 'furigana' => 'グーグル'],
            // ['name' => 'アマゾン', 'furigana' => 'アマゾン'],
            // ['name' => 'ソニー', 'furigana' => 'ソニー'],
            // ['name' => 'パナソニック', 'furigana' => 'パナソニック'],
            // ['name' => 'シャープ', 'furigana' => 'シャープ'],
            // ['name' => '東芝', 'furigana' => 'トウシバ'],
            // ['name' => 'レノボ', 'furigana' => 'レノボ'],
            // ['name' => 'デル', 'furigana' => 'デル'],
            // ['name' => 'エイチピー', 'furigana' => 'エイチピー'],
            // ['name' => '富士通', 'furigana' => 'フジツウ'],
            // ['name' => 'NEC', 'furigana' => 'エヌイーシー'],
            // ['name' => 'ファーウェイ', 'furigana' => 'ファーウェイ'],
            // ['name' => 'サムスン', 'furigana' => 'サムスン'],
            // ['name' => 'エイスース', 'furigana' => 'エイスース'],
            // ['name' => 'エイサー', 'furigana' => 'エイサー'],
            // ['name' => 'ドコモ', 'furigana' => 'ドコモ'],
            // ['name' => 'ソフトバンク', 'furigana' => 'ソフトバンク'],
            // ['name' => 'エーユー', 'furigana' => 'エーユー'],

            // ['name' => 'コカ・コーラ', 'furigana' => 'コカコーラ'],
            // ['name' => 'ペプシ', 'furigana' => 'ペプシ'],
            // ['name' => 'ネスレ', 'furigana' => 'ネスレ'],
            // ['name' => 'スターバックス', 'furigana' => 'スターバックス'],
            // ['name' => 'マクドナルド', 'furigana' => 'マクドナルド'],
            // ['name' => 'バーガーキング', 'furigana' => 'バーガーキング'],
            // ['name' => 'ケンタッキー', 'furigana' => 'ケンタッキー'],
            // ['name' => 'ドミノピザ', 'furigana' => 'ドミノピザ'],
            // ['name' => 'モスバーガー', 'furigana' => 'モスバーガー'],
            // ['name' => 'ロッテリア', 'furigana' => 'ロッテリア'],
            // ['name' => 'サントリー', 'furigana' => 'サントリー'],
            // ['name' => 'キリン', 'furigana' => 'キリン'],
            // ['name' => 'アサヒ', 'furigana' => 'アサヒ'],
            // ['name' => '明治', 'furigana' => 'メイジ'],
            // ['name' => '森永製菓', 'furigana' => 'モリナガセイカ'],
            // ['name' => 'カルビー', 'furigana' => 'カルビー'],
            // ['name' => '日清食品', 'furigana' => 'ニッシンショクヒン'],
            // ['name' => 'ハウス食品', 'furigana' => 'ハウスショクヒン'],
            // ['name' => '味の素', 'furigana' => 'アジノモト'],
            // ['name' => '雪印メグミルク', 'furigana' => 'ユキジルシメグミルク'],
        ]);
    }
}
