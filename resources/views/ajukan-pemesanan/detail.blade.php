@extends('layouts.app_sneat')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-5">
                  <div class="container">
                    <div class="container mt-5">
                      <div class="row mb-4">
                        <div class="col-md-6 my-auto">
                          <img src="{{ Storage::url($kendaraan->gambar) }}" alt="Product Image" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                          <h2>{{$kendaraan->nama_kendaraan}}</h2>
                          <p>
                            {{$kendaraan->deskripsi}}
                          </p>
                          <div class="subtext">
                            <strong><u>Jenis Kendaraan:</u></strong> {{$kendaraan->jenis_kendaraan}}
                          </div>
                          <div class="subtext">
                            <strong><u>Konsumsi BBM:</u></strong> {{$kendaraan->bbm}}
                          </div>
                          <div class="subtext">
                            <strong><u>Jadwal Service:</u></strong> Setiap {{$kendaraan->jadwal_service}}
                          </div>
                          <div class="subtext">
                            <strong><u>Riwayat Pemakaian:</u><a href="#"> Klik disini</a>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="row mt-4">
                        <div class="container">
                          <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Form Pengajuan</h5>
                          </div>
                          <form action="{{route('ajukan-pemesanan.store')}}" method="post">
                            @csrf
                          <div class="card-body">
                            <div class="row mb-3">
                              <input class="d-none" type="text" name="user_id" value="{{$user->id}}"/>
                              <input class="d-none" type="text" name="kendaraan_id" value="{{$kendaraan->id}}"/>
                              <label class="col-sm-2 col-form-label" for="basic-default-nopol">NIP</label>
                              <div class="col-sm-10">
                                <input type="text" name="nip" class="form-control" id="basic-default-name" value="{{$user->nip}}" readonly/>
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Nama</label>
                              <div class="col-sm-10">
                                <input
                                  type="text"
                                  class="form-control"
                                  id="basic-default-company"
                                  placeholder="ACME Inc."
                                  value="{{$user->nama}}"
                                  name="nama"
                                  readonly
                                />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="basic-default-email">Jabatan</label>
                              <div class="col-sm-10">
                                <input
                                  type="text"
                                  class="form-control"
                                  id="basic-default-company"
                                  placeholder="ACME Inc."
                                  value="{{$user->jabatan->nama}}"
                                  name="jabatan"
                                  readonly
                                />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="basic-default-phone">Tanggal Peminjaman</label>
                              <div class="col-sm-10">
                                <input
                                type="date"
                                class="form-control"
                                id="basic-default-company"
                                placeholder="ACME Inc."
                                name="tgl_peminjaman"
                              />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="basic-default-phone">Tanggal Pengembalian</label>
                              <div class="col-sm-10">
                                <input
                                type="date"
                                class="form-control"
                                id="basic-default-company"
                                placeholder="ACME Inc."
                                name="tgl_pengembalian"
                              />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="basic-default-phone">Region Kendaraan</label>
                              <div class="col-sm-10">
                                  <p>Region {{$kendaraan->region->nama}}</p>
                              </div>
                              <div class="col-sm-10 d-none">
                                <input
                                type="text"
                                class="form-control"
                                id="basic-default-company"
                                placeholder="ACME Inc."
                                value="{{$kendaraan->region->nama}}"
                              />
                            </div>
                            
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Pihak Penyetuju</label>
                              <div class="col-sm-10 mb-4">
                                  <button
                                  type="button"
                                  class="btn btn-sm btn-info"
                                  data-bs-toggle="modal"
                                  data-bs-target="#basicModal"
                                  >
                                  List Pihak Penyetuju
                                  </button>
        
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
                                                  @foreach ($penyetuju as $penyetuju)
                                                  <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$penyetuju->user->nama}}</td>
                                                    <td>{{$penyetuju->user->jabatan->nama}}</td>
                                                  </tr>
                                                  @endforeach
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
                            </div>
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Status</label>
                              <div class="col-sm-10">
                              @if ($kendaraan->jumlah == 0)
                                <p>Booked</p>
                                @else
                                <p>Available</p>
                              @endif
                              </div>
                            </div>
                          </div>
                            <div class="row justify-content-end">
                              <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Ajukan</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script></script>
@endsection