<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\Region;
use App\Models\Jabatan;
use App\Models\User;
use App\Models\Penyetuju;

class TambahPemasananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraan = Kendaraan::all();
        $user = User::all();
        return view('admin.tambah-pemesanan.index',
        [

            'user' => $user,
            'kendaraan' => $kendaraan
        ]
    );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $region = Region::all();
        $jabatan = Jabatan::all();
        $driver = User::where('jabatan_id','3')->get();

        return view('admin.tambah-pemesanan.create',[
   
            'driver' => $driver,
            'region' => $region,
            'jabatan' => $jabatan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * 
     */
    public function storePenyetuju(Request $request)
    {
        $item = $request->all();
        Penyetuju::create($item);
        return redirect()->route('tambahPemesanan.index')->with('success', 'Berhasil tambah penyetuju');

    }


    public function store(Request $request)
    {   
        $item = $request->all();
        
        $this->validate($request,
          [
            'path_gambar.required' => 'Gambar wajib diunggah.',
            'path_gambar.image' => 'File harus berupa gambar.',
            'path_gambar.mimes' => 'Format gambar harus jpeg, png, atau jpg.',
            'path_gambar.max' => 'Gambar tidak boleh lebih dari 5MB.',
        ]);
        
        if ($request->hasFile('gambar') && $request->file('gambar')->isValid()) {
            $item['gambar'] = $request->file('gambar')->store('assets/gallery', 'public');
            Kendaraan::create($item);
            return redirect()->route('tambahPemesanan.index')->with('success', 'Berhasil tambah');
        } else {
            return redirect()->back()->with('failed','Pastikan format gambar benar dan gambar tidak boleh lebih dari 5MB');
        }
        return redirect()->route('tambahPemesanan.index')->with('success', 'Berhasil tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $penyetuju = Penyetuju::where('kendaraan_id',$id)->get();
        return view('admin.tambah-pemesanan.detail',[
            'penyetuju' => $penyetuju,
            'kendaraan' => $kendaraan,
            'driver' => $kendaraan->driver,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $kendaraan = findOrFail($id);
        $user = auth()->user();

        return view('admin.tambah-pemesanan.edit',
        [
            'user' => $user,
            'kendaraan' => $kendaraan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
