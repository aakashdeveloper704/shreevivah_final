<?php

namespace App\Http\Controllers\Web_privacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_privacyController extends Controller
{
    public function index()
    {
        return view('web.footer.privacy');
    }
}
