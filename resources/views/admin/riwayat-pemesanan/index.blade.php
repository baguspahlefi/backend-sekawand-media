@extends('layouts.app_sneat_admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Region</th>
                            <th>Penyetuju</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1201291</td>
                            <td>Messi</td>
                            <td>Pegawai</td>
                            <td>2011-04-25</td>
                            <td>2011-08-25</td>
                            <td>A</td>
                            <td>
                                <button
                                type="button"
                                class="btn btn-sm btn-info"
                                data-bs-toggle="modal"
                                data-bs-target="#basicModal"
                                >
                                List Pihak Penyetuju
                                </button>
                            </td>
                            <td>Approve</td>
                            <td>
                                <a href="{{route('riwayatPemesanan.show')}}"><i class="text-primary fs-2 menu-icon tf-icons bx bx-info-circle"></i></a>
                                <a href="{{route('riwayatPemesanan.show')}}"><i class="text-danger fs-2 menu-icon tf-icons bx bx-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>1</td>
                        <td>Ronaldo</td>
                        <td>Supervisor</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Ronaldo</td>
                        <td>Supervisor</td>
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