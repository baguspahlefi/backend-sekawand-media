<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Penyetuju;

class AjukanPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraan = Kendaraan::all();
        return view('ajukan-pemesanan.index',
        [
            'kendaraan' => $kendaraan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $items = [
            'user_id' => $request->user_id,
            'kendaraan_id' => $request->kendaraan_id,
            'tgl_peminjaman' => $request->tgl_peminjaman,
            'tgl_pengembalian' => $request->tgl_pengembalian,
        ];
           // Lakukan pengurangan jumlah kendaraan
    $kendaraan = Kendaraan::find($request->kendaraan_id);

    // Periksa apakah kendaraan ditemukan
    if ($kendaraan) {
        // Periksa apakah jumlah kendaraan cukup
        if ($kendaraan->jumlah > 0) {
            // Kurangkan jumlah kendaraan
            $kendaraan->jumlah -= 1;
            $kendaraan->save();

            // Buat entri pemesanan
            Pemesanan::create($items);

            return redirect()->route('ajukan-pemesanan.index')->with('success', 'Berhasil Diajukan');
        } else {
            return redirect()->route('ajukan-pemesanan.index')->with('failed', 'Maaf, stok kendaraan tidak mencukupi');
        }
        } else {
            return redirect()->route('ajukan-pemesanan.index')->with('failed', 'Kendaraan tidak ditemukan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        $user = auth()->user();
        $kendaraan = Kendaraan::findOrFail($id);
        $penyetuju = Penyetuju::where('kendaraan_id',$id)->get();
        return view('ajukan-pemesanan.detail',[
            'penyetuju' => $penyetuju,
            'user' => $user,
            'kendaraan' => $kendaraan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kendaraan $kendaraan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kendaraan $kendaraan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kendaraan $kendaraan)
    {
        //
    }
}
