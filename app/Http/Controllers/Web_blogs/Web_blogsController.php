<?php

namespace App\Http\Controllers\Web_blogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_blogsController extends Controller
{
    public function index()
    {
        return view('web.footer.blogs');
    }
}
