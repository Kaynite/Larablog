<div id="post-header" class="page-header">
    <div class="page-header-bg" style="background-image: url('/img/header-1.jpg');" data-stellar-background-ratio="0.5"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="post-category">
                    <a href="{{ route('showCategory', $post->category->id) }}">{{ $post->category->name }}</a>
                </div>
                <h1>{{ $post->title }}</h1>
                <ul class="post-meta">
                    <li><a href="author.html">{{ $post->postAuthor->username }}</a></li>
                    <li>{{ date("d F Y", strtotime($post->created_at)) }}</li>
                    <li><i class="fa fa-comments"></i> {{ $post->comments->count() }}</li>
                    <li><i class="fa fa-eye"></i> {{ $post->views }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>