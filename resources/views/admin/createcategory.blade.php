@extends('admin.layouts.main')

@section("pageTitle", "Create New Category")

@section('pageContent')
    <div class="card">
        <div class="card-block">
            <form action="{{ route("adminStoreCategory")}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">  
                    <div class="col-sm-12">
                        <label class="col-form-label" for="categoryName">Name</label>
                        <input type="text" name="name" class="form-control" id="categoryName" placeholder="Category Name" value="{{ old('name') }}">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="col-form-label">Category Cover</label>
                        <input type="file" name="cover_image" class="form-control">
                    </div>
                </div>
                <div class="form-group text-center">
                    <input class="btn btn-success" type="submit" value="Create New Category">
                </div>
            </form>
        </div>
    </div>
@endsection

