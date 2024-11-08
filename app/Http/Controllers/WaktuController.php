<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waktu;

class WaktuController extends Controller
{
    public function index(Request $request){

        $data = Waktu::orderBy('created_at', 'DESC');
        $no = 1;
        $title = 'Waktu';

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $data = $data->where('nama_waktu', 'LIKE', '%' . $searchTerm . '%');
        }

        // Get paginated results or full list if no pagination is desired
        $waktu = $data->get();

        return view('admin/waktu', compact('title', 'no', 'waktu'));
    }
    public function store(Request $request){
        $waktu = new Waktu();
        $waktu->nama_waktu = $request->nama_waktu;
        $waktu->waktu_masuk = $request->masuk;
        $waktu->waktu_keluar = $request->keluar;
        $waktu->save();
        return redirect()->back()->with('success', 'User berhasil ditambahkan.');
    }
    public function hapus($id){
        $waktu = Waktu::findOrFail($id);
        $waktu->delete();
        return redirect()->route('waktu')->with('success', 'Data waktu berhasil dihapus');
    }
}
