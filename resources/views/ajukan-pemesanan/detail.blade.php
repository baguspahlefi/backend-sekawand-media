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
                          <img src="{{url('assets/img/gtr.png')}}" alt="Product Image" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                          <h2>Product Name</h2>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac dui at turpis ultricies vestibulum.
                            Sed ac libero nec ligula fermentum faucibus vel eu tellus.
                            Integer vitae mi vel tellus suscipit fermentum. Proin varius euismod ipsum, at egestas dolor commodo non.
                          </p>
                          <div class="subtext">
                            <strong><u>Jenis Kendaraan:</u></strong> Angkutan orang
                          </div>
                          <div class="subtext">
                            <strong><u>Konsumsi BBM:</u></strong> Pertalite
                          </div>
                          <div class="subtext">
                            <strong><u>Jadwal Service:</u></strong> Setiap 10.000 km
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
                          <div class="card-body">
                            <form>
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" />
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Company</label>
                                <div class="col-sm-10">
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="basic-default-company"
                                    placeholder="ACME Inc."
                                  />
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                                <div class="col-sm-10">
                                  <div class="input-group input-group-merge">
                                    <input
                                      type="text"
                                      id="basic-default-email"
                                      class="form-control"
                                      placeholder="john.doe"
                                      aria-label="john.doe"
                                      aria-describedby="basic-default-email2"
                                    />
                                    <span class="input-group-text" id="basic-default-email2">@example.com</span>
                                  </div>
                                  <div class="form-text">You can use letters, numbers & periods</div>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
                                <div class="col-sm-10">
                                  <input
                                    type="text"
                                    id="basic-default-phone"
                                    class="form-control phone-mask"
                                    placeholder="658 799 8941"
                                    aria-label="658 799 8941"
                                    aria-describedby="basic-default-phone"
                                  />
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Message</label>
                                <div class="col-sm-10">
                                  <textarea
                                    id="basic-default-message"
                                    class="form-control"
                                    placeholder="Hi, Do you have a moment to talk Joe?"
                                    aria-label="Hi, Do you have a moment to talk Joe?"
                                    aria-describedby="basic-icon-default-message2"
                                  ></textarea>
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
        </div>
    </div>
</div>
<script></script>
@endsection