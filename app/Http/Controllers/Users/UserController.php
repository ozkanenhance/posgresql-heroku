<?php

namespace App\Http\Controllers\Users;

use App\Models\Users\User;

class UserController
{
    public function userList()
    {
        $user = new User();
        dd($user->paginate()->toArray());
    }
}
