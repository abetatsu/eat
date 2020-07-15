<?php

use Illuminate\Database\Seeder;

class SetmealTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setmeals')->insert([
            [
                'name' => '牛皿定食(肉並盛)',
                'price' => '560',
                'calories' => '872',
                'protein' => '33.3',
                'fat' => '32.6',
                'carb' => '111.0',
                'sodium' => '6.2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛皿定食(肉中盛)',
                'price' => '690',
                'calories' => '1014',
                'protein' => '40.3',
                'fat' => '43.6',
                'carb' => '114.7',
                'sodium' => '7.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛皿定食(肉2倍盛)',
                'price' => '790',
                'calories' => '1177',
                'protein' => '48.4',
                'fat' => '56.0',
                'carb' => '119.3',
                'sodium' => '8.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'おろしポン酢牛皿定食(肉並盛)',
                'price' => '630',
                'calories' => '809',
                'protein' => '27.5',
                'fat' => '27.0',
                'carb' => '114.9',
                'sodium' => '7.3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'おろしポン酢牛皿定食(肉中盛)',
                'price' => '760',
                'calories' => '952',
                'protein' => '34.6',
                'fat' => '38.0',
                'carb' => '118.7',
                'sodium' => '8.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => 'おろしポン酢牛皿定食(肉2倍盛)',
                'price' => '860',
                'calories' => '1114',
                'protein' => '42.7',
                'fat' => '50.4',
                'carb' => '123.3',
                'sodium' => '9.1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '鮭定食(ごはんミニ)',
                'price' => '490',
                'calories' => '488',
                'protein' => '22.6',
                'fat' => '13.3',
                'carb' => '70.5',
                'sodium' => '4.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '鮭定食(ごはん並)',
                'price' => '520',
                'calories' => '626',
                'protein' => '24.9',
                'fat' => '13.8',
                'carb' => '101.8',
                'sodium' => '4.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '鮭定食(ごはん大盛)',
                'price' => '550',
                'calories' => '764',
                'protein' => '27.2',
                'fat' => '14.3',
                'carb' => '133.1',
                'sodium' => '4.9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '納豆定食(ごはんミニ)',
                'price' => '380',
                'calories' => '530',
                'protein' => '24.2',
                'fat' => '13.7',
                'carb' => '77.2',
                'sodium' => '4.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '納豆定食(ごはん並)',
                'price' => '410',
                'calories' => '669',
                'protein' => '26.5',
                'fat' => '14.1',
                'carb' => '108.5',
                'sodium' => '4.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '納豆定食(ごはん大盛)',
                'price' => '440',
                'calories' => '807',
                'protein' => '28.8',
                'fat' => '14.6',
                'carb' => '139.8',
                'sodium' => '4.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '鮭納豆定食(ごはんミニ)',
                'price' => '580',
                'calories' => '683',
                'protein' => '38.0',
                'fat' => '24.2',
                'carb' => '77.9',
                'sodium' => '5.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '鮭納豆定食(ごはん並)',
                'price' => '610',
                'calories' => '821',
                'protein' => '40.4',
                'fat' => '24.6',
                'carb' => '109.1',
                'sodium' => '5.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '鮭納豆定食(ごはん大盛)',
                'price' => '640',
                'calories' => '960',
                'protein' => '42.7',
                'fat' => '25.1',
                'carb' => '140.4',
                'sodium' => '5.7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛カルビ定食(並盛)',
                'price' => '680',
                'calories' => '749',
                'protein' => '34.3',
                'fat' => '16.8',
                'carb' => '117.3',
                'sodium' => '6.6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛カルビ定食(肉1.5倍盛)',
                'price' => '800',
                'calories' => '841',
                'protein' => '44.1',
                'fat' => '22.6',
                'carb' => '117.4',
                'sodium' => '7.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'name' => '牛カルビ定食(肉2倍盛)',
                'price' => '920',
                'calories' => '988',
                'protein' => '56.1',
                'fat' => '29.1',
                'carb' => '127.7',
                'sodium' => '9.8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
        ]);
    }
}
