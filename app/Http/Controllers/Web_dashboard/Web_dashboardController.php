<?php

namespace App\Http\Controllers\Web_dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_dashboardController extends Controller
{
    public function index()
    {
        return view('web.dashboard.dashboard');
    }
}
