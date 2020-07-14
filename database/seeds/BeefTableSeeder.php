<?php

use Illuminate\Database\Seeder;

class BeefTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beefs')->insert([
            [
                'name' => '牛丼(ミニ)',
                'price' => '290',
                'calories' => '496',
                'protein' => '15.7',
                'fat' => '17.2',
                'carb' => '69.8',
                'sodium' => '1.8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛丼(並盛)',
                'price' => '350',
                'calories' => '733',
                'protein' => '22.9',
                'fat' => '25.0',
                'carb' => '104.1',
                'sodium' => '2.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛丼(中盛)',
                'price' => '480',
                'calories' => '798',
                'protein' => '28.3',
                'fat' => '35.7',
                'carb' => '91.1',
                'sodium' => '3.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛丼(大盛)',
                'price' => '480',
                'calories' => '966',
                'protein' => '30.1',
                'fat' => '32.5',
                'carb' => '138.7',
                'sodium' => '3.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛丼(特盛)',
                'price' => '630',
                'calories' => '1176',
                'protein' => '40.4',
                'fat' => '49.0',
                'carb' => '143.7',
                'sodium' => '4.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛丼(メガ)',
                'price' => '780',
                'calories' => '1458',
                'protein' => '54.3',
                'fat' => '71.0',
                'carb' => '150.9',
                'sodium' => '5.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'おろしポン酢牛丼(ミニ)',
                'price' => '420',
                'calories' => '517',
                'protein' => '16.8',
                'fat' => '17.3',
                'carb' => '74.0',
                'sodium' => '3.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'おろしポン酢牛丼(並盛)',
                'price' => '480',
                'calories' => '754',
                'protein' => '24.1',
                'fat' => '25.1',
                'carb' => '108.3',
                'sodium' => '3.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'おろしポン酢牛丼(中盛)',
                'price' => '610',
                'calories' => '819',
                'protein' => '29.4',
                'fat' => '35.8',
                'carb' => '95.2',
                'sodium' => '4.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'おろしポン酢牛丼(大盛)',
                'price' => '610',
                'calories' => '987',
                'protein' => '31.2',
                'fat' => '32.6',
                'carb' => '142.8',
                'sodium' => '4.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'おろしポン酢牛丼(特盛)',
                'price' => '760',
                'calories' => '1197',
                'protein' => '41.5',
                'fat' => '49.1',
                'carb' => '147.9',
                'sodium' => '5.6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'おろしポン酢牛丼(メガ盛)',
                'price' => '910',
                'calories' => '1479',
                'protein' => '55.4',
                'fat' => '71.1',
                'carb' => '155.0',
                'sodium' => '7.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ネギ玉牛丼(ミニ)',
                'price' => '420',
                'calories' => '606',
                'protein' => '23.5',
                'fat' => '23.7',
                'carb' => '74.4',
                'sodium' => '2.6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ネギ玉牛丼(並盛)',
                'price' => '480',
                'calories' => '843',
                'protein' => '30.7',
                'fat' => '31.5',
                'carb' => '108.7',
                'sodium' => '3.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ネギ玉牛丼(中盛)',
                'price' => '610',
                'calories' => '909',
                'protein' => '36.1',
                'fat' => '42.2',
                'carb' => '95.7',
                'sodium' => '3.8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ネギ玉牛丼(大盛)',
                'price' => '610',
                'calories' => '1076',
                'protein' => '37.9',
                'fat' => '39.0',
                'carb' => '143.3',
                'sodium' => '4.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ネギ玉牛丼(特盛)',
                'price' => '760',
                'calories' => '1286',
                'protein' => '48.2',
                'fat' => '55.5',
                'carb' => '148.3',
                'sodium' => '5.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ネギ玉牛丼(メガ盛)',
                'price' => '910',
                'calories' => '1568',
                'protein' => '62.1',
                'fat' => '77.5',
                'carb' => '155.5',
                'sodium' => '6.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '３種のチーズ牛丼(ミニ)',
                'price' => '440',
                'calories' => '674',
                'protein' => '27.0',
                'fat' => '30.5',
                'carb' => '73.3',
                'sodium' => '2.8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '３種のチーズ牛丼(並盛)',
                'price' => '500',
                'calories' => '911',
                'protein' => '34.3',
                'fat' => '38.4',
                'carb' => '107.7',
                'sodium' => '3.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '３種のチーズ牛丼(中盛)',
                'price' => '630',
                'calories' => '976',
                'protein' => '39.6',
                'fat' => '49.1',
                'carb' => '94.6',
                'sodium' => '3.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '３種のチーズ牛丼(大盛)',
                'price' => '630',
                'calories' => '1144',
                'protein' => '41.4',
                'fat' => '45.9',
                'carb' => '142.2',
                'sodium' => '4.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '３種のチーズ牛丼(特盛)',
                'price' => '780',
                'calories' => '1354',
                'protein' => '51.7',
                'fat' => '62.3',
                'carb' => '147.3',
                'sodium' => '5.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '３種のチーズ牛丼(メガ盛)',
                'price' => '930',
                'calories' => '1636',
                'protein' => '65.6',
                'fat' => '84.4',
                'carb' => '154.4',
                'sodium' => '6.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'わさび山かけ牛丼(ミニ)',
                'price' => '420',
                'calories' => '543',
                'protein' => '17.3',
                'fat' => '17.4',
                'carb' => '80.0',
                'sodium' => '2.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'わさび山かけ牛丼(並盛)',
                'price' => '480',
                'calories' => '780',
                'protein' => '24.5',
                'fat' => '25.3',
                'carb' => '114.3',
                'sodium' => '2.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'わさび山かけ牛丼(中盛)',
                'price' => '610',
                'calories' => '845',
                'protein' => '29.9',
                'fat' => '36.0',
                'carb' => '101.2',
                'sodium' => '3.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'わさび山かけ牛丼(大盛)',
                'price' => '610',
                'calories' => '1013',
                'protein' => '31.7',
                'fat' => '32.7',
                'carb' => '148.8',
                'sodium' => '3.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'わさび山かけ牛丼(特盛)',
                'price' => '760',
                'calories' => '1223',
                'protein' => '42.0',
                'fat' => '49.2',
                'carb' => '153.9',
                'sodium' => '4.6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'わさび山かけ牛丼(メガ盛)',
                'price' => '910',
                'calories' => '1505',
                'protein' => '55.9',
                'fat' => '71.2',
                'carb' => '161.0',
                'sodium' => '6.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'かつぶしオクラ牛丼(ミニ盛)',
                'price' => '420',
                'calories' => '526',
                'protein' => '18.2',
                'fat' => '17.3',
                'carb' => '75.7',
                'sodium' => '2.8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'かつぶしオクラ牛丼(並盛)',
                'price' => '480',
                'calories' => '763',
                'protein' => '25.4',
                'fat' => '25.1',
                'carb' => '110.0',
                'sodium' => '3.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'かつぶしオクラ牛丼(中盛)',
                'price' => '610',
                'calories' => '829',
                'protein' => '30.8',
                'fat' => '35.8',
                'carb' => '97.0',
                'sodium' => '4.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'かつぶしオクラ牛丼(大盛)',
                'price' => '610',
                'calories' => '996',
                'protein' => '32.5',
                'fat' => '32.6',
                'carb' => '144.6',
                'sodium' => '4.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'かつぶしオクラ牛丼(特盛)',
                'price' => '760',
                'calories' => '1206',
                'protein' => '42.8',
                'fat' => '49.1',
                'carb' => '149.6',
                'sodium' => '5.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'かつぶしオクラ牛丼(メガ盛)',
                'price' => '910',
                'calories' => '1488',
                'protein' => '56.7',
                'fat' => '71.1',
                'carb' => '156.7',
                'sodium' => '7.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '高菜明太マヨ牛丼(ミニ)',
                'price' => '420',
                'calories' => '599',
                'protein' => '17.5',
                'fat' => '26.7',
                'carb' => '73.8',
                'sodium' => '3.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '高菜明太マヨ牛丼(並盛)',
                'price' => '480',
                'calories' => '836',
                'protein' => '24.7',
                'fat' => '34.6',
                'carb' => '108.1',
                'sodium' => '4.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '高菜明太マヨ牛丼(中盛)',
                'price' => '610',
                'calories' => '901',
                'protein' => '30.1',
                'fat' => '45.3',
                'carb' => '95.0',
                'sodium' => '4.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '高菜明太マヨ牛丼(大盛)',
                'price' => '610',
                'calories' => '1069',
                'protein' => '31.8',
                'fat' => '42.0',
                'carb' => '142.7',
                'sodium' => '5.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '高菜明太マヨ牛丼(特盛)',
                'price' => '760',
                'calories' => '1279',
                'protein' => '42.1',
                'fat' => '58.5',
                'carb' => '147.7',
                'sodium' => '6.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '高菜明太マヨ牛丼(メガ)',
                'price' => '910',
                'calories' => '1561',
                'protein' => '56.0',
                'fat' => '80.5',
                'carb' => '154.8',
                'sodium' => '7.8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'キムチ牛丼(ミニ)',
                'price' => '420',
                'calories' => '524',
                'protein' => '17.6',
                'fat' => '17.5',
                'carb' => '75.2',
                'sodium' => '3.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'キムチ牛丼(並盛)',
                'price' => '480',
                'calories' => '761',
                'protein' => '24.8',
                'fat' => '25.4',
                'carb' => '109.5',
                'sodium' => '4.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'キムチ牛丼(中盛)',
                'price' => '610',
                'calories' => '826',
                'protein' => '30.2',
                'fat' => '36.1',
                'carb' => '96.4',
                'sodium' => '5.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'キムチ牛丼(大盛)',
                'price' => '610',
                'calories' => '994',
                'protein' => '32.0',
                'fat' => '32.8',
                'carb' => '144.0',
                'sodium' => '5.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'キムチ牛丼(特盛)',
                'price' => '760',
                'calories' => '1204',
                'protein' => '42.3',
                'fat' => '49.3',
                'carb' => '149.1',
                'sodium' => '6.6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'キムチ牛丼(メガ盛)',
                'price' => '910',
                'calories' => '1486',
                'protein' => '56.2',
                'fat' => '71.3',
                'carb' => '156.2',
                'sodium' => '8.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ニンニクの芽牛丼(ミニ盛)',
                'price' => '440',
                'calories' => '566',
                'protein' => '17.5',
                'fat' => '20.8',
                'carb' => '78.6',
                'sodium' => '2.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ニンニクの芽牛丼(並盛)',
                'price' => '500',
                'calories' => '802',
                'protein' => '24.8',
                'fat' => '28.7',
                'carb' => '112.9',
                'sodium' => '3.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ニンニクの芽牛丼(中盛)',
                'price' => '630',
                'calories' => '868',
                'protein' => '30.1',
                'fat' => '39.4',
                'carb' => '99.8',
                'sodium' => '3.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ニンニクの芽牛丼(大盛)',
                'price' => '630',
                'calories' => '1036',
                'protein' => '31.9',
                'fat' => '36.1',
                'carb' => '147.4',
                'sodium' => '4.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ニンニクの芽牛丼(特盛)',
                'price' => '780',
                'calories' => '1245',
                'protein' => '42.2',
                'fat' => '52.6',
                'carb' => '152.5',
                'sodium' => '5.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'ニンニクの芽牛丼(メガ盛)',
                'price' => '930',
                'calories' => '1528',
                'protein' => '56.1',
                'fat' => '74.6',
                'carb' => '159.6',
                'sodium' => '6.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        ]);
    }
}
