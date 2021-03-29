@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ __('SIDE BAR') }}</div>
                <div class="card-body p-0">
                    <a href=" {{ route('listDaftar') }} " class="nav-link text-dark">List Daftar Peserta</a>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <h2 class="text-uppercase" >Daftar Peserta</h2>
                    <h3> {{ $count }} </h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
