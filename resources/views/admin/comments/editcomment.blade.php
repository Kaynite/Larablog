@extends('admin.layouts.main')

@section("pageTitle", "Edit Comment")

@section('pageContent')
    @if(session("success"))
        <div class="alert alert-success background-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="icofont icofont-close-line-circled text-white background-success"></i>
            </button>
            <strong>{{ session("success") }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-block">
            <form action="{{ route("adminUpdateComment", $comment->id) }}" method="POST">
                @csrf
                <div class="form-group row">  
                    <div class="col-sm-6">
                        <label class="col-form-label" for="categoryName">Name</label>
                        <input type="text" name="comment_by" class="form-control" id="commentBy" placeholder="Name" value="{{ $comment->comment_by }}">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label class="col-form-label" for="categoryName">Email</label>
                        <input type="email" name="email" class="form-control" id="commentByEmail" placeholder="Email" value="{{ $comment->email }}">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">  
                    <div class="col-sm-12">
                        <label class="col-form-label" for="categoryName">Website</label>
                        <input type="text" name="website" class="form-control" id="website" placeholder="Post Title" value="{{ $comment->website }}">
                        @error('website')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">  
                    <div class="col-sm-12">
                        <label class="col-form-label" for="categoryName">Website</label>
                        <textarea class="form-control" name="comment_body" rows="5">{{ $comment->comment_body }}</textarea>
                        @error('comment_body')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group text-center">
                    <input class="btn btn-success" type="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
@endsection
