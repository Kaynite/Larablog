@extends('layouts.category')

@section('content')
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                @if (count($category->posts) >= 1)
                    @foreach ($category->posts as $post)
                    <div class="post post-row">
                        <a class="post-img" href="/post/{{ $post->id }}"><img src="/img/post-13.jpg" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">{{ $post->category->name }}</a>
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h3>
                            <ul class="post-meta">
                                <li><a href="author.html">{{ $post->author }}</a></li>
                                <li>{{ date("d F Y", strtotime($post->created_at)) }}</li>
                            </ul>
                            <p>{{ substr($post->body, 0, 150) . ' ...'  }}</p>
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
                <!-- ad widget-->
                <div class="aside-widget text-center">
                    <a href="#" style="display: inline-block;margin: auto;">
                        <img class="img-responsive" src="/img/ad-3.jpg" alt="">
                    </a>
                </div>
                <!-- /ad widget -->

                <!-- social widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Social Media</h2>
                    </div>
                    <div class="social-widget">
                        <ul>
                            <li>
                                <a href="#" class="social-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <span>21.2K<br>Followers</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <span>10.2K<br>Followers</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-google-plus">
                                    <i class="fa fa-google-plus"></i>
                                    <span>5K<br>Followers</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /social widget -->

                <!-- category widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Categories</h2>
                    </div>
                    <div class="category-widget">
                        <ul>
                            <li><a href="#">Lifestyle <span>451</span></a></li>
                            <li><a href="#">Fashion <span>230</span></a></li>
                            <li><a href="#">Technology <span>40</span></a></li>
                            <li><a href="#">Travel <span>38</span></a></li>
                            <li><a href="#">Health <span>24</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /category widget -->

                <!-- newsletter widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Newsletter</h2>
                    </div>
                    <div class="newsletter-widget">
                        <form>
                            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
                            <input class="input" name="newsletter" placeholder="Enter Your Email">
                            <button class="primary-button">Subscribe</button>
                        </form>
                    </div>
                </div>
                <!-- /newsletter widget -->

                <!-- post widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Popular Posts</h2>
                    </div>
                    <!-- post -->
                    <div class="post post-widget">
                        <a class="post-img" href="blog-post.html"><img src="/img/widget-3.jpg" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
                        </div>
                    </div>
                    <!-- /post -->

                    <!-- post -->
                    <div class="post post-widget">
                        <a class="post-img" href="blog-post.html"><img src="/img/widget-2.jpg" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Technology</a>
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                        </div>
                    </div>
                    <!-- /post -->

                    <!-- post -->
                    <div class="post post-widget">
                        <a class="post-img" href="blog-post.html"><img src="/img/widget-4.jpg" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Health</a>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                        </div>
                    </div>
                    <!-- /post -->

                    <!-- post -->
                    <div class="post post-widget">
                        <a class="post-img" href="blog-post.html"><img src="/img/widget-5.jpg" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Health</a>
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                        </div>
                    </div>
                    <!-- /post -->
                </div>
                <!-- /post widget -->

                <!-- galery widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Instagram</h2>
                    </div>
                    <div class="galery-widget">
                        <ul>
                            <li><a href="#"><img src="/img/galery-1.jpg" alt=""></a></li>
                            <li><a href="#"><img src="/img/galery-2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="/img/galery-3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="/img/galery-4.jpg" alt=""></a></li>
                            <li><a href="#"><img src="/img/galery-5.jpg" alt=""></a></li>
                            <li><a href="#"><img src="/img/galery-6.jpg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /galery widget -->

                <!-- Ad widget -->
                <div class="aside-widget text-center">
                    <a href="#" style="display: inline-block;margin: auto;">
                        <img class="img-responsive" src="/img/ad-1.jpg" alt="">
                    </a>
                </div>
                <!-- /Ad widget -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
@endsection