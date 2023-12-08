@extends('layouts.app_sneat_admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="{{route('tambahPemesanan.create')}}" class="btn btn-primary mb-4"><i class="menu-icon tf-icons bx bx-plus-circle"></i>Tambah Pemesanan</a>
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No pol</th>
                            <th>Nama kendaraan</th>
                            <th>Jenis kendaraan</th>
                            <th>Region</th>
                            <th>Konsumsi BBM</th>
                            <th>Jadwal service</th>
                            <th>Jumlah</th>
                            {{-- <th>Riwayat pemakaian</th>
                            <th>Penyetuju</th> --}}
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kendaraan as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nopol}}</td>
                            <td>{{$item->nama_kendaraan}}</td>
                            <td>{{$item->jenis_kendaraan}}</td>
                            <td>{{$item->region->nama}}</td>
                            <td>{{$item->bbm}}</td>
                            <td>per {{$item->jadwal_service}}</td>
                            <th>{{$item->jumlah}}</th>
                            <td>
                                <a href="{{route('tambahPemesanan.show',$item->id)}}"><i class="text-primary fs-2 menu-icon tf-icons bx bx-info-circle"></i></a>
                                <a href="{{route('tambahPemesanan.edit')}}"><i class="text-warning fs-2 menu-icon tf-icons bx bx-edit"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- Datatables js --}}
<script src="{{url('assets/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{url('assets/js/main.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
  
@endsection