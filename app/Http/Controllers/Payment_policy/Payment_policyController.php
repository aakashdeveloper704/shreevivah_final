<?php

namespace App\Http\Controllers\Payment_policy;

use App\Models\Privacy_policy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment_policy;
use Validator;
use Yajra\DataTables\Facades\DataTables;

class Payment_policyController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Payment_policy::active()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '';
                    //    $btn = '<a href= class="edit btn btn-info btn-sm">View</a>';
                    $btn = $btn . '<a style="margin:5px 5px" href="' . action('Payment_policy\Payment_policyController@edit', $row->id) . '" class="edit btn btn-primary btn-sm pd-5">Edit</a>';
                    //    $btn = $btn.'<a style="margin:0px 5px" onclick="delete_function('.$row->id.')" class="btn btn-danger btn-sm text">Delete</a>';
                    $btn = $btn . '<button style="margin:5px 5px" onclick="delete_function(' . $row->id . ')" class="edit btn btn-danger btn-sm delete_commission_button"><i class="glyphicon glyphicon-trash"></i> Delete</button>';
                    return $btn;
                })
                // ->removeColumn('id')
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('payment_policy.index');
        // return view('contactus.index', ['rows' => Contactus::active()->paginate(20)]);
    }

    public function add()
    {
        return view('payment_policy.add');
    }

    public function insert(Request $request)
    {
        if ($request->ajax()) {
            $result = Payment_policy::insert([
                'metaname' => $request->metaname,
                'metavalue' => $request->metavalue,
                'active' => $request->active,
            ]);
            return $result ? response()->json([
                'code' => 200,
                'error' => false,
                'message' => ' Added Successfully!',
            ]) : response()->json([
                'code' => 401,
                'error' => true,
                'message' => 'Something went wrong!',
            ]);
        }
    }

    public function edit($id)
    {
        return view('payment_policy.edit', ['data' => Payment_policy::find($id)]);
    }

    public function update(Request $request)
    {

        if ($request->ajax()) {
            $result = Payment_policy::find($request->id)->update([
                'metaname' => $request->metaname,
                'metavalue' => $request->metavalue,
                'active' => $request->active,
            ]);
            return $result ? response()->json([
                'code' => 200,
                'error' => false,
                'message' => 'Updated Successfully!',
            ]) : response()->json([
                'code' => 401,
                'error' => true,
                'message' => 'Something went wrong!',
            ]);
        }
    }

    public function delete(Request $request)
    {
        if ($request->ajax()) {
            $result = Payment_policy::find($request->id)->update([
                'status' => 0
            ]);
            return $result ? response()->json([
                'code' => 200,
                'error' => false,
                'message' => 'Info Delete Successfully!',
            ]) : response()->json([
                'code' => 401,
                'error' => true,
                'message' => 'Something went wrong!',
            ]);
        }
    }

    // public function disable($id)
    // {
    //     $result = Contactus::find($id)->update([
    //         'active' => 0
    //     ]);

    //     return redirect()->route('contactus.index');
    // }

    // public function enable($id)
    // {
    //     $result = Contactus::find($id)->update([
    //         'active' => 1
    //     ]);

    //     return redirect()->route('contactus.index');
    // }
}
