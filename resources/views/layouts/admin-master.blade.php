<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="Start your development with a Dashboard for Bootstrap 4." />
	<meta name="author" content="Creative Tim" />
	<title>Dashboard @yield('title')</title>
	<!-- Favicon -->
	<link rel="icon" href="{{ asset('assets/vendor/img/brand/favicon.png') }}" type="image/png" />
	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" />
	<!-- Icons -->
	<link rel="stylesheet" href="{{ asset('assets/vendor/vendor/nucleo/css/nucleo.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css" />
	<!-- Page plugins -->
	<!-- Argon CSS -->
	<link rel="stylesheet" href="{{ asset('assets/vendor/css/argon.css?v=1.2.0') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" type="text/css" />
</head>
<body>
    @yield('content')
	<script src="{{ asset('assets/vendor/vendor/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/vendor/js-cookie/js.cookie.js') }}"></script>
	<script src="{{ asset('assets/vendor/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
	<!-- Optional JS -->
	<script src="{{ asset('assets/vendor/vendor/chart.js/dist/Chart.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/vendor/chart.js/dist/Chart.extension.js') }}"></script>
	<!-- Argon JS -->
	<script src="{{ asset('assets/vendor/js/argon.js?v=1.2.0') }}"></script>
</body>

</html>