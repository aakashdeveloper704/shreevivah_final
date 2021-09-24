<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Models\Login;
use Illuminate\Http\Request;
use App\Models\Http\Register;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
// use App\Permission;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function authenticate(Request $request)
    {
        dd('a');
        // return view(web.dashboard.dashboard);
        // $this->validate($request,[
            // 'username' => 'required|username',
            // 'password' => 'required|min8'
        // ]);

        if (Auth::guard('web')->attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))){
            try{
                $isAdmin = auth()->user()->id;
                $is_admin = false;
                if($isAdmin == 1){
                    $is_admin=true;
                }
                $request->session()->put('isadmin',$is_admin);
                return redirect()->intended('/dashboard');
            }
            catch(Exception $e){
                return back()->with('failed','Invalid Username or Password')
                ->withInput($request->only('username'));
            }
        }
        return back()->with('failed','Invalid Username or Password')
                ->withInput($request->only('username'));
    }

}
