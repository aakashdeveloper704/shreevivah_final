<?php

namespace App\Http\Controllers\Web_shopping_for_engagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_shopping_for_engagementController extends Controller
{
    public function index()
    {
        return view('web.shopping_for_engagement.shopping_for_engagement');
    }
}
