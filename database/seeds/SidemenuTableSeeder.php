<?php

use Illuminate\Database\Seeder;

class SidemenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sidemenus')->insert([
            [
                'name' => 'ニンニクの芽',
                'price' => '150',
                'calories' => '70',
                'protein' => '1.8',
                'fat' => '3.6',
                'carb' => '8.7',
                'sodium' => '0.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'しじみ汁',
                'price' => '190',
                'calories' => '95',
                'protein' => '10.1',
                'fat' => '2.5',
                'carb' => '7.7',
                'sodium' => '2.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'みそ汁',
                'price' => '80',
                'calories' => '47',
                'protein' => '2.7',
                'fat' => '1.7',
                'carb' => '5.1',
                'sodium' => '2.6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'とん汁',
                'price' => '190',
                'calories' => '157',
                'protein' => '6.5',
                'fat' => '8.5',
                'carb' => '14.0',
                'sodium' => '3.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'おしんこ',
                'price' => '80',
                'calories' => '9',
                'protein' => '0.8',
                'fat' => '0.1',
                'carb' => '1.5',
                'sodium' => '0.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'たまご',
                'price' => '60',
                'calories' => '84',
                'protein' => '6.8',
                'fat' => '5.7',
                'carb' => '0.2',
                'sodium' => '0.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'おんたま',
                'price' => '80',
                'calories' => '84',
                'protein' => '6.8',
                'fat' => '5.7',
                'carb' => '0.2',
                'sodium' => '0.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'サラダ',
                'price' => '140',
                'calories' => '27',
                'protein' => '1.4',
                'fat' => '0.2',
                'carb' => '5.8',
                'sodium' => '0.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ポテトサラダ',
                'price' => '180',
                'calories' => '91',
                'protein' => '2.1',
                'fat' => '3.6',
                'carb' => '13.4',
                'sodium' => '0.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'オクラサラダ',
                'price' => '180',
                'calories' => '37',
                'protein' => '2.0',
                'fat' => '0.3',
                'carb' => '8.1',
                'sodium' => '0.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'カットりんご',
                'price' => '110',
                'calories' => '19',
                'protein' => '0.1',
                'fat' => '0.0',
                'carb' => '5.1',
                'sodium' => '0.02',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'マヨポテ',
                'price' => '80',
                'calories' => '64',
                'protein' => '0.8',
                'fat' => '3.4',
                'carb' => '7.6',
                'sodium' => '0.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛皿(ミニ)',
                'price' => '220',
                'calories' => '219',
                'protein' => '11.1',
                'fat' => '16.2',
                'carb' => '7.3',
                'sodium' => '1.8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛皿(並盛)',
                'price' => '260',
                'calories' => '317',
                'protein' => '16.0',
                'fat' => '23.6',
                'carb' => '10.3',
                'sodium' => '2.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛皿(中盛)',
                'price' => '390',
                'calories' => '460',
                'protein' => '23.0',
                'fat' => '34.6',
                'carb' => '14.1',
                'sodium' => '3.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛皿(2倍盛)',
                'price' => '490',
                'calories' => '622',
                'protein' => '31.1',
                'fat' => '47.0',
                'carb' => '18.6',
                'sodium' => '4.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛皿(3倍盛)',
                'price' => '720',
                'calories' => '927',
                'protein' => '46.2',
                'fat' => '70.5',
                'carb' => '27.0',
                'sodium' => '6.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛皿(4倍盛)',
                'price' => '950',
                'calories' => '1232',
                'protein' => '61.3',
                'fat' => '93.9',
                'carb' => '35.3',
                'sodium' => '8.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛皿(5倍盛)',
                'price' => '1180',
                'calories' => '1536',
                'protein' => '76.4',
                'fat' => '117.4',
                'carb' => '43.6',
                'sodium' => '10.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'かつぶしオクラ',
                'price' => '130',
                'calories' => '30',
                'protein' => '2.5',
                'fat' => '0.1',
                'carb' => '5.9',
                'sodium' => '1.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'さば',
                'price' => '230',
                'calories' => '189',
                'protein' => '11.4',
                'fat' => '14.5',
                'carb' => '3.4',
                'sodium' => '0.8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '鮭',
                'price' => '230',
                'calories' => '153',
                'protein' => '13.9',
                'fat' => '10.5',
                'carb' => '0.7',
                'sodium' => '1.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'からあげ(2個)',
                'price' => '100',
                'calories' => '123',
                'protein' => '10.1',
                'fat' => '6.8',
                'carb' => '5.2',
                'sodium' => '0.8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'からあげ(6個)',
                'price' => '280',
                'calories' => '368',
                'protein' => '30.4',
                'fat' => '20.5',
                'carb' => '15.5',
                'sodium' => '2.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '冷やっこ',
                'price' => '120',
                'calories' => '90',
                'protein' => '8.8',
                'fat' => '4.7',
                'carb' => '3.3',
                'sodium' => '0.04',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '納豆',
                'price' => '90',
                'calories' => '111',
                'protein' => '8.6',
                'fat' => '5.1',
                'carb' => '7.2',
                'sodium' => '0.6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ごはん(ミニ)',
                'price' => '130',
                'calories' => '277',
                'protein' => '4.6',
                'fat' => '1.0',
                'carb' => '62.6',
                'sodium' => '0.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ごはん(並)',
                'price' => '160',
                'calories' => '415',
                'protein' => '7.0',
                'fat' => '1.4',
                'carb' => '93.8',
                'sodium' => '0.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ごはん(大盛)',
                'price' => '190',
                'calories' => '554',
                'protein' => '9.3',
                'fat' => '1.9',
                'carb' => '125.1',
                'sodium' => '0.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'キムチ',
                'price' => '130',
                'calories' => '28',
                'protein' => '1.9',
                'fat' => '0.4',
                'carb' => '5.3',
                'sodium' => '2.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '山かけ(わさび付)',
                'price' => '130',
                'calories' => '47',
                'protein' => '1.6',
                'fat' => '0.2',
                'carb' => '10.1',
                'sodium' => '0.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'おろしポン酢',
                'price' => '130',
                'calories' => '21',
                'protein' => '1.1',
                'fat' => '0.1',
                'carb' => '4.1',
                'sodium' => '1.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '高菜明太マヨ',
                'price' => '130',
                'calories' => '103',
                'protein' => '1.8',
                'fat' => '9.6',
                'carb' => '4.0',
                'sodium' => '1.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '高菜',
                'price' => '100',
                'calories' => '29',
                'protein' => '1.2',
                'fat' => '2.0',
                'carb' => '2.9',
                'sodium' => '1.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '明太マヨ',
                'price' => '40',
                'calories' => '74',
                'protein' => '0.5',
                'fat' => '7.5',
                'carb' => '1.1',
                'sodium' => '0.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '青ねぎ',
                'price' => '60',
                'calories' => '9',
                'protein' => '0.5',
                'fat' => '0.1',
                'carb' => '2.1',
                'sodium' => '0.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'のり',
                'price' => '30',
                'calories' => '3',
                'protein' => '0.6',
                'fat' => '0.1',
                'carb' => '0.6',
                'sodium' => '0.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'マヨネーズ',
                'price' => '30',
                'calories' => '113',
                'protein' => '0.3',
                'fat' => '12.1',
                'carb' => '0.1',
                'sodium' => '0.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'コチュジャンだれ',
                'price' => '20',
                'calories' => '17',
                'protein' => '0.5',
                'fat' => '0.7',
                'carb' => '2.3',
                'sodium' => '0.6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛カルビ皿(並盛)',
                'price' => '450',
                'calories' => '242',
                'protein' => '21.9',
                'fat' => '12.6',
                'carb' => '10.4',
                'sodium' => '3.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛カルビ皿(肉1.5倍盛)',
                'price' => '570',
                'calories' => '334',
                'protein' => '31.7',
                'fat' => '18.4',
                'carb' => '10.5',
                'sodium' => '4.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛カルビ皿(肉2倍盛)',
                'price' => '690',
                'calories' => '482',
                'protein' => '43.7',
                'fat' => '24.9',
                'carb' => '20.7',
                'sodium' => '6.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ナムル',
                'price' => '130',
                'calories' => '19',
                'protein' => '1.4',
                'fat' => '0.8',
                'carb' => '2.2',
                'sodium' => '0.6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'うな皿',
                'price' => '690',
                'calories' => '248',
                'protein' => '16.2',
                'fat' => '16.7',
                'carb' => '8.5',
                'sodium' => '1.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '特うな皿(うなぎ2枚)',
                'price' => '1180',
                'calories' => '495',
                'protein' => '32.4',
                'fat' => '33.3',
                'carb' => '16.9',
                'sodium' => '2.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'レモネードスカッシュ',
                'price' => '220',
                'calories' => '133',
                'protein' => '0.4',
                'fat' => '0.3',
                'carb' => '32.2',
                'sodium' => '0.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'なめらかカラメルぷりん',
                'price' => '150',
                'calories' => '189',
                'protein' => '3.6',
                'fat' => '13.4',
                'carb' => '13.7',
                'sodium' => '0.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'とろけるダブルショコラ',
                'price' => '150',
                'calories' => '193',
                'protein' => '3.6',
                'fat' => '12.5',
                'carb' => '17.6',
                'sodium' => '0.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'チーズアイス',
                'price' => '180',
                'calories' => '175',
                'protein' => '4.4',
                'fat' => '10.5',
                'carb' => '15.6',
                'sodium' => '0.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'コカ・コーラ(M)',
                'price' => '110',
                'calories' => '99',
                'protein' => '0.0',
                'fat' => '0.0',
                'carb' => '24.8',
                'sodium' => '0.01',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'コカ・コーラ(L)',
                'price' => '160',
                'calories' => '133',
                'protein' => '0.0',
                'fat' => '0.0',
                'carb' => '33.5',
                'sodium' => '0.02',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ミニッツメイドオレンジ(M)',
                'price' => '110',
                'calories' => '108',
                'protein' => '0.5',
                'fat' => '0.2',
                'carb' => '24.6',
                'sodium' => '0.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ミニッツメイドオレンジ(L)',
                'price' => '160',
                'calories' => '146',
                'protein' => '0.6',
                'fat' => '0.3',
                'carb' => '33.2',
                'sodium' => '0.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ファンタメロン(M)',
                'price' => '110',
                'calories' => '110',
                'protein' => '0.0',
                'fat' => '0.0',
                'carb' => '27.6',
                'sodium' => '0.01',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ファンタメロン(L)',
                'price' => '160',
                'calories' => '149',
                'protein' => '0.0',
                'fat' => '0.0',
                'carb' => '37.2',
                'sodium' => '0.02',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'カルピス(M)',
                'price' => '110',
                'calories' => '122',
                'protein' => '0.5',
                'fat' => '0.0',
                'carb' => '29.9',
                'sodium' => '0.02',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'カルピス(L)',
                'price' => '160',
                'calories' => '164',
                'protein' => '0.6',
                'fat' => '0.0',
                'carb' => '40.3',
                'sodium' => '0.02',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '緑茶',
                'price' => '110',
                'calories' => '0',
                'protein' => '0.5',
                'fat' => '0.0',
                'carb' => '0.0',
                'sodium' => '0.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '黒烏龍茶',
                'price' => '110',
                'calories' => '5',
                'protein' => '0.5',
                'fat' => '0.0',
                'carb' => '0.5',
                'sodium' => '0.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ホットコーヒー',
                'price' => '110',
                'calories' => '7',
                'protein' => '0.4',
                'fat' => '0.0',
                'carb' => '1.2',
                'sodium' => '0.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'アイスコーヒー(M)',
                'price' => '110',
                'calories' => '4',
                'protein' => '0.2',
                'fat' => '0.0',
                'carb' => '0.8',
                'sodium' => '0.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'アイスコーヒー(L)',
                'price' => '160',
                'calories' => '6',
                'protein' => '0.3',
                'fat' => '0.0',
                'carb' => '1.0',
                'sodium' => '0.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'りんごジュース',
                'price' => '110',
                'calories' => '78',
                'protein' => '0.2',
                'fat' => '0.0',
                'carb' => '21.4',
                'sodium' => '0.02',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'やさいとフルーツジュース',
                'price' => '110',
                'calories' => '80',
                'protein' => '0.0',
                'fat' => '0.0',
                'carb' => '19.2',
                'sodium' => '0.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ビール(中瓶)',
                'price' => '420',
                'calories' => '210',
                'protein' => '2.0',
                'fat' => '0.0',
                'carb' => '15.0',
                'sodium' => '0.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ノンアルコールビール',
                'price' => '270',
                'calories' => '0',
                'protein' => '0.0',
                'fat' => '0.0',
                'carb' => '0.0',
                'sodium' => '0.03',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],

        ]);
    }
}
