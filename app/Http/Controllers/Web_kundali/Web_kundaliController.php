<?php

namespace App\Http\Controllers\Web_kundali;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_kundaliController extends Controller
{
    public function index()
    {
        return view('web.kundali.kundali');
    }
}
