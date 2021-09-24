<?php

namespace App\Http\Controllers\Web_profile_viewed_by_me;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_profile_viewed_by_meController extends Controller
{
    public function index()
    {
        return view('web.profile.profile_viewed_by_me');
    }
}
