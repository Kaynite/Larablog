<div class="aside-widget">
    <div class="section-title">
        <h2 class="title">Categories</h2>
    </div>
    <div class="category-widget">
        <ul>
            @foreach ($categories as $category)
                <li><a href="{{ route('showCategory', $category->id) }}">{{ $category->name }} <span>{{ $category->posts_count }}</span></a></li>
            @endforeach
        </ul>
    </div>
</div>