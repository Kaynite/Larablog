@extends('admin.layouts.main')

@section('pageTitle', 'Comments')

@section('pageContent')

<div class="row">
    <div class="col-sm-12">
        @if(session("message"))
        <div class="alert alert-success background-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="icofont icofont-close-line-circled text-white background-success"></i>
            </button>
            <strong>{{ session("message") }}</strong>
        </div>
        @endif
        <div class="card">
            <div class="card-block pb-0">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Comment Body</th>
                            <th scope="col">By</th>
                            <th>Controls</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($comments->count() > 0)
                            @foreach($comments as $comment)
                            <tr>
                                <td>{{ $comment->id }}</td>
                                <td>{{ $comment->comment_body }}</td>
                                <td>{{ $comment->comment_by }}</td>
                                <td>
                                    <a class="label label-primary" href="{{ route('adminApproveComment', $comment->id) }}"><i class="feather icon-check"></i></a>
                                    <a class="label label-danger " href="{{ route("adminDeleteComment", $comment->id) }}"><i class="feather icon-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4" class="text-center">There are no Comments Available.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div class="d-flex justify-content-center pb-3">
                    {{-- Pagination Links --}}
                    {{ $comments->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('pageStyles')

@endsection


@section('pageScripts')

@endsection