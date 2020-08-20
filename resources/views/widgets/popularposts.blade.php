<?php
$popularPosts = DB::table('posts')
    ->join('categories', 'posts.category_id', '=', 'categories.id')
    ->select('posts.id', 'posts.title', 'posts.image', 'posts.category_id', 'categories.name as category')
    ->orderBy('views', 'desc')
    ->limit(4)
    ->get()
?>

<div class="aside-widget">
    <div class="section-title">
        <h2 class="title">Popular Posts</h2>
    </div>
    @foreach ($popularPosts as $post)
        <div class="post post-widget">
            <a class="post-img" href="{{ route('showPost', $post->id) }}"><img src="{{ asset('storage/posts/' . $post->image) }}" alt=""></a>
            <div class="post-body">
                <div class="post-category">
                    <a href="{{ route('showCategory', $post->category_id) }}">{{ $post->category }}</a>
                </div>
                <h3 class="post-title"><a href="{{ route('showPost', $post->id) }}">{{ $post->title }}</a></h3>
            </div>
        </div>
    @endforeach
</div>