<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            // ['name' => 'キッチン用品', 'furigana' => 'キッチンヨウヒン', 'order' => 1],
            // ['name' => 'ゲーム用品', 'furigana' => 'ゲームヨウヒン', 'order' => 2],
            // ['name' => 'カメラ用品', 'furigana' => 'カメラヨウヒン', 'order' => 3],
            // ['name' => 'おもちゃ', 'furigana' => 'オモチャ', 'order' => 4],
            // ['name' => '人形', 'furigana' => 'ニンギョウ', 'order' => 5],
            // ['name' => '古美術品', 'furigana' => 'コビジュツヒン', 'order' => 6],
            // ['name' => '伝統工芸品', 'furigana' => 'デントウコウゲイヒン', 'order' => 7],
            // ['name' => 'ハイブランド・一般ブランド品', 'furigana' => 'ハイブランド・イッパンブランドヒン', 'order' => 8],
            // ['name' => '楽器', 'furigana' => 'ガッキ', 'order' => 9],
            // ['name' => '音響・映像機器・メディア', 'furigana' => 'オンキョウ・エイゾウキキ・メディア', 'order' => 10],
            // ['name' => '大型家電', 'furigana' => 'オオガタカデン', 'order' => 11],
            // ['name' => '携帯端末', 'furigana' => 'ケイタイタンマツ', 'order' => 12],
            // ['name' => '小型家電・PC関連', 'furigana' => 'コガタカデン・ピーシーカンレン', 'order' => 13],
            // ['name' => '介護用品', 'furigana' => 'カイゴヨウヒン', 'order' => 14],
            // ['name' => 'ベビー用品', 'furigana' => 'ベビーヨウヒン', 'order' => 15],
            // ['name' => '雑貨', 'furigana' => 'ザッカ', 'order' => 16],
            // ['name' => '家具', 'furigana' => 'カグ', 'order' => 17],
            // ['name' => '車両', 'furigana' => 'シャリョウ', 'order' => 18],
            // ['name' => '趣味・専門関連', 'furigana' => 'シュミ・センモンカンレン', 'order' => 19],
            // ['name' => 'お酒', 'furigana' => 'オサケ', 'order' => 20],
            // ['name' => '靴', 'furigana' => 'クツ', 'order' => 21],
            // ['name' => '金券', 'furigana' => 'キンケン', 'order' => 22],
            // ['name' => '貴金属・天然宝石類・小銭・古紙幣', 'furigana' => 'キキンゾク・テンネンホウセキルイ・コゼニ・コシヘイ', 'order' => 23],
            // ['name' => '本', 'furigana' => 'ホン', 'order' => 24],
            ['name' => '家電 / AV / カメラ', 'furigana' => 'カデン・エーブイ・カメラ', 'order' => 1],
            ['name' => '家具', 'furigana' => 'カグ', 'order' => 2],
            ['name' => 'PC / 周辺機器', 'furigana' => 'ピーシー・シュウヘンキキ', 'order' => 3],
            ['name' => 'まとめて片付け 不要品', 'furigana' => 'マトメテカタヅケ フヨウヒン', 'order' => 4],
            ['name' => 'ブランド品', 'furigana' => 'ブランドヒン', 'order' => 5],
            ['name' => '事務 / 店舗用品', 'furigana' => 'ジム・テンポヨウヒン', 'order' => 6],
            ['name' => '本 / ゲーム / CD / DVD', 'furigana' => 'ホン・ゲーム・シーディー・ディーブイディー', 'order' => 7],
            ['name' => '楽器 / 機材', 'furigana' => 'ガッキ・キザイ', 'order' => 8],
            ['name' => 'ファッション / 生活用品', 'furigana' => 'ファッション・セイカツヨウヒン', 'order' => 9],
            ['name' => 'スポーツ / レジャー', 'furigana' => 'スポーツ・レジャー', 'order' => 10],
            ['name' => '業務用機器', 'furigana' => 'ギョウムヨウキキ', 'order' => 11],
            ['name' => '電話機（ 携帯 / スマホ ）', 'furigana' => 'デンワキ・ケイタイ・スマホ', 'order' => 12],
            ['name' => '車 / バイク', 'furigana' => 'クルマ・バイク', 'order' => 13],
            ['name' => '金 / プラチナ / ジュエリー', 'furigana' => 'キン・プラチナ・ジュエリー', 'order' => 14],
            ['name' => '美術 / 骨董 / アンティーク', 'furigana' => 'ビジュツ・コットウ・アンティーク', 'order' => 15],
            ['name' => '時計', 'furigana' => 'トケイ', 'order' => 16],
            ['name' => 'おもちゃ / ホビー', 'furigana' => 'オモチャ・ホビー', 'order' => 17],
            ['name' => 'キッチン用品 / 食器', 'furigana' => 'キッチンヨウヒン・ショッキ', 'order' => 18],
            ['name' => '乗り物', 'furigana' => 'ノリモノ', 'order' => 19],
            ['name' => '美容 / 健康', 'furigana' => 'ビヨウ・ケンコウ', 'order' => 20],
            ['name' => '仏壇 / 仏具', 'furigana' => 'ブツダン・ブツグ', 'order' => 21],

        ]);
    }
}
