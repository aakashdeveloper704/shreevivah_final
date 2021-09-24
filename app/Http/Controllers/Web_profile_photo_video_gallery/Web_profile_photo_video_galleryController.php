<?php

namespace App\Http\Controllers\Web_profile_photo_video_gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Web_profile_photo_video_galleryController extends Controller
{
    public function index()
    {
        return view('web.profile.profile_photo_video_gallery');
    }
}
