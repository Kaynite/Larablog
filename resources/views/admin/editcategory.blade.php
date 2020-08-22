@extends('admin.layouts.main')

@section("pageTitle", "Edit Category")

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
            <form action="{{ route("adminUpdateCategory", $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">  
                    <div class="col-sm-6">
                        <label class="col-form-label" for="categoryName">Name</label>
                        <input type="text" name="name" class="form-control" id="categoryName" placeholder="Post Title" value="{{ $category->name }}">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <label class="col-form-label" for="categoryName">Change Cover Image</label>
                        <input type="file" name="cover_image" class="form-control" id="categoryCover">
                        @error('cover_image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('storage/categories/' . $category->cover_image) }}" style="width: 100%;" alt="Cover Image">
                    </div>
                </div>
                <div class="form-group text-center">
                    <input class="btn btn-success" type="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
@endsection
