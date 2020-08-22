@extends('layouts.main')

@section('title', $page->title)

@section('posts')

<div class="section">
    <div class="container">
        <div class="row">
            {!! $page->body !!}
        </div>
    </div>
</div>
@endsection

@section('pageHeader')
    @include('includes.pageHeader')
@endsection