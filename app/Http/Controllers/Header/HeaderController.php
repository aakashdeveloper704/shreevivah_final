<?php

namespace App\Http\Controllers\Header;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        return view('header.header');
    }

    public function logout()
    {
        return view('header.logout');
    }
    
}
