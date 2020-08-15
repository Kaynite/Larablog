@extends('admin.layouts.main')

@section('pageTitle', 'Profile')

@section('pageContent')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">Kareem Saber</h3>

                        <p class="text-muted text-center">Admin</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Posts</b> <a class="float-right">1,322</a>
                            </li>
                            <li class="list-group-item">
                                <b>Following</b> <a class="float-right">543</a>
                            </li>
                            <li class="list-group-item">
                                <b>Friends</b> <a class="float-right">13,287</a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Info</a></li>
                            <li class="nav-item"><a class="nav-link" href="#changepassword" data-toggle="tab">Change Password</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="settings">
                                <form class="form-horizontal" method="POST" action="">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="Name" value="{{ Auth::user()->username }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{ Auth::user()->email }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">About</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="inputExperience" name="about" placeholder="Experience" style="height: 101px;">
                                                {{ Auth::user()->about }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane" id="changepassword">
                                <!-- The timeline -->
                                <form class="form-horizontal" method="POST" action="">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Old Password</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" name="oldPassword" placeholder="Old Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">New Password</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" name="newPassword" placeholder="New Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Confirm New Password</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" name="newPassword2" placeholder="Confirm New Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
  </section>
@endsection

@section('pageStyles')
    <link rel="stylesheet" type="text/css" href="{{ asset("css/admin/datatables.bootstrap4.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/admin/buttons.datatables.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/admin/responsive.bootstrap4.min.css") }}">
@endsection


@section('pageScripts')
    <script src="/js/admin/jquery.datatables.min.js"></script>
    <script src="/js/admin/datatables.buttons.min.js"></script>
    <script src="/js/admin/datatables.bootstrap4.min.js"></script>
    <script src="/js/admin/datatables.responsive.min.js"></script>
    <script src="/js/admin/responsive.bootstrap4.min.js"></script>
    <script src="/js/admin/data-table-custom.js"></script>
    <script>
        $("#postsTable").DataTable();
    </script>
@endsection

