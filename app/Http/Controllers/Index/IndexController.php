<?php

namespace App\Http\Controllers\Index;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Index;

class IndexController extends Controller
{
    
    public function index(Request $request)
    {
        return view('index.index');
    }

    public function add()
    {
        return view('index.index');
    }

    public function insert(Request $request)
    {
        if ($request->ajax()) {
            $result = Index::insert([
                'gender' => $request->gender,
                'marital_status' => $request->marital_status,
                'grom_bride' => $request->grom_bride,
                'fullname' => $request->fullname,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'religion' => $request->religion,
                'caste' => $request->caste,
                'profileimage' => $request->profileimage,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at,
                

                // 'active' => $request->active,
            ]);
            return $result ? response()->json([
                'code' => 200,
                'error' => false,
                'message' => 'Register page Added Successfully!',
            ]) : response()->json([
                'code' => 401,
                'error' => true,
                'message' => 'Something went wrong!',
            ]);
        }
    }

    // public function edit($id)
    // {
    //     return view('engagement.edit', ['data' => Engagement::find($id)]);
    // }

    // public function update(Request $request)
    // {

    //     if ($request->ajax()) {
    //         $result = Engagement::find($request->id)->update([
    //             'metaname' => $request->metaname,
    //             'metavalue' => $request->metavalue,
    //             'active' => $request->active,
    //         ]);
    //         return $result ? response()->json([
    //             'code' => 200,
    //             'error' => false,
    //             'message' => 'Engagement Updated Successfully!',
    //         ]) : response()->json([
    //             'code' => 401,
    //             'error' => true,
    //             'message' => 'Something went wrong!',
    //         ]);
    //     }
    // }

    // public function delete(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $result = Engagement::find($request->id)->update([
    //             'status' => 0
    //         ]);
    //         return $result ? response()->json([
    //             'code' => 200,
    //             'error' => false,
    //             'message' => 'Engagement Delete Successfully!',
    //         ]) : response()->json([
    //             'code' => 401,
    //             'error' => true,
    //             'message' => 'Something went wrong!',
    //         ]);
    //     }
    // }
}