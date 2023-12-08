@extends('layouts.app_sneat_admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row mt-4">
                    <div class="container">
                      <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Detail Kendaraan #{{$kendaraan->id}}</h5>
                      </div>
                      <div class="card-body">
                        <form>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-nopol">No Pol</label>
                            <div class="col-sm-10">
                             <p>{{$kendaraan->nopol}}</p>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Nama Kendaraan</label>
                            <div class="col-sm-10">
                              <p>{{$kendaraan->nama_kendaraan}}</p>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Jenis kendaraan</label>
                            <div class="col-sm-10">
                              <p>{{$kendaraan->jenis_kendaraan}}</p>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Region</label>
                            <div class="col-sm-10">
                                {{$kendaraan->region->nama}}
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Konsumsi BBM</label>
                            <div class="col-sm-10">
                              {{$kendaraan->bbm}}
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Jadwal Service</label>
                            <div class="col-sm-10">
                              {{$kendaraan->jadwal_service}}
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Jumlah</label>
                            <div class="col-sm-10">
                              {{$kendaraan->jumlah}}
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="3" readonly>{{$kendaraan->deskripsi}}</textarea>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Driver</label>
                            <div class="col-sm-10">
                              {{$kendaraan->kendaraan->nama}}
                            </div>
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
                            <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Gambar Kendaraan</label>
                            <div class="col-sm-10">
                              <img class="card-img-top w-50" src="{{ Storage::url($kendaraan->gambar) }}" alt="Card image cap" />
                            </div>
                          </div>
                          
                          <div class="row justify-content-end">
                            <div class="col-sm-10">
                              <a href="{{route('tambahPemesanan.index')}}" class="btn btn-primary">Back</a>
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
@endsection