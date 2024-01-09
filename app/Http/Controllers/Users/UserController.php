<?php

namespace App\Http\Controllers\Users;

use App\Models\Users\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

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

    public function addUser()
    {
        try {
            request()->validate([
                'name'             => ['required'],
                'email'            => ['required','email'],
                'password'         => ['required',Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
                ]
            ]);
            $user = new User();
            $user->name = request()->get("name");
            $user->email = request()->get("email");
            $user->password = Hash::make(request()->get("password"));
            //$user->save();

            return response()->json($user->save());
        }catch (Exception $e){
            return $e->getMessage();
        }

    }
}
