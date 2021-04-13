<?php

namespace App\Http\Controllers;

use App\Jenis;
use App\Konsultasi;
use App\Permintaan;
use App\Repair;
use App\Testimoni;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    public function request()
    {
        return view ('user.request');
    }

    public function requestpost(Request $request)
    {
        $data = new Permintaan;

        $data->alamat = $request->input('alamat');
        $data->notlp = $request->input('notlp');
        $data->detail = $request->input('detail');
        // dd($request);

        $data->save();

        Alert::success('Success', 'Data Berhasil Di Input');
        return redirect()->route('route');

    }

    public function repair()
    {
        return view ('user.repair');
    }

    public function repairpost(Request $request)
    {
        $data = new Repair;

        $data->alamat = $request->input('alamat');
        $data->notlp = $request->input('notlp');
        $data->detail = $request->input('detail');

        $data->save();

        Alert::success('Success', 'Data Berhasil Di Input');
        return redirect()->route('route');
    }

    public function konsultasi()
    {
        return view ('user.konsultasi');
    }

    public function konsultasipost(Request $request)
    {
        $data = new Konsultasi;

        $data->alamat = $request->input('alamat');
        $data->notlp = $request->input('notlp');
        $data->detail = $request->input('detail');

        $data->save();

        Alert::success('Success', 'Data Berhasil Di Input');
        return redirect()->route('route');
    }

    public function jenis()
    {
        return view ('user.jenis');
    }

    public function jenispost(Request $request)
    {
    }

    public function testimoni()
    {
        return view ('user.testimoni');
    }

    public function testimonipost(Request $request)
    {
        $this->validate(request(),
        [
            'gambar' => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048"
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('gambar');
        }

        Testimoni::create([
            'user_id' => $request->user_id,
            'gambar' => $gambar,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('testimoni');
    }
}
