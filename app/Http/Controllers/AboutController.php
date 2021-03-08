<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Post;
use App\Models\Who;
use App\Models\About;
=======
>>>>>>> fbc4a0d145f7d64a13bace27f7c79ebca819bd15

class AboutController extends Controller
{
    //
    public function index(){
<<<<<<< HEAD
        return view('about', ['posts' => Post::index(), 'whos' => Who::Whos(), 'abouts' => About::Abouts()]);
    }    
=======
        return view ('about');
    }
>>>>>>> fbc4a0d145f7d64a13bace27f7c79ebca819bd15
}
