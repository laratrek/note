<?php

namespace App\Policies;

use App\User;
use App\Page;
use Illuminate\Auth\Access\HandlesAuthorization;

class PagePolicy
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

    /**
     * ユーザーにより指定されたページが更新可能か決める
     *
     * @param  \App\User  $user
     * @param  \App\Page  $page
     * @return bool
     */
    public function update(User $user, Page $page)
    {
        return $user->id === $page->user_id;
    }
}
