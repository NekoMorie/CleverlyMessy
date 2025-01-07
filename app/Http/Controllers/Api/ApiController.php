<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Absen;

class ApiController extends Controller
{
    protected function login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // \dd($loginData);
        // Cek kredensial
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            // Update FCM Token jika ada
            if ($request->filled('fcm_token')) {
                $user->update(['fcm_token' => $request->fcm_token]);
            }
            $baseUrl = config('app.url');
            $imagePath = $user->image;
            $imageUrl = $imagePath ? $baseUrl . '/storage/' . $imagePath : $baseUrl . '/storage/pp/foto_default.jpg';
            // Buat token
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'message' => 'Login berhasil!',
                'data' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'kelas' => $user->classnames_id,
                    'nis' => $user->nis,
                    'image' => $imageUrl,
                    // Tambahkan data lain yang relevan di sini
                ],
                'token' => $token,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Email atau password salah!',
            ], 401);
        }
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email', // Perbaikan pada unique
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return response()->json([
            'message' => 'Register berhasil!',
            'data' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'token' => $user->createToken('secret')->plainTextToken // Perbaikan pada createToken
            ]
        ], 200);
    }


    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json([
            'message' => 'Logout berhasil!'
        ], 200);
    }

    public function absen($id)
    {
        $data = Absen::where('users_id', $id)->orderBy('created_at', 'desc')->get();
        $absens = $data->map(function ($data) {
            return [
                'id' => $data->id,
                'tanggal' => $data->created_at->format('d-m-Y'),
                'waktu' => $data->created_at->format('H:i'),
                'status' => $data->status,
            ];
        });

        return response()->json([
            'data' => $absens
        ], 200);
    }

    public function users($id) {}
}
