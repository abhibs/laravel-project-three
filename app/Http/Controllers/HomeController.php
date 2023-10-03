<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Certificate;
use App\Models\Client;
use App\Models\Fact;
use App\Models\Package;
use App\Models\Profile;
use App\Models\Review;
use App\Models\Team;
use App\Models\Youtube;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profile = Profile::find(1);
        $about = About::find(1);
        $clients = Client::where('status', 1)->take(6)->latest()->get();
        $fact = Fact::find(1);
        $youtube = Youtube::find(1);
        $certificates = Certificate::where('status', 1)->inRandomOrder()->get();
        $reviews = Review::where('status', 1)->get();
        $teamdatas = Team::where('status', 1)->get();
        $packagedatas = Package::where('status', 1)->get();


        return view('welcome', compact('profile', 'about', 'clients', 'fact', 'youtube', 'certificates', 'reviews', 'teamdatas', 'packagedatas'));
    }
}