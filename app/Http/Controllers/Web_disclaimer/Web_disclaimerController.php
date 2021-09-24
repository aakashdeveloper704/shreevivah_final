<?php

namespace App\Http\Controllers\Web_disclaimer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_disclaimerController extends Controller
{
    public function index()
    {
        return view('web.footer.disclaimer');
    }
}
