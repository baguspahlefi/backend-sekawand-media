<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use Carbon\Carbon;

class LaporanPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $pemesanan = Pemesanan::with('kendaraanPeminjaman')->get();
        return view('laporan-pemesanan.index',[
            'data' => $pemesanan,
        ]);
    }

    public function filter(Request $request)
    {
        $tgl_peminjaman = $request->has('tgl_peminjaman') ? Carbon::createFromFormat('Y-m-d', $request->input('tgl_peminjaman'))->startOfDay() : null;
        $tgl_pengembalian = $request->has('tgl_pengembalian') ? Carbon::createFromFormat('Y-m-d', $request->input('tgl_pengembalian'))->endOfDay() : null;
        $request->session()->put('tgl_peminjaman',$tgl_peminjaman);
        $request->session()->put('tgl_pengembalian',$tgl_pengembalian);

        if($request->session()->has('tgl_peminjaman')){
			$tanggal = $request->session()->get('tgl_peminjaman');
            $tanggalAwal = Carbon::parse($tanggal)->format('Y-m-d');
		}else{
			$tanggalAwal = null;
		}

        if($request->session()->has('tgl_pengembalian')){
			$tanggal = $request->session()->get('tgl_pengembalian');
            $tanggalAkhir = Carbon::parse($tanggal)->format('Y-m-d');
		}else{
			$tanggalAkhir = null;
		}
    
        $query = Pemesanan::query();
    
        if ($tgl_peminjaman && $tgl_pengembalian) {
            $query->whereBetween('tgl_peminjaman', [$tgl_peminjaman, $tgl_pengembalian]);
        }
    
        $data = $query->get();

        return view('laporan-pemesanan.index', [
            'tanggalAwal' => $tanggalAwal,
            'tanggalAkhir' => $tanggalAkhir,
            'data' => $data,
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
