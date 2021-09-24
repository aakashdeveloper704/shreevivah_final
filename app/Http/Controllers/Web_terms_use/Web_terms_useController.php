<?php

namespace App\Http\Controllers\Web_terms_use;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_terms_useController extends Controller
{
    public function index()
    {
        return view('web.footer.terms_use');
    }
}
