<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{-- Styles --}}
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css')}}" />

	<title>Larablog @hasSection('title') | @yield('title') @endif</title>

</head>

<body>

	<header id="header">
		@include('includes.nav')
        @yield('pageHeader')
	</header>

    <div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
                    @yield('posts')
				</div>
				<div class="col-md-4">
                    @yield('widgets')
                </div>
			</div>
		</div>
	</div>

	<!-- Footer -->
    @include('includes.footer')

	<!-- jQuery Plugins -->
	<script src="{{ asset('js/jquery.min.js')}}"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
	<script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
