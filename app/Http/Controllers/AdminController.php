<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;


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
    public function lokasi(){
        $title = 'Lokasi';
        return view('admin/lokasi', compact('title'));
    }
    public function waktu(){
        $title = 'Waktu';
        return view('admin/waktu', compact('title'));
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

    public function users(){
        $users = User::all();
        $title = 'User';
        return view('admin/users', compact('title', 'users'));
    }
    public function usersAdd(Request $request)
    {
        // Jika ada file gambar yang diunggah, simpan ke folder 'uploads/images'
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('userImg', 'public');
        } else {
            $imagePath = null; // Atur ke null jika tidak ada file yang diunggah
        }

        // Simpan data user ke database
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->image = $imagePath; // Simpan path file gambar
        $user->save();

        return redirect()->back()->with('success', 'User berhasil ditambahkan.');
    }
    public function userDelete($id)
    {
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('users')->with('success', 'User berhasil dihapus!');
    }


}
