<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //ハッシュ化

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            [
                'user_id' => 1,
                'name' => 'デニムシャツ',
                'type' => 'トップス',
                'detail' => 'カジュアルなスタイルに最適',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'レザージャケット',
                'type' => 'アウター',
                'detail' => 'クールでスタイリッシュな印象を与える',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'フリンジバッグ',
                'type' => 'バッグ',
                'detail' => 'ボヘミアンな雰囲気を演出',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'ワイドパンツ',
                'type' => 'ボトムス',
                'detail' => 'リラックス感のある穿き心地',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'レースブラウス',
                'type' => 'トップス',
                'detail' => 'フェミニンな魅力を引き出す',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'フラワープリントワンピース',
                'type' => 'ワンピース',
                'detail' => '華やかな春らしいデザイン',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'ハイヒールパンプス',
                'type' => 'シューズ',
                'detail' => '足元を華やかに演出する',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'カシミヤニットセーター',
                'type' => 'トップス',
                'detail' => '上質な素材で暖かさを提供',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'ボタニカルプリントブラウス',
                'type' => 'トップス',
                'detail' => '自然を感じさせる爽やかなデザイン',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'ストライプ柄ワイドシャツ',
                'type' => 'トップス',
                'detail' => 'リラックス感のあるシルエットが特徴',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'キャンバススニーカー',
                'type' => 'シューズ',
                'detail' => 'カジュアルなスタイルにぴったり',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'レースアップブーツ',
                'type' => 'シューズ',
                'detail' => 'スタイリッシュな印象を演出',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'レトロフラワープリントスカート',
                'type' => 'ボトムス',
                'detail' => 'ヴィンテージ感漂うロマンティックなデザイン',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'ベルト付きキャミソール',
                'type' => 'トップス',
                'detail' => 'ウエストを引き締めるベルトが付属',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'デニムミニスカート',
                'type' => 'ボトムス',
                'detail' => 'カジュアルな着こなしにぴったりのアイテム',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'ボヘミアンスタイルワンピース',
                'type' => 'ワンピース',
                'detail' => '自由な雰囲気を演出するボヘミアンスタイル',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'レザーベルト',
                'type' => 'アクセサリー',
                'detail' => 'シンプルで使いやすいデザイン',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'フェザーピアス',
                'type' => 'アクセサリー',
                'detail' => 'エキゾチックな雰囲気を醸し出す',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'ボーダーカットソー',
                'type' => 'トップス',
                'detail' => 'シンプルで使いやすい定番アイテム',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'ベルベットヘッドバンド',
                'type' => 'アクセサリー',
                'detail' => '上品な光沢が魅力的',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'ロングリブニットワンピース',
                'type' => 'ワンピース',
                'detail' => 'シンプルなデザインで着回し力抜群',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'キルティングジャケット',
                'type' => 'アウター',
                'detail' => '暖かさと軽さを両立した優れたアウター',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'ボヘミアンスカーフ',
                'type' => 'アクセサリー',
                'detail' => 'エスニックな雰囲気を楽しめる',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'ボーダープリントタンクトップ',
                'type' => 'トップス',
                'detail' => '夏にぴったりの爽やかなデザイン',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'デニムショートパンツ',
                'type' => 'ボトムス',
                'detail' => 'カジュアルなスタイルに欠かせないアイテム',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'ストレッチジョガーパンツ',
                'type' => 'ボトムス',
                'detail' => '動きやすさを追求した快適な履き心地',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'スリムフィットホワイトジーンズ',
                'type' => 'ボトムス',
                'detail' => '清潔感あふれるスタイリッシュなデザイン',
                'created_at' => '2024/01/01 11:11:11'
            ],
            [
                'user_id' => 1,
                'name' => 'キャップ',
                'type' => 'アクセサリー',
                'detail' => 'スポーティーなアクセントをプラス',
                'created_at' => '2024/01/01 11:11:11'
            ],
        ]);
    }
}
