@extends('layouts.app')
@section('title', 'List Daftar')
@section('content')
<div class="container col-11">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-0 m-3">
                    <a href=" {{ route('home') }} " class="text-dark">Dashboard</a> / List Daftar Peserta
                </div>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nis</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Asal Sekolah</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($list_daftars as $ldaftar)
                                    <tr>
                                        <td> {{ ++$i }} </td>
                                        <td> {{ $ldaftar->nis }} </td>
                                        <td> {{ $ldaftar->nama }} </td>
                                        <td> {{ $ldaftar->jenis_kelamin }} </td>
                                        <td> {{ $ldaftar->tempat_lahir }} </td>
                                        <td> {{ $ldaftar->tanggal_lahir }} </td>
                                        <td> {{ $ldaftar->alamat }} </td>
                                        <td> {{ $ldaftar->asal_sekolah }} </td>
                                        <td> {{ $ldaftar->kelas }} </td>
                                        <td> {{ $ldaftar->jurusan }} </td>
                                        <td>
                                            <a href=" {{ route('daftarHasil', $ldaftar->id) }} " class="btn btn-sm btn-success" ><i class="far fa-eye"></i></a>
                                            <a href=" {{ route('daftarEdit', $ldaftar->id) }} " class="btn btn-sm btn-primary" ><i class="far fa-edit"></i></a>
                                            <a href="{{ route('daftarHapus', $ldaftar->id) }} " class="btn btn-sm btn-danger" ><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
