@if (count($posts) >= 1)
    @foreach ($posts as $post)
    <div class="post post-row">
        <a class="post-img" href="{{ route("showPost", $post->id) }}"><img src="{{asset("img/post-13.jpg")}}" alt=""></a>
        <div class="post-body">
            <div class="post-category">
                <a href="{{ route("showCategory", $post->category->id) }}">{{ $post->category->name }}</a>
            </div>
            <h3 class="post-title"><a href="{{ route("showPost", $post->id) }}">{{ $post->title }}</a></h3>
            <ul class="post-meta">
                <li><a href="author.html">{{ $post->author }}</a></li>
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
    <div class="section-row loadmore text-center">
        <a href="#" class="primary-button">Load More</a>
    </div>
@else 
    <p class="text-center">There is no Posts available.</p>
@endif