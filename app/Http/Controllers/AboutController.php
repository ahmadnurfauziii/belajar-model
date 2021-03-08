<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Who;
use App\Models\About;

class AboutController extends Controller
{
    //
    public function index(){
        return view('about', ['posts' => Post::index(), 'whos' => Who::Whos(), 'abouts' => About::Abouts()]);
    }    
}
