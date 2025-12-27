<div>
    <section class="bg-light py-4 py-lg-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="h5 h-lg3 fw-bold text-dark">Discussion ({{$comments->count()}})</h2>
            </div>
            @auth
                @include('commentify::livewire.partials.comment-form',[
                    'method'=>'postComment',
                    'state'=>'newCommentState',
                    'inputId'=> 'comment',
                    'inputLabel'=> 'Your comment',
                    'button'=>'Post comment'
                ])
            @else
                <a class="mt-2 text-sm" href="/login">Log in to comment!</a>
            @endauth
            @if($comments->count())
                @foreach($comments as $comment)
                    <livewire:comment :$comment :key="$comment->id"/>
                @endforeach
                <div class="mt-4">
                    {{$comments->links()}}
                </div>
            @else
                <p class="text-muted">No comments yet!</p>
            @endif
        </div>
    </section>
</div>
