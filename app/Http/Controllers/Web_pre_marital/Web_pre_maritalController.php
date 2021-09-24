<?php

namespace App\Http\Controllers\Web_pre_marital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_pre_maritalController extends Controller
{
    public function index()
    {
        return view('web.pre_marital.pre_marital');
    }
}
