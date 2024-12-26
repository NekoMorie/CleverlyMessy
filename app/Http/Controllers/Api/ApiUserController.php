<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class ApiUserController extends Controller
{
    public function getSelected($id)
    {
        $user = User::with('classname')->findOrFail($id); // Eager load relasi
        $baseUrl = config('app.url');
        $imagePath = $user->image;
        if($user->image == null){
            $imagePath = 'pp/foto_default.jpg';
        }
        $imageUrl = $baseUrl . '/storage/' . $imagePath;

        return response()->json([
            'data' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'jk' => $user->gender,
                'image' => $imageUrl,
                'nis' => $user->nis,
                'kelas' => $user->classname->nama_kelas ?? 'Tidak ada kelas', // Akses nama kelas
            ]
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string',
            'nis' => 'required|string',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->nis = $request->nis;
        $user->save();
        return response()->json([
            'message' => 'User updated successfully',
            'data' => $user
        ], 200);
    }

    public function updateImg(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'gender' => 'required|string',
        //     'nis' => 'required|string',
        // ]);
        $user = User::findOrFail($id);
        if($user->image != null){
            Storage::disk('public')->delete($user->image);
        }
        $folderName = 'userImg';
        $imageName = Str::random(32). "." .$request->image->getClientOriginalExtension();
        $filePath = $folderName .'/' . $imageName;
        Storage::disk('public')->put($filePath, file_get_contents($request->image));

        $user->image = $filePath;
        $user->save();
        return response()->json([
            'message' => 'User updated successfully',
            'data' => $user
        ], 200);
    }

    public function getTime($id){
        $user = User::findOrFail($id);
        return response()->json([
            'data' => [
                'id' => $user->id,
                'waktu' => $user->waktu->nama_waktu ?? 'Tidak ada waktu',
                'masuk' => $user->waktu->waktu_masuk ?? '00:00',
                'keluar' => $user->waktu->waktu_keluar ?? '00:00',
            ]
        ], 200);
    }

    public function getLocation($id){
        $user = User::findOrFail($id);
        return response()->json([
            'data' => [
                'id' => $user->id,
                'lokasi' => $user->lokasi->nama_lokasi ?? 'Tidak ada lokasi',
                'long' => $user->lokasi->long_lokasi ?? '',
                'lat' => $user->lokasi->lat_lokasi ?? '',
            ]
        ], 200);
    }
}