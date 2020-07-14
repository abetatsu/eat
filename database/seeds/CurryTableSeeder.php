<?php

use Illuminate\Database\Seeder;

class CurryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('curries')->insert([
            [
                'name' => 'サラ旨ポークカレー(ミニ)',
                'price' => '390',
                'calories' => '413',
                'protein' => '12.8',
                'fat' => '6.8',
                'carb' => '76.1',
                'sodium' => '2.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'サラ旨ポークカレー(並盛)',
                'price' => '490',
                'calories' => '752',
                'protein' => '24.3',
                'fat' => '13.4',
                'carb' => '135.2',
                'sodium' => '4.8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'サラ旨ポークカレー(1.5盛)',
                'price' => '600',
                'calories' => '883',
                'protein' => '32.4',
                'fat' => '19.3',
                'carb' => '147.4',
                'sodium' => '7.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'サラ旨ポークカレー(大盛)',
                'price' => '630',
                'calories' => '1101',
                'protein' => '36.1',
                'fat' => '20.0',
                'carb' => '196.9',
                'sodium' => '8.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'サラ旨ポークカレー(特盛)',
                'price' => '730',
                'calories' => '1232',
                'protein' => '44.1',
                'fat' => '25.9',
                'carb' => '209.1',
                'sodium' => '10.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛あいがけカレー(ミニ)',
                'price' => '590',
                'calories' => '622',
                'protein' => '23.2',
                'fat' => '22.9',
                'carb' => '81.8',
                'sodium' => '3.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛あいがけカレー(並盛)',
                'price' => '690',
                'calories' => '961',
                'protein' => '34.7',
                'fat' => '29.5',
                'carb' => '140.9',
                'sodium' => '6.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛あいがけカレー(1.5盛)',
                'price' => '800',
                'calories' => '1092',
                'protein' => '42.7',
                'fat' => '35.3',
                'carb' => '153.1',
                'sodium' => '8.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛あいがけカレー(大盛)',
                'price' => '830',
                'calories' => '1310',
                'protein' => '46.4',
                'fat' => '36.1',
                'carb' => '202.6',
                'sodium' => '9.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛あいがけカレー(特盛)',
                'price' => '930',
                'calories' => '1441',
                'protein' => '54.5',
                'fat' => '42.0',
                'carb' => '214.8',
                'sodium' => '11.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'おんたまカレー(ミニ)',
                'price' => '470',
                'calories' => '497',
                'protein' => '19.6',
                'fat' => '12.6',
                'carb' => '76.2',
                'sodium' => '2.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'おんたまカレー(並盛)',
                'price' => '570',
                'calories' => '836',
                'protein' => '31.2',
                'fat' => '19.1',
                'carb' => '135.4',
                'sodium' => '5.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'おんたまカレー(1.5盛)',
                'price' => '680',
                'calories' => '967',
                'protein' => '39.2',
                'fat' => '25.0',
                'carb' => '147.6',
                'sodium' => '7.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'おんたまカレー(大盛)',
                'price' => '710',
                'calories' => '1185',
                'protein' => '42.9',
                'fat' => '25.7',
                'carb' => '197.1',
                'sodium' => '8.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'おんたまカレー(特盛)',
                'price' => '810',
                'calories' => '1317',
                'protein' => '51.0',
                'fat' => '31.6',
                'carb' => '209.3',
                'sodium' => '10.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'とろ〜りチーズカレー(ミニ)',
                'price' => '540',
                'calories' => '591',
                'protein' => '24.1',
                'fat' => '20.2',
                'carb' => '79.6',
                'sodium' => '3.6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'とろ〜りチーズカレー(並盛)',
                'price' => '640',
                'calories' => '930',
                'protein' => '35.7',
                'fat' => '26.8',
                'carb' => '138.7',
                'sodium' => '5.8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'とろ〜りチーズカレー(1.5盛)',
                'price' => '750',
                'calories' => '1061',
                'protein' => '43.7',
                'fat' => '32.6',
                'carb' => '150.9',
                'sodium' => '7.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'とろ〜りチーズカレー(大盛)',
                'price' => '780',
                'calories' => '1279',
                'protein' => '47.4',
                'fat' => '33.4',
                'carb' => '200.4',
                'sodium' => '8.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'とろ〜りチーズカレー(特盛)',
                'price' => '880',
                'calories' => '1410',
                'protein' => '55.5',
                'fat' => '39.2',
                'carb' => '212.6',
                'sodium' => '11.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'デラックスカレー(ミニ)',
                'price' => '740',
                'calories' => '884',
                'protein' => '41.4',
                'fat' => '42.0',
                'carb' => '85.4',
                'sodium' => '5.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'デラックスカレー(並盛)',
                'price' => '840',
                'calories' => '1223',
                'protein' => '52.9',
                'fat' => '48.6',
                'carb' => '144.6',
                'sodium' => '7.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'デラックスカレー(1.5盛)',
                'price' => '950',
                'calories' => '1354',
                'protein' => '60.9',
                'fat' => '54.5',
                'carb' => '156.8',
                'sodium' => '9.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'デラックスカレー(大盛)',
                'price' => '980',
                'calories' => '1572',
                'protein' => '64.6',
                'fat' => '55.2',
                'carb' => '206.3',
                'sodium' => '10.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'デラックスカレー(特盛)',
                'price' => '1080',
                'calories' => '1704',
                'protein' => '72.7',
                'fat' => '61.1',
                'carb' => '218.5',
                'sodium' => '12.6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'からあげカレー(ミニ)',
                'price' => '580',
                'calories' => '659',
                'protein' => '33.0',
                'fat' => '20.5',
                'carb' => '86.4',
                'sodium' => '4.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'からあげカレー(並盛)',
                'price' => '680',
                'calories' => '997',
                'protein' => '44.6',
                'fat' => '27.0',
                'carb' => '145.6',
                'sodium' => '6.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'からあげカレー(1.5盛)',
                'price' => '790',
                'calories' => '1128',
                'protein' => '52.6',
                'fat' => '32.9',
                'carb' => '157.8',
                'sodium' => '8.6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'からあげカレー(大盛)',
                'price' => '820',
                'calories' => '1347',
                'protein' => '56.3',
                'fat' => '33.7',
                'carb' => '207.2',
                'sodium' => '9.6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'からあげカレー(特盛)',
                'price' => '920',
                'calories' => '1478',
                'protein' => '64.3',
                'fat' => '39.5',
                'carb' => '219.5',
                'sodium' => '11.8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'オクラカレー(ミニ)',
                'price' => '520',
                'calories' => '449',
                'protein' => '15.4',
                'fat' => '6.9',
                'carb' => '83.2',
                'sodium' => '4.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'オクラカレー(並盛)',
                'price' => '620',
                'calories' => '788',
                'protein' => '26.9',
                'fat' => '13.5',
                'carb' => '142.4',
                'sodium' => '6.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'オクラカレー(1.5盛)',
                'price' => '730',
                'calories' => '919',
                'protein' => '34.9',
                'fat' => '19.4',
                'carb' => '154.6',
                'sodium' => '8.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'オクラカレー(大盛)',
                'price' => '760',
                'calories' => '1148',
                'protein' => '38.9',
                'fat' => '20.2',
                'carb' => '206.6',
                'sodium' => '10.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'オクラカレー(特盛)',
                'price' => '860',
                'calories' => '1279',
                'protein' => '46.9',
                'fat' => '26.0',
                'carb' => '218.8',
                'sodium' => '12.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ニンニクの芽カレー(ミニ)',
                'price' => '540',
                'calories' => '488',
                'protein' => '14.7',
                'fat' => '10.5',
                'carb' => '86.1',
                'sodium' => '4.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ニンニクの芽カレー(並盛)',
                'price' => '640',
                'calories' => '827',
                'protein' => '26.3',
                'fat' => '17.0',
                'carb' => '145.2',
                'sodium' => '6.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ニンニクの芽カレー(1.5盛)',
                'price' => '750',
                'calories' => '958',
                'protein' => '34.3',
                'fat' => '22.9',
                'carb' => '157.4',
                'sodium' => '8.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ニンニクの芽カレー(大盛)',
                'price' => '780',
                'calories' => '1187',
                'protein' => '38.3',
                'fat' => '23.7',
                'carb' => '209.4',
                'sodium' => '10.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ニンニクの芽カレー(特盛)',
                'price' => '880',
                'calories' => '1318',
                'protein' => '46.3',
                'fat' => '29.5',
                'carb' => '221.7',
                'sodium' => '12.6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
        ]);
    }
}
