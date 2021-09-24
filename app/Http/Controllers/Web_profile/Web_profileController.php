<?php

namespace App\Http\Controllers\Web_profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_profileController extends Controller
{
    public function index()
    {
        return view('web.profile.profile');
    }

    
}
