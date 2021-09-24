<?php

namespace App\Http\Controllers\Web_pre_marriage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_pre_marriageController extends Controller
{
    public function index()
    {
        return view('web.pre_marriage.pre_marriage');
    }
}
