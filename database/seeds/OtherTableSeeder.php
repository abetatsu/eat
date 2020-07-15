<?php

use Illuminate\Database\Seeder;

class OtherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('others')->insert([

            [
                'name' => 'オニオンサーモン丼(並盛)',
                'price' => '680',
                'calories' => '666',
                'protein' => '24.7',
                'fat' => '17.1',
                'carb' => '105.1',
                'sodium' => '2.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'オニオンサーモン丼(ごはん大盛)',
                'price' => '710',
                'calories' => '808',
                'protein' => '27.1',
                'fat' => '17.6',
                'carb' => '137.2',
                'sodium' => '2.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'オニオンサーモン丼(特盛[サーモン2倍ごはん大盛])',
                'price' => '950',
                'calories' => '993',
                'protein' => '42.9',
                'fat' => '30.6',
                'carb' => '138.6',
                'sodium' => '3.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'まぐろたたき丼(並盛)',
                'price' => '590',
                'calories' => '609',
                'protein' => '30.0',
                'fat' => '10.2',
                'carb' => '99.0',
                'sodium' => '1.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'まぐろたたき丼(ごはん大盛)',
                'price' => '620',
                'calories' => '752',
                'protein' => '32.4',
                'fat' => '10.7',
                'carb' => '131.1',
                'sodium' => '1.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'まぐろたたき丼(特盛[まぐろたたき2倍ごはん大盛])',
                'price' => '850',
                'calories' => '927',
                'protein' => '54.2',
                'fat' => '19.3',
                'carb' => '132.0',
                'sodium' => '1.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'まぐろユッケ丼(並盛)',
                'price' => '660',
                'calories' => '715',
                'protein' => '37.5',
                'fat' => '16.8',
                'carb' => '101.9',
                'sodium' => '2.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'まぐろユッケ丼(ごはん大盛)',
                'price' => '690',
                'calories' => '857',
                'protein' => '39.9',
                'fat' => '17.3',
                'carb' => '134.1',
                'sodium' => '2.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'まぐろユッケ丼(特盛[まぐろたたき2倍ごはん大盛])',
                'price' => '920',
                'calories' => '1058',
                'protein' => '62.4',
                'fat' => '26.9',
                'carb' => '138.5',
                'sodium' => '3.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'とろうま豚中華丼(並盛)',
                'price' => '650',
                'calories' => '818',
                'protein' => '26.0',
                'fat' => '35.1',
                'carb' => '100.9',
                'sodium' => '3.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'とろうま豚中華丼(ごはん大盛)',
                'price' => '680',
                'calories' => '957',
                'protein' => '28.3',
                'fat' => '35.5',
                'carb' => '132.2',
                'sodium' => '3.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'とりそぼろ丼(並盛)',
                'price' => '360',
                'calories' => '579',
                'protein' => '31.0',
                'fat' => '11.9',
                'carb' => '86.9',
                'sodium' => '2.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'とりそぼろ丼(ごはん大盛)',
                'price' => '390',
                'calories' => '648',
                'protein' => '32.2',
                'fat' => '12.1',
                'carb' => '102.6',
                'sodium' => '2.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'とりそぼろ丼(特盛[とりそぼろ2倍ごはん1.4倍])',
                'price' => '590',
                'calories' => '928',
                'protein' => '52.1',
                'fat' => '17.2',
                'carb' => '141.4',
                'sodium' => '3.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'うな丼(並盛)',
                'price' => '790',
                'calories' => '671',
                'protein' => '23.3',
                'fat' => '18.1',
                'carb' => '104.2',
                'sodium' => '1.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'うな丼(ごはん大盛)',
                'price' => '830',
                'calories' => '817',
                'protein' => '25.8',
                'fat' => '18.6',
                'carb' => '137.4',
                'sodium' => '2.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '特うな丼(うなぎ2枚ごはん大盛)',
                'price' => '1280',
                'calories' => '1049',
                'protein' => '41.7',
                'fat' => '35.2',
                'carb' => '142.0',
                'sodium' => '2.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'うな牛(並盛)',
                'price' => '890',
                'calories' => '880',
                'protein' => '33.7',
                'fat' => '34.2',
                'carb' => '109.9',
                'sodium' => '3.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'うな牛(ごはん大盛)',
                'price' => '930',
                'calories' => '1026',
                'protein' => '36.2',
                'fat' => '34.7',
                'carb' => '143.1',
                'sodium' => '3.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'うな牛(特盛[うなぎ2枚ごはん大盛])',
                'price' => '1380',
                'calories' => '1258',
                'protein' => '52.1',
                'fat' => '51.3',
                'carb' => '147.7',
                'sodium' => '4.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'うなたま丼(並盛)',
                'price' => '870',
                'calories' => '755',
                'protein' => '30.2',
                'fat' => '23.8',
                'carb' => '104.4',
                'sodium' => '1.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'うなたま丼(ごはん大盛)',
                'price' => '910',
                'calories' => '901',
                'protein' => '32.7',
                'fat' => '24.3',
                'carb' => '137.5',
                'sodium' => '2.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'うなたま丼(特盛[うなぎ2枚ごはん大盛])',
                'price' => '1360',
                'calories' => '1133',
                'protein' => '48.6',
                'fat' => '41.0',
                'carb' => '142.2',
                'sodium' => '3.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'うなとろ丼(並盛)',
                'price' => '890',
                'calories' => '718',
                'protein' => '24.9',
                'fat' => '18.3',
                'carb' => '114.4',
                'sodium' => '1.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'うなとろ丼(ごはん大盛)',
                'price' => '930',
                'calories' => '864',
                'protein' => '27.4',
                'fat' => '18.8',
                'carb' => '147.5',
                'sodium' => '2.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'うなとろ丼(特盛[うなぎ2枚ごはん大盛])',
                'price' => '1380',
                'calories' => '1095',
                'protein' => '43.3',
                'fat' => '35.5',
                'carb' => '152.1',
                'sodium' => '3.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛カルビ丼(並盛)',
                'price' => '550',
                'calories' => '657',
                'protein' => '28.8',
                'fat' => '14.0',
                'carb' => '104.2',
                'sodium' => '3.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛カルビ丼(肉1.5倍盛[肉1.5盛ごはん並盛])',
                'price' => '670',
                'calories' => '749',
                'protein' => '38.7',
                'fat' => '19.8',
                'carb' => '104.3',
                'sodium' => '4.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛カルビ丼(大盛[肉2倍ごはん大盛])',
                'price' => '790',
                'calories' => '1035',
                'protein' => '53.0',
                'fat' => '26.8',
                'carb' => '145.8',
                'sodium' => '6.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛カルビ丼ナムルセット(並盛)',
                'price' => '720',
                'calories' => '722',
                'protein' => '32.9',
                'fat' => '16.5',
                'carb' => '111.6',
                'sodium' => '6.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛カルビ丼ナムルセット(肉1.5倍盛[肉1.5盛ごはん並盛])',
                'price' => '840',
                'calories' => '814',
                'protein' => '42.8',
                'fat' => '22.3',
                'carb' => '111.6',
                'sodium' => '7.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛カルビ丼ナムルセット(大盛[肉2倍ごはん大盛])',
                'price' => '960',
                'calories' => '1100',
                'protein' => '57.0',
                'fat' => '29.3',
                'carb' => '153.1',
                'sodium' => '9.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ナムル牛カルビ丼(並盛)',
                'price' => '680',
                'calories' => '677',
                'protein' => '30.2',
                'fat' => '14.9',
                'carb' => '106.4',
                'sodium' => '3.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ナムル牛カルビ丼(肉1.5倍盛[肉1.5盛ごはん並盛])',
                'price' => '800',
                'calories' => '768',
                'protein' => '40.1',
                'fat' => '20.7',
                'carb' => '106.5',
                'sodium' => '4.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ナムル牛カルビ丼(大盛[肉2倍ごはん大盛])',
                'price' => '920',
                'calories' => '1054',
                'protein' => '54.3',
                'fat' => '27.7',
                'carb' => '148.0',
                'sodium' => '7.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'チーズ牛カルビ丼(並盛)',
                'price' => '700',
                'calories' => '836',
                'protein' => '40.2',
                'fat' => '27.4',
                'carb' => '107.8',
                'sodium' => '4.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'チーズ牛カルビ丼(肉1.5倍盛[肉1.5盛ごはん並盛])',
                'price' => '820',
                'calories' => '927',
                'protein' => '50.0',
                'fat' => '33.2',
                'carb' => '107.8',
                'sodium' => '5.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'チーズ牛カルビ丼(大盛[肉2倍ごはん大盛])',
                'price' => '940',
                'calories' => '1213',
                'protein' => '64.3',
                'fat' => '40.2',
                'carb' => '149.4',
                'sodium' => '7.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'キムチ牛カルビ丼(並盛)',
                'price' => '680',
                'calories' => '671',
                'protein' => '29.8',
                'fat' => '14.2',
                'carb' => '106.9',
                'sodium' => '4.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'キムチ牛カルビ丼(肉1.5倍盛[肉1.5盛ごはん並盛])',
                'price' => '800',
                'calories' => '763',
                'protein' => '39.6',
                'fat' => '20.0',
                'carb' => '107.0',
                'sodium' => '5.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'キムチ牛カルビ丼(大盛[肉2倍ごはん大盛])',
                'price' => '920',
                'calories' => '1049',
                'protein' => '53.9',
                'fat' => '27.0',
                'carb' => '148.5',
                'sodium' => '7.6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
        ]);
        
    }
}
