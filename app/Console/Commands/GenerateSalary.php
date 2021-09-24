<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Holiday;
use App\Models\Salary;
use App\Models\Leaves;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class GenerateSalary extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:salary';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates employees salary every month on 10';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::beginTransaction();

        try
        {
            $users = User::active()
                ->lower("superadmin")
                ->joiningDate(Carbon::now()
                    ->subMonth()
                    ->endOfMonth()
                )
                ->joined()
                ->get();

            if($users->isNotEmpty())
            {
                $bar = $this->output->createProgressBar(count($users));

                $bar->start();

                $data = [];

                foreach ($users as $user)
                {
                    $salary = $this->performTask($user);

                    if($salary != false)
                    {
                        $data[] = [
                            'user_id' => $user->id,
                            'amount' => $salary,
                            'month' => Carbon::now()->subMonth()->format('m')
                        ];

                        $bar->advance();
                    }
                    else
                    {
                        Log::info("handle:GenerateSalary.php performTaskError");
                        return $this->error('Unable to generate salary. Please check logs');
                    }
                }
                
                if(Salary::insert($data))
                {
                    DB::commit();

                    $bar->finish();

                    return $this->info('Salary generated successfully');
                }
                else
                {
                    Log::info("handle:GenerateSalary.php insertError");
                    return $this->error('Unable to generate salary. Please check logs');
                }
            }

            Log::info("handle:GenerateSalary.php selectUsersError");
            return $this->error('No user records found');
        }
        catch(\Exception $e)
        {
            DB::rollback();
            Log::info("handle:GenerateSalary.php exception");
            Log::error($e);
            return $this->error('Unable to generate salary. Please check logs');
        }
    }

    public function performTask($user)
    {
        try
        {
            $startOfMonth = Carbon::now()
                ->subMonth()
                ->startOfMonth();

            $endOfMonth = Carbon::now()
                ->subMonth()
                ->endOfMonth();

            $holidays = Holiday::month(Carbon::now()
                ->subMonth()
                ->format('m')
            )
            ->active()
            ->get(["start_date", "end_date"]);

            $sundays = $this->getSundays(Carbon::now()->subMonth());

            $lastProbationPeriodDate = Carbon::parse($user->joining_date)->addDays($user->probation_period);

            $monthlyAttandance = $user->monthlyAttandance(Carbon::now()
                ->subMonth()
                ->format('m')
            )
            ->get(["check_in", "check_out"]);

            $leaves = $user->monthlyLeaves(Carbon::now()
                ->subMonth()
                ->format('m')
            )
            ->get(["start_date", "end_date"]);

            $salary = $user->salary;

            for($i = 0; $i < $endOfMonth->format('d'); $i++)
            {
                if($i == 0)
                {
                    $today = $startOfMonth; //to get first date of month
                }
                else
                {
                    $today = $startOfMonth->addDays($i); //to get dates after first date of month
                }

                if($monthlyAttandance->isNotEmpty())
                {
                    //check if user is ubsent on that day
                    if(!$monthlyAttandance->contains("check_in", $today->format("Y-m-d")))
                    {
                        //check if that day is not sunday
                        if(!in_array($today->format("Y-m-d"), $sundays))
                        {
                            //check if that day is not holiday
                            if(!$this->isHoliday($today, $holidays))
                            {
                                //check if that day is not leave
                                if(!$this->isLeave($today, $leaves))
                                {
                                    $salary = round($salary - ($salary / 30), 2);
                                }
                                // else that day is leave. do nothing
                            }
                            // else that day is holiday. do nothing
                        }
                        // else that day is sunday. do nothing
                    }
                    // else user is present. do nothing (if in future wanted to add the comp of login then add else)
                }
            }

            return $salary;
        }
        catch(\Exception $e)
        {
            Log::info("performTask:GenerateSalary.php exception");
            Log::error($e);
            return false;
        }
    }

    public function getSundays($month)
    {
        $sundays = [];
        $totalWeeksOfMonth = $month->endOfMonth()->weekOfMonth;

        if($month->startOfMonth()->isWeekend())
        {
            array_push($sundays, $month->startOfMonth()->format("Y-m-d"));

            for($i = 1; $i <= $totalWeeksOfMonth - 1; $i++)
            {
                array_push($sundays, $month->next("sunday")->format("Y-m-d"));
            }
        }
        else
        {
            for($i = 1; $i <= $totalWeeksOfMonth - 1; $i++)
            {
                array_push($sundays, $month->next("sunday")->format("Y-m-d"));
            }
        }

        return $sundays;
    }

    public function isHoliday($today, $holidays)
    {
        $result = false;

        foreach($holidays as $holiday)
        {
            if($today->between($holiday->start_date, $holiday->end_date))
            {
                $result = true;
            }
        }
        
        return $result;
    }

    public function isLeave($today, $leaves)
    {
        $result = false;

        foreach($leaves as $leave)
        {
            if($today->between($leave->start_date, $leave->end_date))
            {
                $result = true;
            }
        }

        return $result;
    }
}
