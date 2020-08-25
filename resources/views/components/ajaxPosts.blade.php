@foreach ($posts as $post)
<div class="post post-row">
    <a class="post-img" href="{{ route("showPost", $post->id) }}"><img src="{{ asset('storage/posts/' . $post->image) }}" alt=""></a>
    <div class="post-body">
        <div class="post-category">
            <a href="{{ route("showCategory", $post->category->id) }}">{{ $post->category->name }}</a>
        </div>
        <h3 class="post-title"><a href="{{ route("showPost", $post->id) }}">{{ $post->title }}</a></h3>
        <ul class="post-meta">
            <li><a href="{{ route('showAuthor', $post->postAuthor->id) }}">{{ $post->postAuthor->username }}</a></li>
            <li>{{ date("d F Y", strtotime($post->created_at)) }}</li>
        </ul>
        @if(strlen(strip_tags($post->body)) > 150)
            <p>{{ substr(strip_tags($post->body), 0, 150) . ' ...'  }}</p>
        @else
            <p>{{ strip_tags($post->body) }}</p>
        @endif
        
    </div>
</div>
@endforeach