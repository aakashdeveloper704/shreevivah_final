<?php

namespace App\Http\Controllers\Web_careers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_careersController extends Controller
{
    public function index()
    {
        return view('web.footer.careers');
    }
}
