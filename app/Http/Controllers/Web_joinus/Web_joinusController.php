<?php

namespace App\Http\Controllers\Web_joinus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_joinusController extends Controller
{
    public function index()
    {
        return view('web.joinus.joinus');
    }
}
