
@extends('layouts.landing-master')
@section('content')
<main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="{{ route('landingPage') }}">PPDB SMK WIKRAMA BOGOR</a>
        </div>
    </nav>
    <section class="py-0">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 order-md-1 pt-8">
                    <img class="img-fluid" src="assets/images/vector.png" alt="" draggable="false"/>
                </div>
                <div class="col-md-7 col-lg-6 text-center text-md-start pt-5 pt-md-9">
                    <p class="mt-3 mb-1 fs-1 text-dark">Selamat Datang</p>
                    <h2 class="mb-2 display-3 fw-bolder">PPDB SMK WIKRAMA BOGOR</h2>
                    <p class="mt-3 mb-4 fs-1">Ilmu yang amaliah, amal yang ilmiah, akhlakul karimah</p>
                    <a class="btn btn-lg btn-primary rounded-pill hover-top" href="{{ route('daftar') }}" role="button">Daftar Sekarang !</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
    