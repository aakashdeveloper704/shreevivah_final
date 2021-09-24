<?php

namespace App\Http\Controllers\Leave;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leave;
use App\Models\User;

class LeaveController extends Controller
{
    public function index()
    {
        return view('leave.index', [
            'rows' => Leave::byId()
                ->active()
                ->paginate(20),

            'medicalLeavesCount' => Leave::byId()
                ->byCategory('medical')
                ->active()
                ->count(),

            'vacationLeavesCount' => Leave::byId()
                ->byCategory('vacation')
                ->active()
                ->count(),

            'otherLeavesCount' => Leave::byId()
                ->byCategory('other')
                ->active()
                ->count(),

            'users' => User::lower(auth()->user()->type)
                ->except(auth()->id())
                ->active()
                ->get()
        ]);
    }

    public function add()
    {
        return view('leave.add', [
            'users' => User::lower(auth()->user()->type)
                ->except(auth()->id())
                ->active()
                ->get()
        ]);
    }

    public function insert(Request $request)
    {
        $result = Leave::insert([
            'user_id' => $request->user_id ?? auth()->id(),
            'category' => $request->category,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'reason' => $request->reason,
            'attachment' => uploadAttachment($request, "leaveAttachment", "attachment"),
            'created_by' => auth()->id()
        ]);

        return redirect()->route('leave.index');
    }

    public function edit($id)
    {
        $leave = Leave::find($id);

        if(!$leave->freeze)
        {
            return view('leave.edit', [
                'data' => $leave,
                'users' => User::lower(auth()->user()->type)
                    ->except(auth()->id())
                    ->active()
                    ->get()
            ]);
        }
        else
        {
            abort(404);
        }
    }

    public function update(Request $request)
    {
        $result = Leave::find($request->id)->update([
            'user_id' => $request->user_id ?? auth()->id(),
            'category' => $request->category,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'reason' => $request->reason,
            'attachment' => uploadAttachment($request, "leaveAttachment", "attachment")
        ]);

        return redirect()->route('leave.index');
    }

    public function delete($id)
    {
        $result = Leave::find($id)->update([
            'status' => 0
        ]);

        return redirect()->route('leave.index');
    }

    public function downloadAttachment($filename)
    {
        return response()->download(storage_path("app/public/leaveAttachment/{$filename}"));
    }

    public function approve($id)
    {
        $result = Leave::find($id)->update([
            'approved' => 1,
            'approved_by' => auth()->id(),
            'approved_date' => now()
        ]);

        return redirect()->route('leave.index');
    }

    public function reject($id)
    {
        $result = Leave::find($id)->update([
            'approved' => 0
        ]);

        return redirect()->route('leave.index');
    }

    public function filter(Request $request)
    {
        $medicalLeavesCount = Leave::byId([$request->userId])
            ->byCategory('medical')
            ->active()
            ->count();

        $vacationLeavesCount = Leave::byId([$request->userId])
            ->byCategory('vacation')
            ->active()
            ->count();

        $otherLeavesCount = Leave::byId([$request->userId])
            ->byCategory('other')
            ->active()
            ->count();

        return response()->json([
            'datatable' => view('leave.ajax.user', [
                'rows' => Leave::byId([$request->userId])->active()->paginate(20)
            ])->render(),

            'charttable' => view('leave.ajax.chart', [
                'medicalLeavesCount' => $medicalLeavesCount,
                'vacationLeavesCount' => $vacationLeavesCount,
                'otherLeavesCount' => $otherLeavesCount,
            ])->render(),

            'medicalLeavesCount' => $medicalLeavesCount,
            'vacationLeavesCount' => $vacationLeavesCount,
            'otherLeavesCount' => $otherLeavesCount
        ]);
    }
}
