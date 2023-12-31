@extends('layouts.app_sneat_admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row mt-4">
                    <div class="container">
                      <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Tambah Kendaraan #1</h5>
                      </div>
                      <div class="card-body">
                      <form action="{{route('tambahPemesanan.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-nopol">No Pol</label>
                            <div class="col-sm-10">
                              <input type="text" name="nopol" class="form-control" id="basic-default-name" />
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
                                name="nama_kendaraan"
                              />
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Jenis kendaraan</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <select id="defaultSelect" class="form-select" name="jenis_kendaraan">
                                    <option>Pilih</option>
                                    <option value="Angkutan orang">Angkutan orang</option>
                                    <option value="Angkutan barang">Angkutan barang</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Region</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                  <select id="defaultSelect" class="form-select" name="region_id">
                                    <option selected>Pilih</option>
                                    @foreach($region as $region)
                                      <option value="{{$region->id}}">{{$region->nama}}</option>
                                    @endforeach
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
                                name="bbm"
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
                                name="jadwal_service"
                              />
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Jumlah</label>
                            <div class="col-sm-10">
                              <input
                                type="text"
                                class="form-control"
                                id="basic-default-company"
                                placeholder="ACME Inc."
                                name="jumlah"
                              />
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="3"></textarea>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Driver</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <select id="defaultSelect" class="form-select" name="driver">
                                  @foreach($driver as $driver)
                                    <option value="{{$driver->id}}">{{$driver->nama}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-namakendaraan">Gambar Kendaraan</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="gambar" type="file" id="formFile" />
                            </div>
                          </div>
                          
                          <div class="row justify-content-end">
                            <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary">Send</button>
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