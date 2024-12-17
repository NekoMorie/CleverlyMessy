<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Absen;
// use App\Http\Requests\AbsenApiRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AbsenApiController extends Controller
{
    public function store(Request $request)
    {
        try{

            $request->validate([
                'users_id' => 'required|integer',
                'status' => 'required|string',
                // 'foto_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
            ]);
            $folderName = 'absensi';
            $imageName = Str::random(32). "." .$request->image->getClientOriginalExtension();
            $filePath = $folderName .'/' . $imageName;
            Storage::disk('public')->put($filePath, file_get_contents($request->image));

            Absen::create([
                'users_id' => $request->users_id,
                'foto_path' => $filePath,
                'status' => $request->status
            ]);
            return response()->json([
               'message' => 'Absen berhasil disimpan',
                'data' => Absen::latest()->first()
            ], 200);
        }catch(\Exception $e){
            return response()->json([
               'message' => $e->getMessage()
            ], 500);
        }
    }

    public function delete($id)
    {
        try{
            $absen = Absen::findOrFail($id);
            if ($absen->foto_path != null)
            {
                Storage::disk('public')->delete($absen->foto_path);
            }
            $absen->delete();
            return response()->json([
               'message' => 'Absen berhasil dihapus'
            ], 200);
        }catch(\Exception $e){
            return response()->json([
                'message' => $e->getMessage()
             ], 500);
        }
    }

    public function update($id, Request $request)
    {
        try {
            $request->validate([
                'image' => 'nullable|file|mimes:jpg,jpeg,png|max:2048', // Validasi file
                // 'status' => 'required|string'
            ]);

            $absen = Absen::findOrFail($id);

            // Hapus file lama jika ada
            if ($absen->foto_path != null) {
                Storage::disk('public')->delete($absen->foto_path);
            }

            // Upload file baru jika ada
            $filePath = $absen->foto_path; // Default tetap file lama
            $folderName = 'absensi';
            $imageName = Str::random(32) . '.' . $request->file('image')->getClientOriginalExtension();
            $filePath = $folderName . '/' . $imageName;
            Storage::disk('public')->put($filePath, file_get_contents($request->file('image')));
            // if ($request->hasFile('image')) {
            // }

            // Update data di database
            $absen->update([
                'foto_path' => $filePath,
                'status' => $request->status ?? $absen->status
            ]);

            return response()->json([
                'message' => 'Absen berhasil diperbarui',
                'data' => $absen
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function get($id)
    {
        $absen = Absen::findOrFail($id);
        $baseUrl = config('app.url');
        $imagePath = $absen->foto_path;
        $imageUrl = $baseUrl . '/storage/' . $imagePath ;
        return response()->json([
            'data' => [
                'id' => $absen->id,
                'users_id' => $absen->users_id,
                'tanggal' => $absen->created_at->format('d-m-Y'),
                'waktu' => $absen->created_at->format('H:i'),
                'status' => $absen->status,
                'image' => $imageUrl
            ]
        ], 200);
    }


    public function statistik($id){
        $data = Absen::where('users_id', $id)->get();
        $hadir = $data->where('status', 'Hadir')->count();
        $sakit = $data->where('status', 'Sakit')->count();
        $izin = $data->where('status', 'Izin')->count();
        $terlambat = $data->where('status', 'Terlambat')->count();
        return response()->json([
            'data' => [
                'hadir' => $hadir ?? 0,
                'sakit' => $sakit ?? 0,
                'izin' => $izin ?? 0,
                'terlambat' => $terlambat ?? 0
            ]
        ]);
    }

}