<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\User\SendUserCredentialsMail;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index', [
            'rows' => User::active()->except(auth()->id())->paginate(20)
        ]);
    }

    public function add()
    {
        return view('user.add');
    }

    public function insert(Request $request)
    {
        $password = randomString();

        $result = User::insert([
            'full_name' => $request->full_name,
            'username' => $request->username,
            'password' => bcrypt($password),
            'email' => $request->email,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
            'type' => "admin",
            'created_by' => auth()->id()
        ]);

        // if($result)
        // {
        //     dispatch(new SendUserCredentialsMail($request->full_name, $request->username, $request->email, $password));
        // }

        return redirect()->route('user.index');
    }

    public function edit($id)
    {
        return view('user.edit', ['data' => User::find($id)]);
    }

    public function update(Request $request)
    {
        $result = User::find($request->id)->update([
            'full_name' => $request->full_name,
            'username' => $request->username,
            'password' => randomString(),
            'email' => $request->email,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
                       
        ]);

        return redirect()->route('user.index');
    }

    public function delete($id)
    {
        $result = User::find($id)->update([
            'status' => 0
        ]);

        return redirect()->route('user.index');
    }

    public function active($id)
    {
        $result = User::find($id)->update([
            'active' => 1
        ]);

        return redirect()->route('user.index');
    }

    public function inactive($id)
    {
        $result = User::find($id)->update([
            'active' => 0
        ]);

        return redirect()->route('user.index');
    }
}
