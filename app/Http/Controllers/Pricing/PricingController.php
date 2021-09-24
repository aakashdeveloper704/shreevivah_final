<?php

namespace App\Http\Controllers\Pricing;

use App\Models\Pricing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use File;
use Yajra\DataTables\Facades\DataTables;

class PricingController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Pricing::active()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '';
                        //    $btn = '<a href= class="edit btn btn-info btn-sm">View</a>';
                           $btn = $btn.'<a style="margin:5px 5px" href="'.action('Pricing\PricingController@edit',$row->id).'" class="edit btn btn-primary btn-sm pd-5">Edit</a>';
                        //    $btn = $btn.'<a style="margin:0px 5px" onclick="delete_function('.$row->id.')" class="btn btn-danger btn-sm text">Delete</a>';
                        $btn = $btn.'<button style="margin:5px 5px" onclick="delete_function('.$row->id.')" class="edit btn btn-danger btn-sm delete_commission_button"><i class="glyphicon glyphicon-trash"></i> Delete</button>';
                            return $btn;
                    })
                    // ->removeColumn('id')
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('pricing.index');
        // return view('pricing.index', ['rows' => Pricing::active()->paginate(20)]);
    }

    public function add()
    {
        return view('pricing.add');
    }

    public function insert(Request $request)
    {
        if($request->ajax()){
            // dd(request()->image);
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/pricing'), $imageName);


            $result = Pricing::insert([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $imageName,
                'mrp' => $request->mrp,
                'discount' => $request->discount,
                'type' => $request->type,
                // 'status' => $request->status,
                'created_by' => auth()->id(),
                'active' => $request->active,
            ]);
            return $result ? response()->json([
                'code'=>200,
                'error'=>false,
                'message'=>'Pricing Added Successfully!',
            ]) : response()->json([
                'code'=>401,
                'error'=>true,
                'message'=>'Something went wrong!',
            ]);
            
        }
    }

    public function edit($id)
    {
        return view('pricing.edit', ['data' => Pricing::find($id)]);
    }

    public function update(Request $request)
    {
        // dd(request()->image);
        $imageName = '';
        if($request->ajax()){
           
            if(request()->image != null){
            
                $image_path = "/images/pricing/".request()->old_image_name;  // Value is not URL but directory file path
              
                if(File::exists(public_path($image_path))) {
                    File::delete(public_path($image_path));
                }
                $imageName = time().'.'.request()->image->getClientOriginalExtension();
                request()->image->move(public_path('images/pricing'), $imageName);
                
            }
            $arr = array('title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
            'mrp' => $request->mrp,
            'discount' => $request->discount,
            'type' => $request->type,
            'active' => $request->active);

            $result = Pricing::find($request->id)->update($arr);
            return $result ? response()->json([
                'code'=>200,
                'error'=>false,
                'message'=>'Pricing Updated Successfully!',
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
        $result = Pricing::find($request->id)->update([
            'status' => 0
        ]);
        return $result ? response()->json([
            'code'=>200,
            'error'=>false,
            'message'=>'Pricing Info Delete Successfully!',
        ]) : response()->json([
            'code'=>401,
            'error'=>true,
            'message'=>'Something went wrong!',
        ]);
        }
    }

    // public function disable($id)
    // {
    //     $result = Pricing::find($id)->update([
    //         'active' => 0
    //     ]);

    //     return redirect()->route('pricing.index');
    // }

    // public function enable($id)
    // {
    //     $result = Pricing::find($id)->update([
    //         'active' => 1
    //     ]);

    //     return redirect()->route('pricing.index');
    // }
}
