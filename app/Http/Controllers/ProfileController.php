<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Profile;

class ProfileController extends Controller
{
           public function index(){
            return view('profile', ['profiles' => Profile::index()]);
        }
    
=======

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }
>>>>>>> fbc4a0d145f7d64a13bace27f7c79ebca819bd15
}
