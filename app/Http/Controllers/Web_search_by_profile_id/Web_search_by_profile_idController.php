<?php

namespace App\Http\Controllers\Web_search_by_profile_id;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_search_by_profile_idController extends Controller
{
    public function index()
    {
        return view('web.search.search_by_profile_id');
    }
}
