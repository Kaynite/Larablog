<div class="footer-widget">
    <h3 class="footer-title">Categories</h3>
    <div class="category-widget">
        <ul>
            @foreach ($categories as $category)
                <li><a href="#">{{ $category->name }} <span>{{ $category->posts_count }}</span></a></li>
            @endforeach
        </ul>
    </div>
</div>