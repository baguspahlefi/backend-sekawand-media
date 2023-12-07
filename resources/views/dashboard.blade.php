@extends('layouts.app_sneat')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Hallo pegawai</div>

            <div class="card-body">
                @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
                @endif
                {{__('You login')}}
            </div>
        </div>
    </div>
</div>
@endsection