<?php

namespace App\Http\Controllers\Web_profile_visitor_information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_profile_visitor_informationController extends Controller
{
    public function index()
    {
        return view('web.profile.profile_visitor_information');
    }
}
