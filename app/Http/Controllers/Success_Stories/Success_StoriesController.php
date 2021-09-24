<?php

namespace App\Http\Controllers\Success_Stories;

use App\Models\Success_Stories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use File;
use Yajra\DataTables\Facades\DataTables;

class Success_StoriesController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Success_Stories::active()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '';
                        //    $btn = '<a href= class="edit btn btn-info btn-sm">View</a>';
                           $btn = $btn.'<a style="margin:5px 5px" href="'.action('Success_Stories\Success_StoriesController@edit',$row->id).'" class="edit btn btn-primary btn-sm pd-5">Edit</a>';
                        //    $btn = $btn.'<a style="margin:0px 5px" onclick="delete_function('.$row->id.')" class="btn btn-danger btn-sm text">Delete</a>';
                        $btn = $btn.'<button style="margin:5px 5px" onclick="delete_function('.$row->id.')" class="edit btn btn-danger btn-sm delete_commission_button"><i class="glyphicon glyphicon-trash"></i> Delete</button>';
                            return $btn;
                    })
                    // ->removeColumn('id')
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('success_stories.index');
        // return view('success_stories.index', ['rows' => Success_Stories::active()->paginate(20)]);
    }

    public function add()
    {
        return view('success_stories.add');
    }

    public function insert(Request $request)
    {
        if($request->ajax()){
            // dd(request()->image);
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/success_stories'), $imageName);


            $result = Success_Stories::insert([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $imageName,
                'active' => $request->active,
                'created_by' => auth()->id(),
            ]);
            return $result ? response()->json([
                'code'=>200,
                'error'=>false,
                'message'=>'Success Stories Added Successfully!',
            ]) : response()->json([
                'code'=>401,
                'error'=>true,
                'message'=>'Something went wrong!',
            ]);
            
        }
    }

    public function edit($id)
    {
        return view('success_stories.edit', ['data' => Success_Stories::find($id)]);
    }

    public function update(Request $request)
    {
        // dd(request()->image);
        $imageName = '';
        if($request->ajax()){
           
            if(request()->image != null){
            
                $image_path = "/images/success_stories/".request()->old_image_name;  // Value is not URL but directory file path
              
                if(File::exists(public_path($image_path))) {
                    File::delete(public_path($image_path));
                }
                $imageName = time().'.'.request()->image->getClientOriginalExtension();
                request()->image->move(public_path('images/success_stories'), $imageName);
                
            }
            $arr = array(
                'title' => $request->title,
                'description' => $request->description,
                'image' => $imageName,
                'active' => $request->active,
                'created_by' => auth()->id(),
            );

            $result = Success_Stories::find($request->id)->update($arr);
            return $result ? response()->json([
                'code'=>200,
                'error'=>false,
                'message'=>'Success Stories Updated Successfully!',
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
        $result = Success_Stories::find($request->id)->update([
            'status' => 0
        ]);
        return $result ? response()->json([
            'code'=>200,
            'error'=>false,
            'message'=>'Success Stories Info Delete Successfully!',
        ]) : response()->json([
            'code'=>401,
            'error'=>true,
            'message'=>'Something went wrong!',
        ]);
        }
    }

    // public function disable($id)
    // {
    //     $result = Success_Stories::find($id)->update([
    //         'active' => 0
    //     ]);

    //     return redirect()->route('success_stories.index');
    // }

    // public function enable($id)
    // {
    //     $result = Success_Stories::find($id)->update([
    //         'active' => 1
    //     ]);

    //     return redirect()->route('success_stories.index');
    // }
}
