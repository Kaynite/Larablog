@extends('admin.layouts.main')

@section("pageTitle", "Create New Post")


@section('pageContent')
    <div class="card">
        <div class="card-block">
            <form action="{{ route("adminStorePost")}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">  
                    <div class="col-sm-12">
                        <label class="col-form-label" for="postTitle">Title</label>
                        <input type="text" name="title" class="form-control" id="postTitle" placeholder="Post Title" value="{{ old('title') }}" required>
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="col-form-label">Post Body</label>
                        <textarea name="body" id="postBody"></textarea>
                        @error('body')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <label class="col-form-label" for="categories">Category</label>
                        <select class="form-control fill" name="category_id" id="categories" required>
                            <option disabled>Select a Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>                        
                            @endforeach
                            @error('category_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <label class="col-form-label">Hot Post?</label>
                        <div>
                            <input type="hidden" name="hot" value="0">
                            <input type="checkbox" name="hot" class="js-single" value="1" style="display: none;" data-switchery="false">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="col-form-label">Post Image</label>
                        <input type="file" name="image" class="form-control">
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group text-center">
                    <input class="btn btn-success" type="submit" value="Create New Post">
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