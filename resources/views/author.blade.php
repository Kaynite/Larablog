@extends('layouts.main')

@section('posts')
    <?php $posts = $author->posts ?>
    @include('components.posts')
@endsection

@section('widgets')
    @include('widgets.ad')
    @include('widgets.social')
    @include('widgets.categories')
    @include('widgets.newsletter')
@endsection

@section('pageHeader')
    @include('includes.authorHeader')
@endsection

@section('title')
    {{ $author->username }}
@endsection