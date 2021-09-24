<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Models\User;
use App\Models\Attandance;
use Carbon\Carbon;

class TestController extends Controller
{
    public function testGenerateSalary()
    {
        Artisan::call("generate:salary");
    }

    public function testCreateSuperAdmin()
    {
        $user = new User();
        $user->full_name = "Super Admin";
        $user->username = "superadmin";
        $user->password = bcrypt("1234567890");
        $user->email = "superadmin@gmail.com";
        $user->profile_photo = "3127120453729382595.jpg";
        $user->type = "superadmin";
        $user->save();
    }

    public function testCreateUsers()
    {
        for($i = 1; $i <= 3; $i++)
        {
            $user = new User();
            $user->full_name = "Coordinator" . $i;
            $user->username = "coordinator" . $i;
            $user->password = bcrypt("1234567890");
            $user->email = "coordinator".$i."@gmail.com";
            $user->profile_photo = "3127120453729382595.jpg";
            $user->type = "coordinator";
            $user->joining_date = Carbon::now()->subMonths(2)->startOfMonth();
            $user->probation_period = "60";
            $user->salary = "40000";
            $user->active = 1;
            $user->created_by = 1;
            $user->save();
        }

        for($i = 1; $i <= 3; $i++)
        {
            $user = new User();
            $user->full_name = "RecruiterManager" . $i;
            $user->username = "manager" . $i;
            $user->password = bcrypt("1234567890");
            $user->email = "manager".$i."@gmail.com";
            $user->profile_photo = "3127120453729382595.jpg";
            $user->type = "recruiter_manager";
            $user->joining_date = Carbon::now()->subMonths(2)->startOfMonth();
            $user->probation_period = "60";
            $user->salary = "30000";
            $user->active = 1;
            $user->created_by = 1;
            $user->save();
        }

        for($i = 1; $i <= 3; $i++)
        {
            $user = new User();
            $user->full_name = "Recruiter" . $i;
            $user->username = "recruiter" . $i;
            $user->password = bcrypt("1234567890");
            $user->email = "recruiter".$i."@gmail.com";
            $user->profile_photo = "3127120453729382595.jpg";
            $user->type = "recruiter";
            $user->joining_date = Carbon::now()->subMonth()->startOfMonth();
            $user->probation_period = "60";
            $user->salary = "20000";
            $user->reporting_manager = 5;
            $user->active = 1;
            $user->created_by = 1;
            $user->save();
        }
    }

    public function testCreateAttandance()
    {
        $users = User::active()->get();

        $startDate = Carbon::now()->subMonth()->startOfMonth()->format("d");
        $endDate = Carbon::now()->subMonth()->endOfMonth()->format("d");

        foreach($users as $user)
        {
            for($i = $startDate; $i <= $endDate; $i++)
            {
                $attandance = new Attandance();
                $attandance->user_id = $user->id;
                $attandance->check_in = "2021-06-".$i." 09:00:00";
                $attandance->check_out = "2021-06-".$i." 18:00:00";
                $attandance->save();
            }
        }
    }
}
