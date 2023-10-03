<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Profile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profile = Profile::find(1);
        $about = About::find(1);

        return view('welcome', compact('profile', 'about'));
    }
}