<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <!-- Template CSS files -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/admin/bootstrap.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/admin/waves.min.css") }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/admin/feather.css") }}">
    @yield('pageStyles')
    <link rel="stylesheet" type="text/css" href="{{ asset("css/admin/style.css") }}">

    <title>Admin Panel @hasSection('pageTitle') | @yield('pageTitle') @endif</title>
</head>

<body>
    @include('admin.includes.loader')

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('admin.includes.header')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    @include('admin.includes.navbar')

                    <div class="pcoded-content">
                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-watch bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>@yield('pageTitle')</h5>
                                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#!">Sample page</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        @yield('pageContent')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset("js/admin/jquery.min.js") }}"></script>
    <script src="{{ asset("js/admin/jquery-ui.min.js") }}"></script>
    <script src="{{ asset("js/admin/popper.min.js") }}"></script>
    <script src="{{ asset("js/admin/bootstrap.min.js") }}"></script>

    <script src="{{ asset("js/admin/waves.min.js") }}"></script>

    <script src="{{ asset("js/admin/jquery.slimscroll.js") }}"></script>
    <script src="{{ asset("js/admin/pcoded.min.js") }}" ></script>
    <script src="{{ asset("js/admin/vertical-layout.min.js") }}"></script>
    @yield("pageScripts")
    <script src="{{ asset("js/admin/script.min.js") }}"></script>
    <script src="{{ asset("js/admin/rocket-loader.min.js") }}" data-cf-settings="d8424a08d31b5b8b406fded2-|49" defer=""></script>
</body>

</html>