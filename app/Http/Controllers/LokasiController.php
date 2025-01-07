<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LokasiController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Lokasi';
        $no = 1;
        $data = Location::orderBy('nama_lokasi', 'ASC');

        // Check if there's a search term
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $data = $data->where('nama_lokasi', 'LIKE', '%' . $searchTerm . '%');
        }

        $user = Auth::guard('admin')->user();
        $lokasi = $data->get();
        return view('admin/lokasi', compact('title', 'lokasi', 'no', 'user'));
    }
    public function store(Request $request)
    {
        $lokasi = new Location();
        $lokasi->nama_lokasi = $request->nama_lokasi;
        $lokasi->lat_lokasi = $request->lat_lokasi;
        $lokasi->long_lokasi = $request->long_lokasi;
        $lokasi->radius = $request->radius;
        $lokasi->save();

        return redirect()->back()->with('success', 'User berhasil ditambahkan.');
    }
    public function hapus($id)
    {
        $lokasi = Location::findOrFail($id);
        $lokasi->delete();

        return redirect()->route('lokasi')->with('success', 'Lokasi berhasil dihapus!');
    }
}
