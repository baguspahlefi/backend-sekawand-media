<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = DB::table('pemesanan')
        ->select(DB::raw('MONTH(tgl_peminjaman) as month'), DB::raw('COUNT(*) as total'))
        ->groupBy(DB::raw('MONTH(tgl_peminjaman)'))
        ->get();

        $chartData = [];

        for ($i = 1; $i <= 12; $i++) {
            $chartData[$i - 1] = 0; // Inisialisasi jumlah pemesanan setiap bulan dengan 0
        }

        // Mengisi array chartData dengan data dari query
        foreach ($data as $item) {
            $chartData[$item->month - 1] = $item->total;
        }
        return view('dashboard',[
            'chartData' => $chartData
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
