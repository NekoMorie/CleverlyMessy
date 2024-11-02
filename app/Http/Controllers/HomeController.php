<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = 'Home';
        return view('profile/home',compact('title'));
    }
    public function about(){
        $title = 'Home';
        return view('profile/about',compact('title'));
    }
    public function contact(){
        $title = 'Home';
        return view('profile/contact',compact('title'));
    }
}
