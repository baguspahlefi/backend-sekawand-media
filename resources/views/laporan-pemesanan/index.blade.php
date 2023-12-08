@extends('layouts.app_sneat')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form class="d-inline" action="{{route('laporanPemesanan.filter')}}" method="POST" id="filterForm">
                    @csrf
               <div class="row">
                    <div class="col-6 col-md-6">
                        <label class="ms-1" for="start-date">Start date</label>
                        <input placeholder="Select date" id="due" name="startDate" type="date" id="example" class="form-control" required>
                    </div>
                    <div class="col-6 col-md-6">
                        <label class="ms-1" for="start-date">End date</label>
                        <input placeholder="Select date" id="due" name="endDate" type="date" id="example" class="form-control" required>
                    </div>
                    <button class="btn btn-outline-primary mt-2 mb-2" style="float:left;">Filter</button>
                </form>
               </div>
               <div class="row mt-4">
                <div class="col-12">
                    <form class="d-inline" method="post" action="{{ route('laporanPemesanan.excel') }}">
                        @csrf
                        <input placeholder="Select date" id="due" name="startDate" type="date" id="example" class="form-control d-none" value="{{$tanggalAwal}}">
                    
                        <input placeholder="Select date" id="due" name="endDate" type="date" id="example" class="form-control d-none" value="{{$tanggalAkhir}}">
                    
                        <button class="btn btn-primary" type="submit">Export Excel</button>
                    </form>    
                </div>
               </div>
               <div class="row mt-4">
                <div class="col-12">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NOPOL</th>
                                <th>Nama Kendaraan</th>
                                <th>Jenis Kendaraan</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Region</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->kendaraanPeminjaman->nopol}}</td>
                                <td>{{$item->kendaraanPeminjaman->nama_kendaraan}}</td>
                                <td>{{$item->kendaraanPeminjaman->jenis_kendaraan}}</td>
                                <td>{{$item->tgl_peminjaman}}</td>
                                <td>{{$item->tgl_pengembalian}}</td>
                                <td>{{$item->kendaraanPeminjaman->region->nama}}</td>
                                <td>{{$item->status}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
               </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Pihak Penyetuju</h5>
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
        ></button>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="table-responsive text-nowrap">
                <table class="table">
                <tbody class="table-border-bottom-0">
                    <tr>
                       <td>Approve</td>
                       <td><input id="#" type="hidden" name="level1"  value="#"></td>
                        <td><input class="form-check-input" type="checkbox" role="switch" id="#"></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Close
        </button>
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