<?php

namespace App\Http\Controllers\Web_profile_delete;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_profile_deleteController extends Controller
{
    public function index()
    {
        return view('web.profile.profile_delete');
    }
}
