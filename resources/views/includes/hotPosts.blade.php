@if ($hotPosts->count() > 0)
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            {{-- // TODO: Find a better approach for the Hot Posts --}}
            <div id="hot-post" class="row hot-post">
                <div class="col-md-8 hot-post-left">
                    <!-- post -->
                    <div class="post post-thumb">
                        <a class="post-img" href="{{ route("showPost", $hotPosts[0]->id) }}"><img src="{{ asset('storage/posts/' . $hotPosts[0]->image) }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="{{ route("showCategory", $hotPosts[0]->category->id) }}">{{ $hotPosts[0]->category->name }}</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route("showPost", $hotPosts[0]->id) }}">{{ $hotPosts[0]->title }}</a></h3>
                            <ul class="post-meta">
                                <li><a href="{{ route('showAuthor', $hotPosts[0]->postAuthor->id) }}">{{ $hotPosts[0]->postAuthor->username }}</a></li>
                                <li>{{ date("d F Y", strtotime($hotPosts[0]->created_at)) }}</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /post -->
                </div>
                <div class="col-md-4 hot-post-right">
                    <!-- post -->
                    <div class="post post-thumb">
                        <a class="post-img" href="{{ route("showPost", $hotPosts[1]->id) }}"><img src="{{ asset('storage/posts/' . $hotPosts[1]->image) }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="{{ route("showCategory", $hotPosts[1]->category->id) }}">{{ $hotPosts[1]->category->name }}</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route("showPost", $hotPosts[1]->id) }}">{{ $hotPosts[1]->title }}</a></h3>
                            <ul class="post-meta">
                                <li><a href="{{ route('showAuthor', $hotPosts[1]->postAuthor->id) }}">{{ $hotPosts[1]->postAuthor->username }}</a></li>
                                <li>{{ date("d F Y", strtotime($hotPosts[1]->created_at)) }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="post post-thumb">
                        <a class="post-img" href="{{ route("showPost", $hotPosts[2]->id) }}"><img src="{{ asset('storage/posts/' . $hotPosts[2]->image) }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="{{ route("showCategory", $hotPosts[2]->category->id) }}">{{ $hotPosts[2]->category->name }}</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route("showPost", $hotPosts[2]->id) }}">{{ $hotPosts[2]->title }}</a></h3>
                            <ul class="post-meta">
                                <li><a href="{{ route('showAuthor', $hotPosts[2]->postAuthor->id) }}">{{ $hotPosts[2]->postAuthor->username }}</a></li>
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
@endif