@extends('layouts.master')
@section('title', ' Show')
@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            Profil Siswa
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <label for="nis" class="form-label">Nis</label>
                    <input type="text" class="form-control" id="nis" name="nis" value=" {{ $siswa->nis }} " disabled required>
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value=" {{ $siswa->nama }} " disabled required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value=" {{ $siswa->jenis_kelamin }} " disabled required>
                </div>
                <div class="col-md-4">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value=" {{ $siswa->tempat_lahir }} " disabled required>
                </div>
                <div class="col-md-4">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value=" {{ $siswa->tanggal_lahir }} " disabled required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-mb-12">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="5" disabled required>{{ $siswa->alamat }}</textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                    <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value=" {{ $siswa->asal_sekolah }} " disabled required>
                </div>
                <div class="col-md-6">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" class="form-control" id="kelas" name="kelas" value=" {{ $siswa->kelas }} " disabled required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value=" {{ $siswa->jurusan }} " disabled required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <a class="btn btn-warning" href="{{ url()->previous() }}">Kembali</a>
                    <a class="btn btn-dark" href="{{ route('laporanPdf', $siswa->id) }}">Print</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection