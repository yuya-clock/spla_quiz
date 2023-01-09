<?php

namespace Database\Seeders;

use App\Models\Weapon;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Weapon::factory()
        //     ->count(10)
        //     ->create();

        DB::table('weapons')->insert(['name' => 'ボールドマーカー', 'rifle_range' => 1.6, 'maximum_range' => 1.6, 'path' => 'ボールドマーカー', 'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'わかばシューター', 'rifle_range' => 2.1, 'maximum_range' => 2.1, 'path' => 'わかばシューター',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'もみじシューター', 'rifle_range' => 2.1, 'maximum_range' => 2.1, 'path' => 'もみじシューター',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'プロモデラーMG', 'rifle_range' => 2.1, 'maximum_range' => 2.1, 'path' => 'プロモデラーMG',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'プロモデラーRG', 'rifle_range' => 2.1, 'maximum_range' => 2.1, 'path' => 'プロモデラーRG',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'シャープマーカー', 'rifle_range' => 2.3, 'maximum_range' => 2.3, 'path' => 'シャープマーカー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'スプラシューター', 'rifle_range' => 2.6, 'maximum_range' => 2.6, 'path' => 'スプラシューター',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'スプラシューターコラボ', 'rifle_range' => 2.6, 'maximum_range' => 2.6, 'path' => 'スプラシューターコラボ',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'ヒーローシューター レプリカ', 'rifle_range' => 2.6, 'maximum_range' => 2.6, 'path' => 'ヒーローシューター レプリカ',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'N-ZAP85', 'rifle_range' => 2.6, 'maximum_range' => 2.6, 'path' => 'N-ZAP85',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => '.52ガロン', 'rifle_range' => 2.8, 'maximum_range' => 2.8, 'path' => '52ガロン',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'L3リールガン', 'rifle_range' => 3, 'maximum_range' => 3, 'path' => 'L3リールガン',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'プライムシューター', 'rifle_range' => 3.5, 'maximum_range' => 3.5, 'path' => 'プライムシューター',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'プライムシューターコラボ', 'rifle_range' => 3.5, 'maximum_range' => 3.5, 'path' => 'プライムシューターコラボ',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'H3リールガン', 'rifle_range' => 3.5, 'maximum_range' => 3.5, 'path' => 'H3リールガン',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => '.96ガロン', 'rifle_range' => 3.7, 'maximum_range' => 3.7, 'path' => '96ガロン',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'ボトルガイザー', 'rifle_range' => 2.6, 'maximum_range' => 4, 'path' => 'ボトルガイザー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'ジェットスイーパー', 'rifle_range' => 4.6, 'maximum_range' => 4.6, 'path' => 'ジェットスイーパー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'ノヴァブラスター', 'rifle_range' => 1.5, 'maximum_range' => 2.2, 'path' => 'ノヴァブラスター',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'ノヴァブラスターネオ', 'rifle_range' => 1.5, 'maximum_range' => 2.2, 'path' => 'ノヴァブラスターネオ',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'クラッシュブラスター', 'rifle_range' => 1.9, 'maximum_range' => 2.6, 'path' => 'クラッシュブラスター',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'ホットブラスター', 'rifle_range' => 2, 'maximum_range' => 2.7, 'path' => 'ホットブラスター',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'ロングブラスター', 'rifle_range' => 2.8, 'maximum_range' => 3.5, 'path' => 'ロングブラスター',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'ラピッドブラスター', 'rifle_range' => 3.1, 'maximum_range' => 3.7, 'path' => 'ラピッドブラスター',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'Rブラスターエリート', 'rifle_range' => 3.6, 'maximum_range' => 4.2, 'path' => 'Rブラスターエリート',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'カーボンローラー', 'rifle_range' => 1.7, 'maximum_range' => 2.8, 'path' => 'カーボンローラー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'カーボンローラーデコ', 'rifle_range' => 1.7, 'maximum_range' => 2.8, 'path' => 'カーボンローラーデコ',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'スプラローラー', 'rifle_range' => 2.5, 'maximum_range' => 3.3, 'path' => 'スプラローラー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'ヴァリアブルローラー', 'rifle_range' => 2.2, 'maximum_range' => 4, 'path' => 'ヴァリアブルローラー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'ダイナモローラー', 'rifle_range' => 3.8, 'maximum_range' => 4.7, 'path' => 'ダイナモローラー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'ホクサイ', 'rifle_range' => 1.8, 'maximum_range' => 1.8, 'path' => 'ホクサイ',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'パブロ', 'rifle_range' => 1.3, 'maximum_range' => 1.3, 'path' => 'パブロ',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'パブロ・ヒュー', 'rifle_range' => 1.3, 'maximum_range' => 1.3, 'path' => 'パブロ・ヒュー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'スクイックリンα', 'rifle_range' => 2.3, 'maximum_range' => 3.8, 'path' => 'スクイックリンα',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => '14式竹筒銃・甲', 'rifle_range' => 4.2, 'maximum_range' => 4.2, 'path' => '14式竹筒銃・甲',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'ソイチューバー', 'rifle_range' => 2.8, 'maximum_range' => 4.3, 'path' => 'ソイチューバー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'スプラチャージャー', 'rifle_range' => 2.3, 'maximum_range' => 5.2, 'path' => 'スプラチャージャー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'スプラチャージャースコープ', 'rifle_range' => 2.3, 'maximum_range' => 5.7, 'path' => 'スプラスコープ',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'リッター4K', 'rifle_range' => 2.3, 'maximum_range' => 6.2, 'path' => 'リッター4K',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'リッター4Kスコープ', 'rifle_range' => 2.3, 'maximum_range' => 6.7, 'path' => 'リッター4Kスコープ',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'ヒッセン', 'rifle_range' => 2.4, 'maximum_range' => 2.4, 'path' => 'ヒッセン',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'バケットスロッシャー', 'rifle_range' => 3.1, 'maximum_range' => 3.1, 'path' => 'バケットスロッシャー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'バケットスロッシャーデコ', 'rifle_range' => 3.1, 'maximum_range' => 3.1, 'path' => 'バケットスロッシャーデコ',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'スクリュースロッシャー', 'rifle_range' => 3, 'maximum_range' => 3.3, 'path' => 'スクリュースロッシャー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'エクスプロッシャー', 'rifle_range' => 4.1, 'maximum_range' => 4.5, 'path' => 'エクスプロッシャー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'オーバーフロッシャー', 'rifle_range' => 5.3, 'maximum_range' => 5.3, 'path' => 'オーバーフロッシャー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'スプラスピナー', 'rifle_range' => 2.1, 'maximum_range' => 3, 'path' => 'スプラスピナー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'スプラスピナーコラボ', 'rifle_range' => 2.1, 'maximum_range' => 3, 'path' => 'スプラスピナーコラボ',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'ノーチラス47', 'rifle_range' => 3.5, 'maximum_range' => 3.5, 'path' => 'ノーチラス47',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'バレルスピナー', 'rifle_range' => 2.1, 'maximum_range' => 4.1, 'path' => 'バレルスピナー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'クーゲルシュライバー', 'rifle_range' => 2.3, 'maximum_range' => 4.7, 'path' => 'クーゲルシュライバー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'ハイドラント', 'rifle_range' => 2.1, 'maximum_range' => 4.9, 'path' => 'ハイドラント',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'スパッタリー', 'rifle_range' => 1.9, 'maximum_range' => 1.9, 'path' => 'スパッタリー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'スパッタリー・ヒュー', 'rifle_range' => 1.9, 'maximum_range' => 1.9, 'path' => 'スパッタリー・ヒュー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'スプラマニューバー', 'rifle_range' => 2.5, 'maximum_range' => 2.6, 'path' => 'スプラマニューバー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'クアッドホッパーブラック', 'rifle_range' => 2.5, 'maximum_range' => 2.7, 'path' => 'クアッドホッパーブラック',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'ケルビン525', 'rifle_range' => 2.7, 'maximum_range' => 3, 'path' => 'ケルビン525',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'デュアルスイーパー', 'rifle_range' => 3.1, 'maximum_range' => 3.4, 'path' => 'デュアルスイーパー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'パラシェルター', 'rifle_range' => 2.2, 'maximum_range' => 2.2, 'path' => 'パラシェルター',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'スパイガジェット', 'rifle_range' => 2.5, 'maximum_range' => 2.5, 'path' => 'スパイガジェット',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'キャンピングシェルター', 'rifle_range' => 1.8, 'maximum_range' => 2.8, 'path' => 'キャンピングシェルター',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'トライストリンガー', 'rifle_range' => 2.9, 'maximum_range' => 5.3, 'path' => 'トライストリンガー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'LACT-450', 'rifle_range' => 2, 'maximum_range' => 3, 'path' => 'LACT-450',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'ジムワイパー', 'rifle_range' => 3.6, 'maximum_range' => 3.8, 'path' => 'ジムワイパー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'ドライブワイパー', 'rifle_range' => 3, 'maximum_range' => 3.6, 'path' => 'ドライブワイパー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'スペースシューター', 'rifle_range' => 3.2, 'maximum_range' => 3.2, 'path' => 'スペースシューター',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'ワイドローラー', 'rifle_range' => 2.1, 'maximum_range' => 3.5, 'path' => 'ワイドローラー',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
        DB::table('weapons')->insert(['name' => 'R-PEN/5H', 'rifle_range' => 2.1, 'maximum_range' => 5.7, 'path' => 'R-PEN／5H',  'created_at' => new DateTime(), 'updated_at' => new DateTime()]);
    }
}
