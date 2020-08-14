@if(!empty($replies))
    @foreach ($replies as $reply)
        <div class="media media-author">
            <div class="media-left">
                <img class="media-object" src="/img/avatar-1.jpg" alt="">
            </div>
            <div class="media-body">
                <div class="media-heading">
                    <h4>{{ $reply->name }}</h4>
                    <span class="time">{{ $reply->created_at->diffForHumans() }}</span>
                </div>
                <p>{{ $reply->content }}</p>
                <a href="#" class="reply">Reply</a>
            </div>
        </div>
    @endforeach
@endif