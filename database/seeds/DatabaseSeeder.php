<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BeefTableSeeder::class,
            CurryTableSeeder::class,
            MorningTableSeeder::class,
            OtherTableSeeder::class,
            SetmealTableSeeder::class,
            SidemenuTableSeeder::class
        ]);
    }
}
