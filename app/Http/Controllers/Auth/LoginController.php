<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    private $rules = [
            'username'   => 'required', 
            'password' => 'required|min:8'
        ];
        
    private $messages = [
            'username.required' => 'Please enter username',
            'password.required' => 'Please enter password',
            'password.min' => 'Password should be atleast of 8 characters'
        ];

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('user.auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, $this->rules, $this->messages);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password]))
        {
    
            return redirect()->route('dashboard.index');
        }

        return back()->with("error", "Invalid Username or Password");
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.index');
    }

    public function changePassword()
    {
        return view('user.auth.updatePassword');
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request, $this->rules, $this->messages);
        
        $user = User::where('username', $request->username)->first();

        if(!empty($user))
        {
            $result = $user->update([
                'password' => bcrypt($request->password),
                'active' => 1
            ]);

            if($result)
            {
                if (Auth::attempt(['username' => $request->username, 'password' => $request->password]))
                {
            
                    return redirect()->route('dashboard.index');
                }

                return back()->with("error", "Unable to login. Please try again");
            }

            return back()->with("error", "Unable to update password");
        }

        return back()->with("error", "User Not Found. Please Try Again");
    }
}
