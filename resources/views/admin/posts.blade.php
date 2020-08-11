@extends('admin.layouts.main')

@section('pageTitle', 'Posts')

@section('pageContent')
    <a href="{{ route("adminCreatePost") }}" class="btn btn-success mb-3"><i class="feather icon-plus"></i> Add New Post</a>
    <div class="row">
        <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5>Posts</h5>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="postsTable" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Views</th>
                                    <th>Created At</th>
                                    <th>Controls</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>{{ $post->author }}</td>
                                    <td>{{ $post->views }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        <a href="{{ route("adminEditPost", $post->id) }}" class="btn btn-primary"><i class="feather icon-edit"></i></a>
                                        <a href="{{ route("adminDeletePost", $post->id) }}" class="btn btn-danger"><i class="feather icon-trash"></i></a>
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
        $("#postsTable").DataTable();
    </script>
@endsection