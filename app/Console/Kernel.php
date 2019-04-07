<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Carbon\Carbon;

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
        $schedule->call(function () {
            $adverticements = App\Adverticements::with('usersubscriptions', 'user')->all();
            $current_timestamp = strtotime(Carbon::now()->timestamp);
            foreach ($adverticements as $value) {
                $created_timestamp = strtotime($value->created_at);
                $difference = $current_timestamp - $created_timestamp
                if ( $difference >= 2){
                    $finish_free = App\UserSubscription::findOrFail($value->id)- >update(["status"=>'disabled']);
                    $finish_free->save();
                }
            }
        })->everyMinute();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
