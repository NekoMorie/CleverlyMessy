<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $title = 'Dashboard';
        return view('admin/dashboard', compact('title'));
    }
    public function users(){
        $title = 'User';
        return view('admin/users', compact('title'));
    }
    public function profile(){
        $title = 'Profile';
        return view('admin/profile', compact('title'));
    }
    public function lokasi(){
        $title = 'Lokasi';
        return view('admin/lokasi', compact('title'));
    }
    public function waktu(){
        $title = 'Waktu';
        return view('admin/waktu', compact('title'));
    }
    public function editprofile(){
        $title = 'Edit Profile';
        return view('admin/edit-profile', compact('title'));
    }
}
