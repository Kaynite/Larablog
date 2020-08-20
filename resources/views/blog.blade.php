@extends('layouts.main')

@section('posts')
    @include('components.posts')
@endsection

@section('widgets')
    @include('widgets.popularposts')
    @include('widgets.instagram')
@endsection

@section('pageHeader')
    @include('includes.hotPosts')
@endsection