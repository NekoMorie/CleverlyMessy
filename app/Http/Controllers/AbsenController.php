<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Absen;
use Illuminate\Support\Facades\Auth;

class AbsenController extends Controller
{
    public function index()
    {
        $user = Auth::guard('admin')->user();
        $title = 'Absensi';
        return view('admin/absen', compact('title', 'user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'keterangan_masuk' => 'required|string',
            'foto_jam_absen' => 'required',
        ]);

        // Decode base64 image
        $image_data = $request->foto_jam_absen;
        $image_parts = explode(";base64,", $image_data);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file_name = 'absen_images/' . uniqid() . '.' . $image_type;

        // Save image to storage
        Storage::put($file_name, $image_base64);

        // Save to database (Assume you have an Absen model)
        Absen::create([
            'keterangan_masuk' => $request->keterangan_masuk,
            'foto_path' => $file_name,
        ]);

        return back()->with('success', 'Absen berhasil.');
    }
}
