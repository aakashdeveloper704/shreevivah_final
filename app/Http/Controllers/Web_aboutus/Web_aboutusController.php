<?php

namespace App\Http\Controllers\Web_aboutus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_aboutusController extends Controller
{
    public function index()
    {
        return view('web.footer.aboutus');
    }
}
