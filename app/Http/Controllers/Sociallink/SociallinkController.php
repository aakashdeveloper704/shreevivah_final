<?php

namespace App\Http\Controllers\Sociallink;

use App\Models\Sociallink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Yajra\DataTables\Facades\DataTables;

class SociallinkController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Sociallink::active()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '';
                        //    $btn = '<a href= class="edit btn btn-info btn-sm">View</a>';
                           $btn = $btn.'<a style="margin:5px 5px" href="'.action('Sociallink\SociallinkController@edit',$row->id).'" class="edit btn btn-primary btn-sm pd-5">Edit</a>';
                        //    $btn = $btn.'<a style="margin:0px 5px" onclick="delete_function('.$row->id.')" class="btn btn-danger btn-sm text">Delete</a>';
                        $btn = $btn.'<button style="margin:5px 5px" onclick="delete_function('.$row->id.')" class="edit btn btn-danger btn-sm delete_commission_button"><i class="glyphicon glyphicon-trash"></i> Delete</button>';
                            return $btn;
                    })
                    // ->removeColumn('id')
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('sociallink.index');
        // return view('sociallink.index', ['rows' => Sociallink::active()->paginate(20)]);
    }

    public function add()
    {
        return view('sociallink.add');
    }

    public function insert(Request $request)
    {
        if($request->ajax()){
            $result = Sociallink::insert([
                'metaname' => $request->metaname,
                'metalink' => $request->metalink,
                'active' => $request->active,
            ]);
            return $result ? response()->json([
                'code'=>200,
                'error'=>false,
                'message'=>'Sociallink Added Successfully!',
            ]) : response()->json([
                'code'=>401,
                'error'=>true,
                'message'=>'Something went wrong!',
            ]);
            
        }
    }

    public function edit($id)
    {
        return view('sociallink.edit', ['data' => Sociallink::find($id)]);
    }

    public function update(Request $request)
    {
        
        if($request->ajax()){
            $result = Sociallink::find($request->id)->update([
                'metaname' => $request->metaname,
                'metalink' => $request->newmetalink,
                'active' => $request->active,
            ]);
            return $result ? response()->json([
                'code'=>200,
                'error'=>false,
                'message'=>'Sociallink Updated Successfully!',
            ]) : response()->json([
                'code'=>401,
                'error'=>true,
                'message'=>'Something went wrong!',
            ]);
            
        }
    }

    public function delete(Request $request)
    {
        if($request->ajax()){
        $result = Sociallink::find($request->id)->update([
            'status' => 0
        ]);
        return $result ? response()->json([
            'code'=>200,
            'error'=>false,
            'message'=>'Sociallink Info Delete Successfully!',
        ]) : response()->json([
            'code'=>401,
            'error'=>true,
            'message'=>'Something went wrong!',
        ]);
        }
    }

    // public function disable($id)
    // {
    //     $result = Sociallink::find($id)->update([
    //         'active' => 0
    //     ]);

    //     return redirect()->route('sociallink.index');
    // }

    // public function enable($id)
    // {
    //     $result = Sociallink::find($id)->update([
    //         'active' => 1
    //     ]);

    //     return redirect()->route('sociallink.index');
    // }
}
