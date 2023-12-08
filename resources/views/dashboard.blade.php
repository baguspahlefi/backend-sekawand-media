@extends('layouts.app_sneat')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Hallo pegawai</div>

            <div class="card-body">
                < <div>
                    {!! $chart->container() !!}
                </div>
            
                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                {!! $chart->script() !!}
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> 
@endsection