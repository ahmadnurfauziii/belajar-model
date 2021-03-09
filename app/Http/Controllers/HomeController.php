<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\SLider;
use App\Models\Picture;
class HomeController extends Controller
{
    //
    public function index(){
        return view ('home', ['homes' => Home::Homes(), 'sliders' => Slider::Sliders(), 'picture' => Picture::index('image')]);
    }
}
