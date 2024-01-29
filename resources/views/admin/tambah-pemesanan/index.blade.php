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
                            <th>Penyetuju</th>
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
                            <td> <button
                                type="button"
                                class="btn btn-sm btn-info"
                                data-bs-toggle="modal"
                                data-bs-target="#basicModal-{{$item->id}}"
                                >
                                List Pihak Penyetuju
                                </button>
                            </td>
                            <td>
                                <a href="{{route('tambahPemesanan.show',$item->id)}}"><i class="text-primary fs-2 menu-icon tf-icons bx bx-info-circle"></i></a>
                                <a href="{{route('tambahPemesanan.edit',$item->id)}}"><i class="text-warning fs-2 menu-icon tf-icons bx bx-edit"></i></a>
                            </td>
                        </tr>
                           <!-- Modal -->
                            <div class="modal fade" id="basicModal-{{$item->id}}" tabindex="-1" aria-hidden="true">
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
                                    <form action="{{route('tambahPemesananPenyetuju.store')}}" method="post">
                                        @csrf
                                    <div class="row mb-3">
                                        <label class="col-sm-4 col-form-label" for="basic-default-phone">Pilih pihak penyetuju kendaraan</label>
                                        <div class="col-sm-8">
                                            <div class="input-group input-group-merge">
                                            <input type="text" class="d-none" name="kendaraan_id" value="{{$item->id}}">
                                            <select id="defaultSelect" class="form-select" name="user_id">
                                                <option selected>Pilih</option>
                                                @foreach ($user as $userData)
                                                    <option value="{{$userData->id}}">{{$userData->nama}}</option>
                                                @endforeach
                                            </select>
                                            </div>  
                                        </div>
                                        <div class="row mt-4 justify-content-end">
                                        <div class="col-2">
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </div>
                                    </form>
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