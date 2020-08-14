@extends('layouts.category')

@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Category Posts -->
                <?php $posts = $category->posts ?>
                @include('components.posts') {{-- Requires "posts" variable --}}
            </div>

            <div class="col-md-4">
                <!-- AD widget-->
                @include('widgets.ad')

                <!-- Social widget -->
                @include('widgets.social')

                <!-- Category widget -->
                @include('widgets.categories')

                <!-- Newsletter widget -->
                @include('widgets.newsletter')

                <!-- Popular Posts widget -->
                @include('widgets.popularposts')

                <!-- Instagram Gallery widget -->
                @include('widgets.instagram')

                <!-- Ad widget -->
                @include('widgets.ad')


            </div>
        </div>
    </div>
</div>
@endsection