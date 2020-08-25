@extends('layouts.main')

@section('title', $post->title)

@section('posts')
    <!-- Post share -->
    <div class="section-row">
        <div class="post-share">
            <a href="#" class="social-facebook"><i class="fa fa-facebook"></i><span>Share</span></a>
            <a href="#" class="social-twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>
            <a href="#" class="social-pinterest"><i class="fa fa-pinterest"></i><span>Pin</span></a>
            <a href="#" ><i class="fa fa-envelope"></i><span>Email</span></a>
        </div>
    </div>
    <!-- /post share -->

    <!-- post content -->
    <div class="section-row">
        <h3>{{ $post->title }}</h3>
        <div class="post-body">
            {!! $post->body !!}
        </div>
    </div>
    <!-- /post content -->
    
    <!-- post tags -->
    <div class="section-row">
        <div class="post-tags">
            <ul>
                <li>TAGS:</li>
                <li><a href="#">{{ $post->category->name }}</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Health</a></li>
            </ul>
        </div>
    </div>
    <!-- /post tags -->

    <!-- post nav -->
    <div class="section-row">
        <div class="post-nav">

            @if($prevPost)
            <div class="prev-post">
                <a class="post-img" href="{{ route('showPost', $prevPost->id) }}"><img src="{{ asset('/storage/posts/' . $prevPost->image) }}" alt=""></a>
                <h3 class="post-title"><a href="{{ route('showPost', $prevPost->id) }}">{{ $prevPost->title }}</a></h3>
                <span>Previous post</span>
            </div>
            @endif

            @if($nextPost)
            <div class="next-post">
                <a class="post-img" href="{{ route('showPost', $nextPost->id) }}"><img src="{{ asset('/storage/posts/' . $nextPost->image) }}" alt=""></a>
                <h3 class="post-title"><a href="{{ route('showPost', $nextPost->id) }}">{{ $nextPost->title }}</a></h3>
                <span>Next post</span>
            </div>
            @endif

        </div>
    </div>
    <!-- /post nav  -->

    <!-- post author -->
    <div class="section-row">
        <div class="section-title">
            <h3 class="title">About <a href="{{ route('showAuthor', $post->postAuthor->id) }}">{{ $post->postAuthor->username }}</a></h3>
        </div>
        <div class="author media">
            <div class="media-left">
                <a href="author.html">
                    <img class="author-img media-object" src="{{ $post->postAuthor->image ? asset('storage/users/' . $post->postAuthor->image) : asset('storage/users/default-user.jpg') }}" alt="">
                </a>
            </div>
            <div class="media-body">
                <p>{{ $post->postAuthor->about }}</p>
                <ul class="author-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /post author -->

    <!-- /related post -->
    <div>
        <div class="section-title">
            <h3 class="title">Related Posts</h3>
        </div>
        <div class="row">
            @foreach ($relatedPosts as $rPost)
            <div class="col-md-4">
                <div class="post post-sm">
                    <a class="post-img" href="{{ route('showPost', $rPost->id) }}"><img src="{{ asset('storage/posts/' . $rPost->image) }}" alt=""></a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="{{ route('showCategory', $rPost->category->id) }}">{{ $rPost->category->name }}</a>
                        </div>
                        <h3 class="post-title title-sm"><a href="{{ route('showPost', $rPost->id) }}">{{ $rPost->title }}</a></h3>
                        <ul class="post-meta">
                            <li><a href="{{ route('showAuthor', $rPost->postAuthor->id) }}">{{ $rPost->postAuthor->username }}</a></li>
                            <li>20 April 2018</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <!-- /related post -->

    <!-- post comments -->
    @include('components.comment')

    <!-- post reply -->
    <div class="section-row">
        <div class="section-title">
            <h3 class="title">Leave a reply</h3>
        </div>
        <form class="post-reply" method="POST" action="{{ route("storeComment", $post->id) }}">

            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="input" name="message" placeholder="Message"></textarea>
                        @error('message')
                            <small class='text-danger'>{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input class="input" type="text" name="name" placeholder="Name">
                        @error('name')
                            <small class='text-danger'>{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input class="input" type="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input class="input" type="text" name="website" placeholder="Website">
                    </div>
                </div>
                <div class="col-md-12">
                    <button class="primary-button">Submit</button>
                </div>

            </div>
        </form>
    </div>
@endsection

@section('widgets')
      @include('widgets.ad')
      @include('widgets.social')
      @include('widgets.categories')
      @include('widgets.newsletter')
      @include('widgets.popularposts')
      @include('widgets.instagram')
@endsection

@section('pageHeader')
    @include('includes.postHeader')
@endsection
