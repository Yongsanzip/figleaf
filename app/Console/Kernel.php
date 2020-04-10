<?php

namespace App\Console;

use App\Project;
use App\Support;
use App\SupportLog;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Http\Request;

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
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule->call(function () {

        })->everyMinute();

        $schedule->call(function(){
            $now = Carbon::now();
            $today = $now->format('Y-m-d');
            $datas = Project::where('deadline', $today)->get();

            if (count($datas) > 0) {
                foreach ($datas as $data) {                                             // 프로젝트 마감일인 경우 완료처리 (성공 또는 실패)
                    $support = Support::where('project_id', $data->id)->where('condition', 2)->get();
                    $supporter_count = count($support);
                    $success_count = floor($data->success_count * 0.7);           // 70% 이상이면 성공
                    if ($supporter_count >= $success_count) {                           // 성공
                        $data->condition = 5;
                        $data->save();
                    } else {                                                            // 실패
                        $data->condition = 4;
                        $data->save();
                    }
                }
            }

            $util = new \INIStdPayUtil();
            $inicis = new Inicis();
            $request = new Request();
            $projects = Project::whereCondition(4)->get();
            $timestamp=Carbon::now()->format('YmdHis');
            foreach($projects as $project){
                foreach($project->supports as $support){
                    $response = $inicis->cancel(array(
                        "type"               =>"Refund",
                        "paymethod"          =>$support->inicis_payMethod,
                        "timestamp"          =>$timestamp,
                        "clientIp"           =>$request->getClientIp(),
                        "mid"                =>env('INICIS_MARKET_ID'),
                        "tid"                =>$support->inicis_tid,
                        "msg"                =>"프로젝트 목표달성 실",
                        "hashData"           =>$inicis->refundHash($support->inicis_payMethod,$timestamp,$request->getClientIp(),$support->inicis_tid),
                    ));
                    if($response->resultCode == 00){

                        foreach($support->support_options as $option){
                            SupportLog::create([
                                'support_id' => $support->id,
                                'support_option_id' => $option->id,
                                'amount' => $option->amount,
                                'price'  => $option->option->price,
                                'condition'=>12
                            ]);
                        }
                        $support->condition=12;
                        $support->save();

                    } else {
                        foreach($support->support_options as $option){
                            SupportLog::create([
                                'support_id' => $support->id,
                                'support_option_id' => $option->id,
                                'amount' => $option->amount,
                                'price'  => $option->option->price,
                                'condition'=>13
                            ]);
                        }
                        $support->condition=13;
                        $support->save();
                    }
                }
            }
        })->daily();
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
