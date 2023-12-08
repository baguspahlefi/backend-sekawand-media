<?php

namespace App\Exports;

use App\Models\Pemesanan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMapping;

use Carbon\Carbon;

class PemesananExport implements FromCollection,WithHeadings,WithStyles, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $startDate;
    protected $endDate;
    
    public function __construct($startDate,$endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function collection()
{
    $query = Pemesanan::query();
    $startDate = $this->startDate ? Carbon::parse($this->startDate)->format('Y-m-d') : null;
    $endDate = $this->endDate ? Carbon::parse($this->endDate)->format('Y-m-d') : null;

    // Filter status close without date filtering
    if (!$this->startDate && !$this->endDate) {
        $query->get();
    } else {
        // If startDate and/or endDate are provided, apply date filtering
        if ($this->startDate && $this->endDate) {
            $query->whereBetween('tgl_peminjaman', [$startDate, $endDate]);
        }
    }

    // Ambil data dengan hanya memilih kolom yang diinginkan
    // Sertakan data terkait dari model Kendaraan
    $data = $query->with('kendaraanPeminjaman')->get([
        'id', 'user_id', 'kendaraan_id', 'tgl_peminjaman', 'tgl_pengembalian', 'status'
    ]);

    return $data;
}

public function map($pemesanan): array
{
    return [
        $pemesanan->kendaraanPeminjaman->nopol,
        $pemesanan->kendaraanPeminjaman->nama_kendaraan,
        $pemesanan->kendaraanPeminjaman->jenis_kendaraan,
        $pemesanan->tgl_peminjaman,
        $pemesanan->tgl_pengembalian,
        $pemesanan->kendaraanPeminjaman->region->nama,
        $pemesanan->status,
    ];
}


    public function startCol(): int
    {
        return 2;
    }

    public function headings(): array
    {
        return [
            ['NOPOL','Nama Kendaraan','Jenis Kendaraan','Tanggal Peminjaman','Tanggal Pengembalian','Region','status']
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => [
                'font' => ['bold' => true],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'startColor' => ['argb' => 'FFFF00'], // Warna latar belakang kuning
                ],
            ],
        ];
    }

}
