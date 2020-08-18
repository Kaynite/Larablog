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
            <form action="{{ route("adminUpdateCategory", $category->id) }}" method="POST">
                @csrf
                <div class="form-group row">  
                    <div class="col-sm-12">
                        <label class="col-form-label" for="categoryName">Name</label>
                        <input type="text" name="name" class="form-control" id="categoryName" placeholder="Post Title" value="{{ $category->name }}">
                        @error('name')
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
