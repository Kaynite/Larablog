@extends('admin.layouts.main')

@section("pageTitle", "Create New Page")

@section('pageContent')
    <div class="card">
        <div class="card-block">
            <form action="{{ route("adminStorePage")}}" method="POST">
                @csrf
                <div class="form-group row">  
                    <div class="col-sm-12">
                        <label class="col-form-label" for="postTitle">Title</label>
                        <input type="text" name="title" class="form-control" id="postTitle" placeholder="Page Title" value="{{ old('title') }}" required>
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">  
                    <div class="col-sm-12">
                        <label class="col-form-label" for="postTitle">Description</label>
                        <textarea name="description" class="form-control" placeholder="Page Description">{{ old('description') }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="col-form-label">Page Body</label>
                        <textarea name="body" id="pageBody">{{ old('body') }}</textarea>
                        @error('body')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group text-center">
                    <input class="btn btn-success" type="submit" value="Create New Page">
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
    <script>CKEDITOR.replace('pageBody');</script>
    <script src="{{ asset("js/admin/switchery.min.js") }}"></script>
    <script src="{{ asset("js/admin/swithces.js") }}"></script>
@endsection