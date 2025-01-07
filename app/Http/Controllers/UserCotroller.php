<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Institusi;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserCotroller extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::guard('admin')->user();

        $data = User::orderBy('name', 'ASC');

        // if ($request->has('search')) {
        //     $searchTerm = $request->input('search');
        //     $data = $data->where('name', 'LIKE', '%' . $searchTerm . '%')
        //         ->orWhere('created_by', 'LIKE', '%' . $searchTerm . '%');
        // }

        $users = $data->get();

        // Default ke tampilan HTML
        $title = 'User';
        $no = 1;
        return view('admin/users/users', compact('title', 'users', 'no', 'user'));
    }

    public function indexApi()
    {

        $data = User::orderBy('name', 'ASC')->get();
        return $this->successResponse('oKE Response', $data);
    }

    public function usersAdd(Request $request)
    {
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('userImg', 'public');
        } else {
            $imagePath = null;
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
        if ($user->image != null) {
            Storage::disk('public')->delete($user->image);
        }
        $user->delete();
        return redirect()->route('users')->with('success', 'User berhasil dihapus!');
    }
    public function editUser($id)
    {
        $user = Auth::guard('admin')->user();

        $users = User::findOrFail($id);
        $title = 'Edit User';
        return view('admin/editUser', compact('title', 'users', 'user'));
    }
    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if ($request->level == null) {
            $level = $user->level;
        } else {
            $level = $request->level;
        }
        if ($request->gender == null) {
            $gender = $user->gender;
        } else {
            $gender = $request->gender;
        }

        if ($request->hasFile('image') && $user->image != null) {
            $imagePath = $request->file('image')->store('userImg', 'public');
            Storage::disk('public')->delete($user->image);
        } else if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('userImg', 'public');
        } else {
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
    public function UserAdmin()
    {
        $user = Auth::guard('admin')->user();
        $data = Admin::where('role', 'Admin')->orderBy('last_login', 'ASC');
        $users = $data->get();
        $title = 'Admin';
        return view('admin/users/admin/admin', compact('title', 'users', 'user'));
    }

    public function addAdmin()
    {
        $user = Auth::guard('admin')->user();
        $title = 'Tambah Admin';
        return view('admin/users/admin/add', compact('title', 'user'));
    }
    public function adminStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:admin',
            'phone_number' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:6048',
            'alamat' => 'nullable|string'
        ]);
        // \dd($request->all());

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('userImg', 'public');
        } else {
            $imagePath = 'userImg/defaultUser.jpg';
        }

        if ($request->password == null) {
            $password = '@Admin123';
        } else {
            $password = $request->password;
        }

        $user = new Admin();
        $user->nama = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($password);
        $user->role = 'Admin';
        $user->alamat = $request->alamat;
        $user->foto = $imagePath;
        $user->phone_number = $request->phone_number;
        $user->save();

        return redirect("admin/useradmin")->with('success', 'Admin berhasil ditambahkan.');
    }
    public function editAdmin($id)
    {
        $user = Auth::guard('admin')->user();
        $users = Admin::where('id_admin', $id)->first();
        // \dd($users);
        $title = 'Edit Admin';
        return view('admin/users/admin/edit', compact('title', 'users', 'user'));
    }
    public function updateUserAdmin(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'phone_number' => 'nullable|numeric',
            'password' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:6048',
            'alamat' => 'nullable|string'
        ]);
        $user = Admin::findOrFail($id);

        if ($request->password == null) {
            $password = $user->password;
        } else {
            $password = bcrypt($request->password);
        }

        if ($request->hasFile('image') && $user->image != null) {
            if ($user->image == 'userImg/defaultUser.jpg') {
                $imagePath = 'userImg/defaultUser.jpg';
            } else {
                $imagePath = $request->file('image')->store('userImg', 'public');
                Storage::disk('public')->delete($user->image);
            }
        } else {
            $imagePath = 'userImg/defaultUser.jpg';
        }

        $user->nama = $request->name;
        // $user->email = $request->email;
        $user->password = $password;
        $user->phone_number = $request->phone_number;
        $user->foto = $imagePath;
        $user->save();

        return redirect()->route('admin')->with('success', 'Admin berhasil diupdate');
    }
    public function userDeleteAdmin($id)
    {
        $user = Admin::findOrFail($id);
        if ($user->image != null) {
            if ($user->image != 'userImg/defaultUser.jpg') {
                Storage::disk('public')->delete($user->image);
            }
        }
        $user->delete();
        return redirect()->route('admin')->with('success', 'Admin berhasil dihapus!');
    }
    public function UserCustomer()
    {
        $user = Auth::guard('admin')->user();
        $users = Admin::where('role', 'Customer')->orderBy('last_login', 'ASC')->get();
        $institusi = DB::table('admin')
            ->select('admin.*', 'institusi.*')
            ->join('institusi', 'admin.id_admin', '=', 'institusi.id_admin')
            ->where('admin.role', 'Customer')
            ->orderBy('last_login', 'ASC')
            ->get();
        $title = 'Customer';
        return view('admin/users/userbeli/customer', compact('title', 'users', 'user', 'institusi'));
    }
    public function CustomerDashboard($id)
    {
        $user = Auth::guard('admin')->user();
        $users = DB::table('admin')
            ->select('admin.*', 'institusi.*')
            ->join('institusi', 'admin.id_admin', '=', 'institusi.id_admin')
            ->where('admin.id_admin', $id)->first();
        // \dd($users);

        $paket = DB::table('pembelian_paket')
            ->select('pembelian_paket.*', 'paket.*')
            ->join('paket', 'pembelian_paket.id_paket', '=', 'paket.id')
            ->where('pembelian_paket.id_admin', $id)
            ->first();

        $paketInfo = DB::table('paket_info')
            ->join('paket', 'paket_info.id_paket', '=', 'paket.id')
            ->where('paket_info.id_paket', $paket->id_paket)
            ->select('paket_info.*', 'paket.*')
            ->get();

        $userInstitusi = User::where('id_perusahaan', $users->id_perusahaan)->first();
        $banyak_siswa = DB::table('users')->where('id_perusahaan', $users->id_perusahaan)->where('role', 'Siswa')->count();
        $banyak_guru = DB::table('users')->where('id_perusahaan', $users->id_perusahaan)->where('role', 'Guru')->count();

        $siswa = ($banyak_siswa / $paket->banyak_siswa) * 100;
        $guru = ($banyak_guru / $paket->banyak_walikelas) * 100;

        $persentase = [
            'siswa' => $siswa,
            'guru' => $guru
        ];

        $title = 'Customer Dashboard';
        return view('admin/users/userbeli/dashboard_customer', compact('title', 'users', 'user', 'banyak_siswa', 'banyak_guru', 'userInstitusi', 'paket', 'paketInfo', 'persentase'));
    }
}
