@extends('layouts.category')

@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Category Posts -->
                <?php $posts = $category->posts ?>
                @include('components.posts')
            </div>

            <div class="col-md-4">
                <!-- AD widget-->
                @include('components.adwidget')

                <!-- Social widget -->
                @include('components.socialwidget')

                <!-- Category widget -->
                @include('components.categorywidget')

                <!-- Newsletter widget -->
                @include('components.newsletterwidget')

                <!-- Popular Posts widget -->
                @include('components.popularpostswidget')

                <!-- Instagram Gallery widget -->
                @include('components.instagramwidget')

                <!-- Ad widget -->
                @include('components.adwidget')

            </div>
        </div>
    </div>
</div>
@endsection