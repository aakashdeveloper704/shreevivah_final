<?php

namespace App\Http\Controllers\Blogs;

use App\Models\Blogs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use File;
use Yajra\DataTables\Facades\DataTables;

class BlogsController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Blogs::active()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '';
                        //    $btn = '<a href= class="edit btn btn-info btn-sm">View</a>';
                           $btn = $btn.'<a style="margin:5px 5px" href="'.action('Blogs\BlogsController@edit',$row->id).'" class="edit btn btn-primary btn-sm pd-5">Edit</a>';
                        //    $btn = $btn.'<a style="margin:0px 5px" onclick="delete_function('.$row->id.')" class="btn btn-danger btn-sm text">Delete</a>';
                        $btn = $btn.'<button style="margin:5px 5px" onclick="delete_function('.$row->id.')" class="edit btn btn-danger btn-sm delete_commission_button"><i class="glyphicon glyphicon-trash"></i> Delete</button>';
                            return $btn;
                    })
                    // ->removeColumn('id')
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('blogs.index');
        // return view('pricing.index', ['rows' => Pricing::active()->paginate(20)]);
    }

    public function add()
    {
        return view('blogs.add');
    }

    public function insert(Request $request)
    {
        if($request->ajax()){
            // dd(request()->image);
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/blogs'), $imageName);


            $result = Blogs::insert([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $imageName,
                // 'status' => $request->status,
                'created_by' => auth()->id(),
                'active' => $request->active,
            ]);
            return $result ? response()->json([
                'code'=>200,
                'error'=>false,
                'message'=>'Blogs Added Successfully!',
            ]) : response()->json([
                'code'=>401,
                'error'=>true,
                'message'=>'Something went wrong!',
            ]);
            
        }
    }

    public function edit($id)
    {
        return view('blogs.edit', ['data' => Blogs::find($id)]);
    }

    public function update(Request $request)
    {
        // dd(request()->image);
        $imageName = '';
        if($request->ajax()){
           
            if(request()->image != null){
            
                $image_path = "/images/blogs/".request()->old_image_name;  // Value is not URL but directory file path
              
                if(File::exists(public_path($image_path))) {
                    File::delete(public_path($image_path));
                }
                $imageName = time().'.'.request()->image->getClientOriginalExtension();
                request()->image->move(public_path('images/blogs'), $imageName);
                
            }
            $arr = array('title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
            'type' => $request->type,
            'active' => $request->active);

            $result = Blogs::find($request->id)->update($arr);
            return $result ? response()->json([
                'code'=>200,
                'error'=>false,
                'message'=>'Blogs Updated Successfully!',
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
        $result = Blogs::find($request->id)->update([
            'status' => 0
        ]);
        return $result ? response()->json([
            'code'=>200,
            'error'=>false,
            'message'=>'Bolgs Info Delete Successfully!',
        ]) : response()->json([
            'code'=>401,
            'error'=>true,
            'message'=>'Something went wrong!',
        ]);
        }
    }
}
