<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jenis;
use App\Konsultasi;
use App\Permintaan;
use App\Repair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function request()
    {
        $data = Permintaan::all();
        return view('halaman-admin.content.request', compact('data'));
    }

    public function repair()
    {
        $data = Repair ::all();
        return view('halaman-admin.content.repair', compact('data'));
    }

    public function konsultasi()
    {
        $data = Konsultasi ::all();
        return view('halaman-admin.content.konsultasi', compact('data'));
    }

    public function jenis()
    {
        $data = Jenis::all();
        return view('halaman-admin\content\jenis', compact('data'));
    }

    public function jenispost(Request $request)
    {
        $this->validate(request(),
        [
            'gambar' => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            'judul' => "required",
            'keterangan' => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('gambar');
        }

        Jenis::create([
            'gambar' => $gambar,
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back();
    }

    public function jenisedit(Jenis $data)
    {
        return view('halaman-admin\content\editjenis', compact('data'));
    }

    public function jenisupdate(Request $request, Jenis $data)
    {
        $this->validate(request(),
        [
            'gambar' => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            'judul' => "required",
            'keterangan' => "required"
        ]);

        $gambar = $data->gambar;
        // dd($data);

        if ($request->hasFile('gambar')) {
            Storage::delete($data->gambar);
            $gambar = $request->file('gambar')->store('gambar');
        }


        $data->update([
            'gambar' => $gambar,
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
        ]);
        
        Alert::success('Success', 'Data Berhasil Diedit');
        return redirect()->route('admin.jenis');
    }

    public function deletejenis(Jenis $data)
    {
        $data->delete();

        Alert::success('Success', 'Data Berhasil Hapus');
        return redirect()->route('admin.jenis');
    }
}
