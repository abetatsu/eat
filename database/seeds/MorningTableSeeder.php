<?php

use Illuminate\Database\Seeder;

class MorningTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mornings')->insert([
            [
                'name' => 'たまかけ朝食(ごはんミニ)',
                'price' => '220',
                'calories' => '496',
                'protein' => '15.4',
                'fat' => '14.2',
                'carb' => '76.2',
                'sodium' => '3.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'たまかけ朝食(ごはん並)',
                'price' => '250',
                'calories' => '634',
                'protein' => '17.8',
                'fat' => '14.7',
                'carb' => '107.5',
                'sodium' => '3.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'たまかけ朝食(ごはん大盛)',
                'price' => '280',
                'calories' => '733',
                'protein' => '20.1',
                'fat' => '15.1',
                'carb' => '138.8',
                'sodium' => '3.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '納豆朝食(ごはんミニ)',
                'price' => '300',
                'calories' => '605',
                'protein' => '23.5',
                'fat' => '19.2',
                'carb' => '82.8',
                'sodium' => '3.8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '納豆朝食(ごはん並)',
                'price' => '330',
                'calories' => '743',
                'protein' => '25.8',
                'fat' => '19.7',
                'carb' => '114.1',
                'sodium' => '3.8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '納豆朝食(ごはん大盛)',
                'price' => '360',
                'calories' => '881',
                'protein' => '28.1',
                'fat' => '20.2',
                'carb' => '145.4',
                'sodium' => '3.8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '鮭朝食(ごはんミニ)',
                'price' => '360',
                'calories' => '646',
                'protein' => '28.7',
                'fat' => '24.6',
                'carb' => '76.3',
                'sodium' => '4.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '鮭朝食(ごはん並)',
                'price' => '390',
                'calories' => '784',
                'protein' => '31.0',
                'fat' => '25.1',
                'carb' => '107.6',
                'sodium' => '4.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '鮭朝食(ごはん大盛)',
                'price' => '420',
                'calories' => '923',
                'protein' => '33.3',
                'fat' => '25.6',
                'carb' => '138.8',
                'sodium' => '4.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'さば朝食(ごはんミニ)',
                'price' => '360',
                'calories' => '682',
                'protein' => '26.2',
                'fat' => '28.6',
                'carb' => '79.0',
                'sodium' => '4.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'さば朝食(ごはん並)',
                'price' => '390',
                'calories' => '821',
                'protein' => '28.5',
                'fat' => '29.1',
                'carb' => '110.3',
                'sodium' => '4.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'さば朝食(ごはん大盛)',
                'price' => '420',
                'calories' => '959',
                'protein' => '30.9',
                'fat' => '29.6',
                'carb' => '141.5',
                'sodium' => '4.0',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'まぜのっけごはん朝食(ごはんミニ)',
                'price' => '320',
                'calories' => '532',
                'protein' => '21.2',
                'fat' => '16.5',
                'carb' => '74.0',
                'sodium' => '3.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'まぜのっけごはん朝食(ごはん並)',
                'price' => '350',
                'calories' => '670',
                'protein' => '23.5',
                'fat' => '17.0',
                'carb' => '105.3',
                'sodium' => '3.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'まぜのっけごはん朝食(ごはん大盛)',
                'price' => '380',
                'calories' => '808',
                'protein' => '25.8',
                'fat' => '17.5',
                'carb' => '136.5',
                'sodium' => '3.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '粗挽きソーセージ朝食(ごはんミニ[2枚盛])',
                'price' => '370',
                'calories' => '627',
                'protein' => '23.9',
                'fat' => '24.8',
                'carb' => '76.7',
                'sodium' => '4.6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '粗挽きソーセージ朝食(ごはん並[2枚盛])',
                'price' => '400',
                'calories' => '765',
                'protein' => '26.2',
                'fat' => '25.3',
                'carb' => '108.0',
                'sodium' => '4.6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '粗挽きソーセージ朝食(ごはん大盛[2枚盛])',
                'price' => '430',
                'calories' => '904',
                'protein' => '28.5',
                'fat' => '25.8',
                'carb' => '139.2',
                'sodium' => '4.6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '粗挽きソーセージ朝食(ごはん並[3枚盛])',
                'price' => '480',
                'calories' => '868',
                'protein' => '30.7',
                'fat' => '33.4',
                'carb' => '110.9',
                'sodium' => '5.5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '粗挽きソーセージ',
                'price' => '110',
                'calories' => '111',
                'protein' => '4.7',
                'fat' => '8.2',
                'carb' => '4.9',
                'sodium' => '1.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛小鉢',
                'price' => '110',
                'calories' => '110',
                'protein' => '5.6',
                'fat' => '8.1',
                'carb' => '3.8',
                'sodium' => '0.9',
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
                'name' => '牛丼モーニングセット(ミニ)',
                'price' => '450',
                'calories' => '737',
                'protein' => '29.0',
                'fat' => '31.4',
                'carb' => '84.0',
                'sodium' => '5.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛丼モーニングセット(並盛)',
                'price' => '500',
                'calories' => '974',
                'protein' => '36.3',
                'fat' => '39.2',
                'carb' => '118.3',
                'sodium' => '5.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛丼モーニングセット(中盛)',
                'price' => '600',
                'calories' => '1039',
                'protein' => '41.6',
                'fat' => '49.9',
                'carb' => '105.2',
                'sodium' => '6.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛丼モーニングセット(大盛)',
                'price' => '600',
                'calories' => '1207',
                'protein' => '43.4',
                'fat' => '46.7',
                'carb' => '152.9',
                'sodium' => '6.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛丼モーニングセット(特盛)',
                'price' => '780',
                'calories' => '1417',
                'protein' => '53.7',
                'fat' => '63.2',
                'carb' => '157.9',
                'sodium' => '7.8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛丼モーニングセット(メガ)',
                'price' => '930',
                'calories' => '1699',
                'protein' => '67.6',
                'fat' => '85.2',
                'carb' => '165.0',
                'sodium' => '9.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
        ]);
    }
}
