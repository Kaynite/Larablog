<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Larablog Admin Panel | Register</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/admin/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/waves.min.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('css/admin/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/pages.css') }}">
</head>

<body themebg-pattern="theme1">
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="login-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <form class="md-float-material form-material" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="text-center">
                            <img src="png/logo.png" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="username" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Choose Username</label>
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="email" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Your Email Address</label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="password" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Password</label>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="password_confirmation" class="form-control"
                                                required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Confirm Password</label>
                                            @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign
                                            up now</button>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you.</p>
                                        <p class="text-inverse text-left"><a
                                                href="{{ route('home') }}"><b>Back to website</b></a>
                                        </p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="png/logo-small-bottom.png" alt="small-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>

    <script src="/js/admin/jquery.min.js"></script>
    <script src="/js/admin/jquery-ui.min.js"></script>
    <script src="/js/admin/popper.min.js"></script>
    <script src="/js/admin/bootstrap.min.js"></script>
    <script src="/js/admin/waves.min.js"></script>
    <script src="/js/admin/jquery.slimscroll.js"></script>
    <script src="/js/admin/modernizr.js"></script>
    <script src="/js/admin/css-scrollbars.js"></script>
    <script src="/js/admin/common-pages.js"></script>
    <script src="/js/admin/rocket-loader.min.js" data-cf-settings="4878d7dfa7bc22a8dfa99416-|49" defer=""></script>

</body>

</html>