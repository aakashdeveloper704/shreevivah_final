<?php

namespace App\Http\Controllers\Web_membership_plains;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_membership_plainsController extends Controller
{
    public function index()
    {
        return view('web.membership_plains.membership_plains');
    }
}
