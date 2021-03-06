@extends('admin.layouts.main')

@section("pageTitle", "Edit Post")

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
        <div class="card-header">
            <h5>Article Editor</h5>
        </div>
        <div class="card-block">
            <form action="{{ route("adminUpdatePost", $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">  
                    <div class="col-sm-12">
                        <label class="col-form-label" for="postTitle">Title</label>
                        <input type="text" name="title" class="form-control" id="postTitle" placeholder="Post Title" value="{{ $post->title }}">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="col-form-label">Post Body</label>
                        <textarea name="body" id="postBody">
                            {{ $post->body }}
                        </textarea>
                        @error('body')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <label class="col-form-label" for="categories">Category</label>
                        <select class="form-control fill" name="category_id" id="categories">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if($category->id == $post->category->id) selected @endif>{{ $category->name }}</option>                        
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <label class="col-form-label">Hot Post?</label>
                        <div class="px-1 py-1">
                            <input type="hidden" name="hot" value="0">
                            <input type="checkbox" name="hot" class="js-single" @if($post->hot) checked @endif value="1" style="display: none;" data-switchery="false">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <img src="{{ asset('storage/posts/' . $post->image) }}" alt="Post Image" style="width:100%">
                        <div class="">
                            <label class="col-form-label">Update Post Image</label>
                            <input type="file" name="image" class="form-control">
                            @error('image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group text-center">
                    <input class="btn btn-success" type="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
@endsection

@section('pageStyles')
    <link rel="stylesheet" type="text/css" href="{{ asset("css/admin/switchery.min.css") }}">
@endsection

@section('pageScripts')
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script src="{{ asset("js/admin/ckeditor.js") }}"></script>
    <script>CKEDITOR.replace('postBody');</script>
    <script src="{{ asset("js/admin/switchery.min.js") }}"></script>
    <script src="{{ asset("js/admin/swithces.js") }}"></script>
@endsection