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
            <div class="card-header">
                <h5>Comments</h5>
            </div>
            <div class="card-block pb-0">
                <table class="table table-sm table-responsive" style="overflow-wrap: break-word;">
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
                                    <a class="label label-primary" href="{{ route('adminEditComment', $comment->id) }}" data-toggle="tooltip" data-placement="top" data-trigger="hover" title="" data-original-title="Edit"><i class="feather icon-edit"></i></a>
                                    <span data-toggle="tooltip" data-placement="top" data-trigger="hover" title="" data-original-title="Move To Trash" style="display: inline">
                                        <a class="label label-danger text-light cursor-pointer" data-toggle="modal" data-target="#deleteComment{{ $comment->id }}"><i class="feather icon-trash"></i></a>
                                    </span>

                                    <div class="modal fade" id="deleteComment{{ $comment->id }}" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Delete Comment</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are You Sure You Want To Move This Comment to Trash?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                                                    <a type="button" href="{{ route('adminDeleteComment', $comment->id) }}" class="btn btn-danger waves-effect waves-light ">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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