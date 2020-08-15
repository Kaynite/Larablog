@extends('admin.layouts.main')

@section('pageTitle', 'Categories')

@section('pageDescription', 'Here You can see all Your Categories')

@section('pageContent')

    @if(session("success"))
    <div class="alert alert-success background-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="icofont icofont-close-line-circled text-white background-success"></i>
        </button>
        <strong>{{ session("success") }}</strong>
    </div>
    @endif

    <a href="{{ route("adminCreateCategory") }}" class="btn btn-success mb-3"><i class="feather icon-plus"></i> Add New Category</a>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Categories</h5>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="categoriesTable" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Controls</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td style="width:10%">{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td style="width:10%">
                                        <a href="{{ route("adminEditCategory", $category->id) }}" class="btn btn-primary"><i class="feather icon-edit"></i></a>
                                        <a href="{{ route("adminDeleteCategory", $category->id) }}" class="btn btn-danger"><i class="feather icon-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        $("#categoriesTable").DataTable();
    </script>
@endsection