<?php

namespace App\Http\Controllers\Salary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salary;
use Carbon\Carbon;

class SalaryController extends Controller
{
    public function index()
    {
        if(strtolower(auth()->user()->type) == "superadmin")
        {
            return view("salary.index", [
                'rows' => Salary::active()
                    ->monthly(Carbon::now()->subMonth()->format('m'))
                    ->paginate(20)
            ]);
        }

        return view("salary.index", [
            'rows' => Salary::active()
                ->self()
                ->monthly(Carbon::now()->subMonth()->format('m'))
                ->paginate(20)
        ]);
    }

    public function delete($id)
    {
        $result = Salary::find($id)->update([
            'status' => 0
        ]);

        return redirect()->route('salary.index');
    }

    public function paid($id)
    {
        $result = Salary::find($id)->update([
            'paid' => 1,
            'paid_date' => now()
        ]);

        return redirect()->route('salary.index');
    }

    public function unpaid($id)
    {
        $result = Salary::find($id)->update([
            'paid' => 0,
            'paid_date' =>''
        ]);

        return redirect()->route('salary.index');
    }
}
