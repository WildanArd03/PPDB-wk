@extends('layouts.master')
@section('title', 'Daftar')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card mt-2">
            <div class="headerr d-flex">
                <div class="d-flex justify-content-center align-items-center float-start m-3 ">
                    <div class="logo px-4">
                        <img src="{{ asset('assets/images/wk.png') }}" alt="logo wikrama" width="75px" draggable="false">
                    </div>
                </div>
                <div class="justify-content-start align-items-center mt-5 mb-5">
                    <div class="title">
                        <h6 class="fs-1 fw-bold m-0">Form Pendaftaran</h6>
                        <h6 class="fs-1 fw-bold m-0">PPDB SMK Wikrama Bogor 2021</h6>
                        <p class="fs-6 fw-bold m-0">Silahkan Isi data diri anda pada form berikut ini</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5 class="mb-2 head-prof">Profil Siswa</h5>
                <hr class="m-0 mb-3">
                <form action=" {{ route('daftars.store') }} " method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nis" class="form-label">Nis</label>
                            <input type="text" class="form-control" id="nis" name="nis" required>
                        </div>
                        <div class="col-md-6">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                <option disabled selected> Pilih jenis kelamin</option>
                                <option value="Laki - Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                        </div>
                        <div class="col-md-4">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-mb-12">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" required>
                        </div>
                        <div class="col-md-4">
                            <label for="kelas" class="form-label">Kelas</label>
                            <input type="text" class="form-control" id="kelas" name="kelas" required>
                        </div>
                        <div class="col-md-4">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-control" name="jurusan" id="jurusan" required>
                                <option disabled selected>Pilih Jurusan</option>
                                <option value="Otomatisasi Tata Kelola Perkantoran">Otomatisasi Tata Kelola Perkantoran</option>
                                <option value="Multimedia">Multimedia</option>
                                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                <option value="Bisnis Daring dan Pemasaran">Bisnis Daring dan Pemasaran</option>
                                <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                                <option value="Perhotelan">Perhotelan</option>
                                <option value="Tataboga">Tataboga</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <button class="btn btn-primary btn-custom">Daftar</button>
                            <a href="{{ url()->previous() }}" class="btn btn-warning btn-custom">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
    