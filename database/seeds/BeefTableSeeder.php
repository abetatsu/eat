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
                'name' => 'ニンニクの芽牛丼(並盛)',
                'price' => '500',
                'calories' => '802',
                'protein' => '24.8',
                'fat' => '28.7',
                'carb' => '112.9',
                'sodium' => '3.4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        ]);
    }
}
