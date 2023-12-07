@extends('layouts.app_sneat_admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row mt-4">
                    <div class="container">
                      <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Edit Kendaraan #1</h5>
                      </div>
                      <div class="card-body">
                        <form>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-nopol">No Pol</label>
                            <div class="col-sm-10">
                              <input type="text" name="nopol" class="form-control" id="basic-default-name" value="AE 1234 BEZ" />
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
                                value="Nissan GTR"
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
                                  <select id="defaultSelect" class="form-select" name="region">
                                      <option value="A">A</option>
                                      <option value="B">B</option>
                                      <option value="2">C</option>
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
                                value="Pertamax"
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
                                value="10.000 km/h"
                                name="jadwalService"
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
                                value="12"
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
                                    <option value="A">Neymar</option>
                                    <option value="B">B</option>
                                    <option value="2">C</option>
                                </select>
                              </div>
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