<?php

namespace App\Policies;

use App\Models\User;
use Usamamuneerchaudhary\Commentify\Models\Comment;

class CommentPolicy
{
    public function destroy(User $user, Comment $comment): bool
    {
        return $user->id === $comment->user_id || $user->role === 'admin';
    }

    public function update(User $user, Comment $comment): bool
{
    return $user->id === $comment->user_id;
}
}
