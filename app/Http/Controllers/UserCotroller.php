<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserCotroller extends Controller
{
    public function index(Request $request){
        $title = 'User';
        $no = 1;
        $data = User::orderBy('name', 'ASC');

        // Check if there's a search term
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $data = $data->where('name', 'LIKE', '%' . $searchTerm . '%')
                         ->orWhere('created_by', 'LIKE', '%' . $searchTerm . '%');
        }

        // Get paginated results or full list if no pagination is desired
        $users = $data->get();

        // Return view with variables
        return view('admin/users', compact('title', 'users', 'no'));
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
        $user->gender = $request->gender;
        $user->telp = $request->telp;
        $user->alamat = $request->alamat;
        $user->save();

        return redirect()->back()->with('success', 'User berhasil ditambahkan.');
    }
    public function userDelete($id)
    {
        $user = User::findOrFail($id);
        if ($user->image != null){
            Storage::disk('public')->delete($user->image);
        }
        $user->delete();
        return redirect()->route('users')->with('success', 'User berhasil dihapus!');

    }
    public function editUser($id){
        $user = User::findOrFail($id);
        $title = 'Edit User';
        return view('admin/editUser', compact('title', 'user'));
    }
    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if ($request->level == null){
            $level = $user->level;
        } else {
            $level = $request->level;
        }
        if ($request->gender == null){
            $gender = $user->gender;
        } else {
            $gender = $request->gender;
        }

        if ($request->hasFile('image') && $user->image != null) {
            $imagePath = $request->file('image')->store('userImg', 'public');
            Storage::disk('public')->delete($user->image);
        } else if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('userImg', 'public');
        } else{
            $imagePath = null; // Atur ke null jika tidak ada file yang diunggah
        }

        // dd($imagePath);

        $user->name = $request->name;
        $user->level = $level;
        $user->gender = $gender;
        $user->telp = $request->telp;
        $user->alamat = $request->alamat;
        $user->image = $imagePath;
        $user->save();

        return redirect()->route('users')->with('success', 'User berhasil diupdate');
    }
}
