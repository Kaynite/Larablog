<div class="media">
    <div class="media-left">
        <img class="media-object" src="/img/avatar-2.jpg" alt="">
    </div>
    <div class="media-body">
        <div class="media-heading">
            <h4>{{ $comment->comment_by }}</h4>
            <span class="time">{{ $comment->created_at->diffForHumans() }}</span>
        </div>
        <p>{{ $comment->comment_body }}</p>
        
        {{-- Comment Replies --}}
        <?php $replies = $comment->replies ?>
        @include('components.reply')
    </div>
</div>