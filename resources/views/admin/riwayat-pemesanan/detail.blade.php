@extends('layouts.app_sneat_admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row mt-4">
                    <div class="container">
                      <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Detail Riwayat Pemesanan #1</h5>
                      </div>
                      <div class="card-body">
                        <form>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-nopol">NIP</label>
                            <div class="col-sm-10">
                              <input type="text" name="nip" class="form-control" id="basic-default-name" value="{{$pemesanan->user->nip}}" />
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
                                name="nama"
                                value="{{$pemesanan->user->nama}}"
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
                                value="{{$pemesanan->user->jabatan->nama}}"
                                name="jabatan"
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
                              value="{{$pemesanan->tgl_peminjaman}}"
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
                              value="{{$pemesanan->tgl_pengembalian}}"
                              name="tgl_pengembalian"
                            />
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Jadwal Service</label>
                            <div class="col-sm-10">
                              <input
                                type="text"
                                class="form-control"
                                id="basic-default-company"
                                placeholder="ACME Inc."
                                value="{{$pemesanan->kendaraanPeminjaman->jadwal_service}}"
                                name="jadwalService"
                              />
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Region</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                  <select id="defaultSelect" class="form-select" name="region">
                                    <option value="{{$pemesanan->kendaraanPeminjaman->region_id}}">{{$pemesanan->user->region->nama}}</option>
                                    @foreach ($region as $region)
                                      <option value="{{$region->id}}">{{$region->nama}}</option>
                                    @endforeach
                                      
                                  </select>
                                </div>
                              </div>
                          </div>
                          
                          <div class="row mb-4">
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
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Status</label>
                            <div class="col-sm-10">
                              <p>Available</p>
                            </div>
                          </div>

                          <hr>
                          <h5 class="my-4">Detail Kendaraan</h5>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-nopol">No Pol</label>
                            <div class="col-sm-10">
                              <input type="text" name="nopol" class="form-control" id="basic-default-name" value="{{$pemesanan->kendaraanPeminjaman->nopol}}" />
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Nama Kendaraan</label>
                            <div class="col-sm-10">
                              <input
                                type="text"
                                class="form-control"
                                id="basic-default-company"
                                placeholder="ACME Inc."
                                value="{{$pemesanan->kendaraanPeminjaman->nama_kendaraan}}"
                                name="namaKendaraan"
                              />
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Jenis kendaraan</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <select id="defaultSelect" class="form-select" name="jenis_kendaraan">
                                    <option>Angkutan orang</option>
                                    <option value="1">Angkutan orang</option>
                                    <option value="2">Angkutan barang</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Region</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                  <select id="defaultSelect" class="form-select" name="regionMobil">
                                    <option value="{{$pemesanan->kendaraanPeminjaman->region_id}}">{{$pemesanan->kendaraanPeminjaman->region->nama}}</option>
                              
                                      
                                  </select>
                                </div>
                              </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Konsumsi BBM</label>
                            <div class="col-sm-10">
                              <input
                                type="text"
                                class="form-control"
                                id="basic-default-company"
                                placeholder="ACME Inc."
                                value="{{$pemesanan->kendaraanPeminjaman->bbm}}"
                                name="BBM"
                              />
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Jadwal Service</label>
                            <div class="col-sm-10">
                              <input
                                type="text"
                                class="form-control"
                                id="basic-default-company"
                                placeholder="ACME Inc."
                                value="{{$pemesanan->kendaraanPeminjaman->jadwal_service}}"
                                name="jadwalService"
                              />
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="3">
                                  {{$pemesanan->kendaraanPeminjaman->deskripsi}}
                                </textarea>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Gambar Kendaraan</label>
                            <div class="col-sm-10">
                              <img src="{{ Storage::url($pemesanan->kendaraanPeminjaman->gambar) }}" width="250" alt="Product Image" class="img-fluid">
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