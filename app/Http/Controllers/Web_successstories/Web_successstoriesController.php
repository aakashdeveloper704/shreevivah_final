<?php

namespace App\Http\Controllers\Web_successstories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_successstoriesController extends Controller
{
    public function index()
    {
        return view('web.footer.successstories');
    }
}
