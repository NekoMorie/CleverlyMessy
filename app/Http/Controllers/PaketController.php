<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\PaketInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaketController extends Controller
{
    public function index()
    {
        $user = Auth::guard('admin')->user();
        $title = 'Paket';
        $paket = Paket::with('paketInfo')->orderBy('harga', 'ASC')->get();
        // $intitusi = Institusi::where('id_admin', $user->id_admin)->first();
        return view('admin.paket.index', \compact('title', 'user', 'paket'));
    }
    public function create(Request $request)
    {

        // \dd($request->all());
        if ($request->status == 'on') {
            $status = "Aktif";
        } else {
            $status = "Non-Aktif";
        }

        $numericValue = (int) str_replace(['Rp.', '.', ' '], '', $request->harga);
        // \dd($numericValue);

        $paket = new Paket();
        $paket->nama_paket = $request->name;
        $paket->harga = $numericValue;
        $paket->durasi = $request->durasi;
        $paket->banyak_siswa = $request->siswa;
        $paket->code_warna = $request->warna;
        $paket->banyak_walikelas = $request->guru;
        $paket->icon = $request->icon;
        $paket->status = $status;
        $paket->save();
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request)
    {
        // \dd($request->all());
        if ($request->status == 'on') {
            $status = "Aktif";
        } else {
            $status = "Non-Aktif";
        }

        $numericValue = (int) str_replace(['Rp ', '.', ' '], '', $request->harga);
        // \dd($numericValue);
        $paket = Paket::find($request->id);
        $paket->nama_paket = $request->name;
        $paket->harga = $numericValue;
        $paket->durasi = $request->durasi;
        $paket->banyak_siswa = $request->siswa;
        $paket->code_warna = $request->warna;
        $paket->banyak_walikelas = $request->guru;
        $paket->icon = $request->icon;
        $paket->status = $status;
        $paket->save();
        return redirect()->back()->with('success', 'Data berhasil diubah');
    }
    public function delete(Request $request)
    {
        $paket = Paket::find($request->id);
        $paket->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function infoPaket()
    {
        $user = Auth::guard('admin')->user();
        $title = 'Paket';
        $paket = Paket::get();
        $getids = Paket::pluck('id');

        $paketInfo = DB::table('paket_info')
            ->join('paket', 'paket_info.id_paket', '=', 'paket.id')
            ->whereIn('paket_info.id_paket', $getids)
            ->select('paket_info.*', 'paket.*')
            ->get();

        return view('admin.paket.paketinfo', \compact('title', 'user', 'paket', 'paketInfo'));
    }
    public function infoCreate(Request $request)
    {
        if ($request->status == 'on') {
            $status = "Aktif";
        } else {
            $status = "Non-Aktif";
        }
        $paketInfo = new PaketInfo();
        $paketInfo->id_paket = $request->paket;
        $paketInfo->paket_aktif = $status;
        $paketInfo->list_paket = $request->deskripsi;
        $paketInfo->save();
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }
    public function infoUpdate(Request $request)
    {
        $status = $request->status == 'on' ? "Aktif" : "Non-Aktif";
        // \dd($request->all());
        $paketInfo = PaketInfo::where('id_paket', $request->id_paket)->first();
        if ($paketInfo) {
            // \dd($paketInfo);
            DB::table('paket_info')
                ->where('id', $request->id)
                ->update([
                    'paket_aktif' => $status,
                    'list_paket' => $request->deskripsi
                ]);

            return redirect()->back()->with('success', 'Data berhasil diubah');
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan!');
        }
    }

    public function infoDelete(Request $request)
    {
        $paketInfo = PaketInfo::find($request->id);
        $paketInfo->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
