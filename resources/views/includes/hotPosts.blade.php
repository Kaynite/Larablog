<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        {{-- // TODO: Find a better approach for the Hot Posts --}}
        <div id="hot-post" class="row hot-post">
            <div class="col-md-8 hot-post-left">
                <!-- post -->
                <div class="post post-thumb">
                    <a class="post-img" href="{{ route("showPost", $hotPosts[0]->id) }}"><img src="/img/hot-post-2.jpg" alt=""></a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="{{ route("showCategory", $hotPosts[0]->category->id) }}">{{ $hotPosts[0]->category->name }}</a>
                        </div>
                        <h3 class="post-title"><a href="{{ route("showPost", $hotPosts[0]->id) }}">{{ $hotPosts[0]->title }}</a></h3>
                        <ul class="post-meta">
                            <li><a href="author.html">{{ $hotPosts[0]->author }}</a></li>
                            <li>{{ date("d F Y", strtotime($hotPosts[0]->created_at)) }}</li>
                        </ul>
                    </div>
                </div>
                <!-- /post -->
            </div>
            <div class="col-md-4 hot-post-right">
                <!-- post -->
                <div class="post post-thumb">
                    <a class="post-img" href="{{ route("showPost", $hotPosts[1]->id) }}"><img src="/img/hot-post-2.jpg" alt=""></a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="{{ route("showCategory", $hotPosts[1]->category->id) }}">{{ $hotPosts[1]->category->name }}</a>
                        </div>
                        <h3 class="post-title"><a href="{{ route("showPost", $hotPosts[1]->id) }}">{{ $hotPosts[1]->title }}</a></h3>
                        <ul class="post-meta">
                            <li><a href="author.html">{{ $hotPosts[1]->author }}</a></li>
                            <li>{{ date("d F Y", strtotime($hotPosts[1]->created_at)) }}</li>
                        </ul>
                    </div>
                </div>
                <div class="post post-thumb">
                    <a class="post-img" href="{{ route("showPost", $hotPosts[2]->id) }}"><img src="/img/hot-post-2.jpg" alt=""></a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="{{ route("showCategory", $hotPosts[2]->category->id) }}">{{ $hotPosts[2]->category->name }}</a>
                        </div>
                        <h3 class="post-title"><a href="{{ route("showPost", $hotPosts[2]->id) }}">{{ $hotPosts[2]->title }}</a></h3>
                        <ul class="post-meta">
                            <li><a href="author.html">{{ $hotPosts[2]->author }}</a></li>
                            <li>{{ date("d F Y", strtotime($hotPosts[2]->created_at)) }}</li>
                        </ul>
                    </div>
                </div>
                <!-- /post -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>