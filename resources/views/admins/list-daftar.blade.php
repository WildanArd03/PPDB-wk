@extends('layouts.admin-master')
@section('title', 'Daftar Peserta')
@section('content')
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <h1>PPDB WIKRAMA</h1>
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('listDaftar') }}">
                            <i class="ni ni-bullet-list-67 text-default"></i>
                            <span class="nav-link-text">Daftar Peserta</span>
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3" />
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Setting</span>
                </h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="ni ni-user-run"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Search form -->
                <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                    <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
                        aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </form>
                <!-- Navbar links -->
                <ul class="navbar-nav align-items-center ml-md-auto">
                    <li class="nav-item d-xl-none">
                        <!-- Sidenav toggler -->
                        <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                            data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="assets/vendor/img/theme/team-4.jpg" />
                                </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm font-weight-bold">{{ Auth::user()->name }}</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Daftar Peserta</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item">
                                    <a href="#"><i class="fas fa-home"></i></a>
                                </li>
                                <a href="{{ route('home') }}" class="breadcrumb-item" aria-current="page">
                                    Dashboard
                                </a>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Daftar Peserta
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
				<div class="col">
					<div class="card bg-default shadow">
						<div class="card-header bg-transparent border-0">
							<h3 class="text-white mb-0">Daftar Peserta</h3>
						</div>
						<div class="table-responsive sc-table">
							<table class="table align-items-center table-dark table-flush">
								<thead class="thead-dark">
									<tr>
										<th scope="col" class="sort" data-sort="no">No</th>
                                        <th scope="col" class="sort" data-sort="nis">Nis</th>
										<th scope="col" class="sort" data-sort="nama">Nama</th>
										<th scope="col" class="sort" data-sort="jenis-kelamin">Jenis Kelamin</th>
										<th scope="col" class="sort" data-sort="tempat-lahir">Tempat Lahir</th>
                                        <th scope="col" class="sort" data-sort="tanggal-lahir">Tanggal Lahir</th>
										<th scope="col" class="sort" data-sort="alamat">Alamat</th>
                                        <th scope="col" class="sort" data-sort="asal-sekolah">Asal Sekolah</th>
                                        <th scope="col" class="sort" data-sort="kelas">Kelas</th>
                                        <th scope="col" class="sort" data-sort="jurusan">Jurusan</th>
                                        <th scope="col" class="sort" data-sort="action">Action</th>
									</tr>
								</thead>
								<tbody class="list">
                                    @foreach($list_daftars as $ldaftar)
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">{{ ++$i }}</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td> {{ $ldaftar->nis }} </td>
                                        <td> {{ $ldaftar->nama }} </td>
                                        <td> {{ $ldaftar->jenis_kelamin }} </td>
                                        <td> {{ $ldaftar->tempat_lahir }} </td>
                                        <td> {{ Carbon\Carbon::parse( $ldaftar->tanggal_lahir )->isoFormat('DD - MM - YYYY') }} </td>
                                        <td> {{ $ldaftar->alamat }} </td>
                                        <td> {{ $ldaftar->asal_sekolah }} </td>
                                        <td> {{ $ldaftar->kelas }} </td>
                                        <td> {{ $ldaftar->jurusan }} </td>
                                        <td>
                                            <a href="{{ route('laporanPdf', $ldaftar->id) }}" class="btn btn-sm btn-success" ><i class="ni ni-cloud-download-95"></i></a>
                                            <a href="{{ route('daftarEdit', $ldaftar->id) }} " class="btn btn-sm btn-primary" ><i class="far fa-edit"></i></a>
                                            <a href="{{ route('daftarHapus', $ldaftar->id) }} " class="btn btn-sm btn-danger" ><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
                        <div class="card-footer py-4 bg-default">
                            <nav aria-label="...">
                                <ul class="pagination justify-content-end mb-0">
                                    {{ $list_daftars->links('pagination::bootstrap-4') }}
                                </ul>
                            </nav>
                        </div>
					</div>
				</div>
			</div>
        <!-- Footer -->
        <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-12">
                    <div class="copyright text-center text-lg-left text-muted">
                        &copy; {{ date('Y') }}
                        <a href="https://www.instagram.com/wild4nard/" class="font-weight-bold ml-1"
                            target="_blank">wild4nard</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection
