<?php

namespace App\Http\Controllers\Web_pre_post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_pre_postController extends Controller
{
    public function index()
    {
        return view('web.pre_post.pre_post');
    }
}
