<?php

namespace App\Http\Controllers\Kundali;

use App\Models\Kundali;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Yajra\DataTables\Facades\DataTables;


class KundaliController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Kundali::active()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '';
                    //    $btn = '<a href= class="edit btn btn-info btn-sm">View</a>';
                    $btn = $btn . '<a style="margin:5px 5px" href="' . action('Kundali\KundaliController@edit', $row->id) . '" class="edit btn btn-primary btn-sm pd-5">Edit</a>';
                    //    $btn = $btn.'<a style="margin:0px 5px" onclick="delete_function('.$row->id.')" class="btn btn-danger btn-sm text">Delete</a>';
                    $btn = $btn . '<button style="margin:5px 5px" onclick="delete_function(' . $row->id . ')" class="edit btn btn-danger btn-sm delete_commission_button"><i class="glyphicon glyphicon-trash"></i> Delete</button>';
                    return $btn;
                })
                // ->removeColumn('id')
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('kundali.index');
        // return view('contactus.index', ['rows' => Contactus::active()->paginate(20)]);
    }

    public function add()
    {
        return view('kundali.add');
    }

    public function insert(Request $request)
    {
        if ($request->ajax()) {
            $result = Kundali::insert([
                'metaname' => $request->metaname,
                'metavalue' => $request->metavalue,
                'active' => $request->active,
            ]);
            return $result ? response()->json([
                'code' => 200,
                'error' => false,
                'message' => 'Kundali page Added Successfully!',
            ]) : response()->json([
                'code' => 401,
                'error' => true,
                'message' => 'Something went wrong!',
            ]);
        }
    }

    public function edit($id)
    {
        return view('disclaimer.edit', ['data' => Kundali::find($id)]);
    }

    public function update(Request $request)
    {

        if ($request->ajax()) {
            $result = Kundali::find($request->id)->update([
                'metaname' => $request->metaname,
                'metavalue' => $request->metavalue,
                'active' => $request->active,
            ]);
            return $result ? response()->json([
                'code' => 200,
                'error' => false,
                'message' => 'Kundali Updated Successfully!',
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
            $result = Kundali::find($request->id)->update([
                'status' => 0
            ]);
            return $result ? response()->json([
                'code' => 200,
                'error' => false,
                'message' => 'Kundali Delete Successfully!',
            ]) : response()->json([
                'code' => 401,
                'error' => true,
                'message' => 'Something went wrong!',
            ]);
        }
    }
}
