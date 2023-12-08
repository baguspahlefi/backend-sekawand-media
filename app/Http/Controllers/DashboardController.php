<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemesananData = DB::table('pemesanan')
        ->select(DB::raw("DATE_FORMAT(tgl_peminjaman, '%Y-%m') as month"), DB::raw('count(*) as total'))
        ->groupBy('month')
        ->get();

        $chart = Charts::database($pemesananData, 'bar', 'highcharts')
        ->title('Jumlah Pemesanan Kendaraan Tiap Bulan')
        ->elementLabel('Total Pemesanan')
        ->dimensions(1000, 500)
        ->responsive(true)
        ->groupBy('month');
        return view('dashboard',[
            'chart' => $chart
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
