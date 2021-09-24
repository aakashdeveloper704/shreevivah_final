<?php

namespace App\Http\Controllers\Web_refer_and_earn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_refer_and_earnController extends Controller
{
    public function index()
    {
        return view('web.refer_and_earn.refer_and_earn');
    }
}
