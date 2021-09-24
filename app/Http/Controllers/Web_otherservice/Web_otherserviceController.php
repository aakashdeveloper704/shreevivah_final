<?php

namespace App\Http\Controllers\Web_otherservice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_otherserviceController extends Controller
{
    public function index()
    {
        return view('web.otherservices.otherservices');
    }
}
