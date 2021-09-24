<?php

namespace App\Http\Controllers\Holiday;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Holiday;

class HolidayController extends Controller
{
    public function index()
    {
        return view('holiday.index', ['rows' => Holiday::active()->paginate(20)]);
    }

    public function add()
    {
        return view('holiday.add');
    }

    public function insert(Request $request)
    {
        $result = Holiday::insert([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'created_by' => auth()->id()
        ]);

        return redirect()->route('holiday.index');
    }

    public function edit($id)
    {
        return view('holiday.edit', ['data' => Holiday::find($id)]);
    }

    public function update(Request $request)
    {
        $result = Holiday::find($request->id)->update([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);

        return redirect()->route('holiday.index');
    }

    public function delete($id)
    {
        $result = Holiday::find($id)->update([
            'status' => 0
        ]);

        return redirect()->route('holiday.index');
    }

    public function filter(Request $request)
    {
        if(!empty($request->year) && !empty($request->month))
        {
            $query = Holiday::whereYear('start_date', $request->year)
                ->whereMonth('start_date', $request->month)
                ->orWhereYear('end_date', $request->year)
                ->WhereMonth('end_date', $request->month);
        }

        if(!empty($request->year) && empty($request->month))
        {
            $query = Holiday::whereYear('start_date', $request->year)
                ->orWhereYear('end_date', $request->year);
        }

        if(!empty($request->month) && empty($request->year))
        {
            $query = Holiday::whereMonth('start_date', $request->month)
                ->orWhereMonth('end_date', $request->month);
        }

        return view('holiday.ajax.year_month_filter', [
            'rows' => $query->active()->paginate(20)
        ]);
    }
}
