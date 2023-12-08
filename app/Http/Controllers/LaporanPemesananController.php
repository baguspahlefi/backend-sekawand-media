<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use Carbon\Carbon;
use App\Exports\PemesananExport;
use Maatwebsite\Excel\Facades\Excel;

class LaporanPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tanggalAwal = null;
        $tanggalAkhir = null;
        $pemesanan = Pemesanan::with('kendaraanPeminjaman')->get();
        return view('laporan-pemesanan.index',[
            'tanggalAwal' => $tanggalAwal,
            'tanggalAkhir' => $tanggalAkhir,
            'data' => $pemesanan,
        ]);
    }

    public function filter(Request $request)
    {
        $startDate = $request->has('startDate') ? Carbon::createFromFormat('Y-m-d', $request->input('startDate'))->startOfDay() : null;
        $endDate = $request->has('endDate') ? Carbon::createFromFormat('Y-m-d', $request->input('endDate'))->endOfDay() : null;
        $request->session()->put('startDate',$startDate);
        $request->session()->put('endDate',$endDate);

        if($request->session()->has('startDate')){
			$tanggal = $request->session()->get('startDate');
            $tanggalAwal = Carbon::parse($tanggal)->format('Y-m-d');
		}else{
			$tanggalAwal = null;
		}

        if($request->session()->has('endDate')){
			$tanggal = $request->session()->get('endDate');
            $tanggalAkhir = Carbon::parse($tanggal)->format('Y-m-d');
		}else{
			$tanggalAkhir = null;
		}
    
        $query = Pemesanan::query();
    
        if ($startDate && $endDate) {
            $query->whereBetween('tgl_peminjaman', [$startDate, $endDate]);
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

     public function reportExcel(Request $request)
    {
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        return Excel::download(new PemesananExport($startDate,$endDate), 'laporan-pemesanan.xlsx');
    }

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
