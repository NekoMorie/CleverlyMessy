<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index(){
        $title = 'Dashboard';
        return view('admin/dashboard', compact('title'));
    }
    public function profile(){
        $title = 'Profile';
        return view('admin/profile', compact('title'));
    }
    public function monitoring(){
        $title = 'Monitoring';
        return view('admin/monitoring', compact('title'));
    }
    public function kategori(){
        $title = 'Kategori';
        return view('admin/kategori', compact('title'));
    }
    public function editprofile(){
        $title = 'Edit Profile';
        return view('admin/edit-profile', compact('title'));
    }


}
