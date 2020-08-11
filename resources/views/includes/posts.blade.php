<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <!-- post -->
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
                            @if(strlen($post->body) > 150)
                                <p>{{ substr($post->body, 0, 150) . ' ...'  }}</p>
                            @else
                                <p>{{ $post->body }}</p>
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

            </div>
            <div class="col-md-4">
                <!-- galery widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Instagram</h2>
                    </div>
                    <div class="galery-widget">
                        <ul>
                            <li><a href="#"><img src="./img/galery-1.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-4.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-5.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-6.jpg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /galery widget -->

                <!-- Ad widget -->
                <div class="aside-widget text-center">
                    <a href="#" style="display: inline-block;margin: auto;">
                        <img class="img-responsive" src="./img/ad-1.jpg" alt="">
                    </a>
                </div>
                <!-- /Ad widget -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>