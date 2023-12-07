@extends('layouts.app_sneat')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <nav class="navbar navbar-light justify-content-center mt-4">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Type a name" aria-label="Search" id="search-car">
                    <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                </form>
            </nav>
            <div class="card-body">
                <div class="row mb-5">
                    <div class="card-col col-md-6 col-lg-4 mb-3">
                      <div class="card h-100">
                        <img class="card-img-top" src="{{url('assets/img/gtr.png')}}" alt="Card image cap" />
                        <div class="card-body">
                          <h5 class="card-title">Region A</h5>
                          <h5 class="card-title">BMW</h5>
                          <div class="subtext mb-2">
                            <strong>Jenis Kendaraan: Angkutan Orang</strong> 
                          </div>
                          <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                          </p>
                          <a href="{{route('ajukan-pemesanan.show')}}" class="btn btn-outline-primary">Detail</a>
                        </div>
                        <div class="position-absolute top-0 end-0 bg-white text-success p-2 border border-success">Available</div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#search-car').keyup(function () {
      $('.card-col').removeClass('d-none');
      var filter = $('#search-car').val().toLowerCase(); // get the value of the input and convert to lowercase
      $('.card-body').find('.card .card-body h5:not(:contains("'+filter+'"))').parent().parent().addClass('d-none');
    });
  </script>
  
@endsection