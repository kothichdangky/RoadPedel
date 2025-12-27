<div>
    @if ($isEditing)
        @include('commentify::livewire.partials.comment-form', [
            'method' => 'editComment',
            'state' => 'editState',
            'inputId' => 'reply-comment',
            'inputLabel' => 'Your Reply',
            'button' => 'Edit Comment',
        ])
    @else
        <article class="p-4 mb-2 bg-light rounded border">
            <footer class="d-flex justify-content-between align-items-center mb-2">
                <div class="d-flex align-items-center">
                    <p class="d-flex align-items-center me-3 mb-0 mr-2 text-muted">

                        <strong class="text-dark">{{ Str::ucfirst($comment->user->name) }}</strong>
                    </p>
                    <p class="text-muted mb-0">
                        <time datetime="{{ $comment->presenter()->relativeCreatedAt() }}"
                            title="{{ $comment->presenter()->relativeCreatedAt() }}">
                            {{ $comment->presenter()->relativeCreatedAt() }}
                        </time>
                    </p>
                </div>
                <div class="position-relative">
                    <button wire:click="$toggle('showOptions')" class="btn btn-light btn-sm dropdown-toggle"
                        type="button">
                        <i class="bi bi-three-dots"></i>
                    </button>
                    @if ($showOptions)
                        <div class="dropdown-menu dropdown-menu-end show">
                            <ul class="list-unstyled mb-0">
                                @can('update', $comment)
                                    <li>
                                        <button wire:click="$toggle('isEditing')" type="button" class="dropdown-item">
                                            Edit
                                        </button>
                                    </li>
                                @endcan
                                
                                @if (auth()->check() && (auth()->user()->role === 'admin' || auth()->id() === $comment->user_id))
                                    <li>
                                        <button wire:click="deleteComment"type="button"
                                            class="dropdown-item text-danger">
                                            Xoá
                                        </button>
                                    </li>
                                @endif

                            </ul>
                        </div>
                    @endif
                </div>
            </footer>
            <p class="text-muted">
                {!! $comment->presenter()->replaceUserMentions($comment->presenter()->markdownBody()) !!}
            </p>
            <div class="d-flex align-items-center mt-3 gap-3">
                <livewire:like :$comment :key="$comment->id" />
                @include('commentify::livewire.partials.comment-reply')
            </div>
        </article>
    @endif

    @if ($isReplying)
        @include('commentify::livewire.partials.comment-form', [
            'method' => 'postReply',
            'state' => 'replyState',
            'inputId' => 'reply-comment',
            'inputLabel' => 'Your Reply',
            'button' => 'Post Reply',
        ])
    @endif

    @if ($hasReplies)
        <article class="p-2 mb-2 ms-2 border-top">
            @foreach ($comment->children as $child)
                <livewire:comment :comment="$child" :key="$child->id" />
            @endforeach
        </article>
    @endif

    <script>
        function detectAtSymbol() {
            const textarea = document.getElementById('reply-comment');
            if (!textarea) {
                return;
            }

            const cursorPosition = textarea.selectionStart;
            const textBeforeCursor = textarea.value.substring(0, cursorPosition);
            const atSymbolPosition = textBeforeCursor.lastIndexOf('@');

            if (atSymbolPosition !== -1) {
                const searchTerm = textBeforeCursor.substring(atSymbolPosition + 1);
                if (searchTerm.trim().length > 0) {
                    @this.dispatch('getUsers', {
                        searchTerm: searchTerm
                    });
                }
            }
        }
    </script>
</div>
