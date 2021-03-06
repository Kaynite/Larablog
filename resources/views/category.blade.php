@extends('layouts.main')

@section('title', $category->name)

@section('pageHeader')
    @include('includes.categoryHeader')
@endsection

@section('posts')
    <?php $posts = $category->posts ?>
    @include('components.posts')
@endsection

@section('widgets')
    @include('widgets.ad')
    @include('widgets.social')
    @include('widgets.categories')
    @include('widgets.newsletter')
    @include('widgets.popularposts')
    @include('widgets.instagram')
    @include('widgets.ad')
@endsection