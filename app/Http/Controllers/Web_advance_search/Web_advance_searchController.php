<?php

namespace App\Http\Controllers\Web_advance_search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_advance_searchController extends Controller
{
    public function index()
    {
        return view('web.search.advance_search');
    }
}
