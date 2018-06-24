<?php

namespace App\Policies;

use App\User;
use App\Blog;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the blog.
     *
     * @param  \App\User  $user
     * @param  \App\Blog  $blog
     * @return mixed
     */
    
    public function before(User $user)
    {
        if ($user->hasRole('root')) {
        return true;
        }
    }

    public function view(User $user, Blog $blog)
    {
        return $blog->user_id === $user->id;
    }

    /**
     * Determine whether the user can create blogs.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the blog.
     *
     * @param  \App\User  $user
     * @param  \App\Blog  $blog
     * @return mixed
     */
    public function update(User $user, Blog $blog)
    {
        return $blog->user_id === $user->id;
    }

    /**
     * Determine whether the user can delete the blog.
     *
     * @param  \App\User  $user
     * @param  \App\Blog  $blog
     * @return mixed
     */
    public function delete(User $user, Blog $blog)
    {
        return $blog->user_id === $user->id;
    }
}
