<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;


class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function() {
         \DB::table('users')->where('id', '>', 0)
            ->update([
                'totalCalories' => 0,
                'totalProtein' => 0,
                'totalFat' => 0,
                'totalCarb' => 0,
                'totalSodium' => 0,
                'updated_at' => now()
         ]);
        })->daily();

        $schedule->call(function() {
            \DB::table('users')->where('id', '>', 0)
               ->update([
                   'totalWeekCalories' => 0,
                   'totalWeekProtein' => 0,
                   'totalWeekFat' => 0,
                   'totalWeekCarb' => 0,
                   'totalWeekSodium' => 0,
                   'updated_at' => now()
            ]);
           })->weeklyOn(2, '16:00');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
