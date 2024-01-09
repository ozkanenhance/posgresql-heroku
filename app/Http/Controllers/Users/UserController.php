<?php

namespace App\Http\Controllers\Users;

use App\Models\Users\User;

class UserController
{
    public function userList()
    {
        $user = new User();
        //$user->name = "Özkan";
        //$user->email = "ozkan@enhance.online";
        //$user->password = "password";
        //$user->save();

        $data = $user->paginate()->toArray();

        return view("welcome",$data);
    }
}
