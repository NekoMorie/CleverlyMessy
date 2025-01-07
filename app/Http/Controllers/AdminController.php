<?php

namespace App\Http\Controllers;

use App\Models\Institusi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::guard('admin')->user();
        $title = 'Dashboard';
        return view('admin/dashboard', compact('title', 'user'));
    }
    public function profile()
    {
        $user = Auth::guard('admin')->user();
        $title = 'Profile';
        $intitusi = Institusi::where('id_admin', $user->id_admin)->first();
        // \dd($user);
        return view('admin/profile/profile', compact('title', 'user', 'intitusi'));
    }
    public function monitoring()
    {
        $user = Auth::guard('admin')->user();
        $title = 'Monitoring';
        return view('admin/monitoring', compact('title', 'user'));
    }
    public function kategori()
    {
        $user = Auth::guard('admin')->user();

        $title = 'Kategori';
        return view('admin/kategori', compact('title', 'user'));
    }
    public function editprofile()
    {
        $user = Auth::guard('admin')->user();

        $title = 'Edit Profile';
        return view('admin/edit-profile', compact('title'));
    }
}
