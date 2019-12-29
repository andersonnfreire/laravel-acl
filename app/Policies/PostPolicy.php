<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Post;
use App\User;
use App\Policies\Response;
class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function update(User $user, Post $post)
    {
        if ($user->id === $post->user_id)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
