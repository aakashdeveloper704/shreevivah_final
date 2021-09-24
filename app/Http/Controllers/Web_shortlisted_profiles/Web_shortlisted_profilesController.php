<?php

namespace App\Http\Controllers\Web_shortlisted_profiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_shortlisted_profilesController extends Controller
{
    public function index()
    {
        return view('web.profile.shortlisted_profiles');
    }
}
