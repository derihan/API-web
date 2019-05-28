<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class authController extends Controller
{
    //

    public function register(Request $request)
    {
        # code...
        if ($request->isMethod('POST')) {
            $do_username = $request->username;
            $do_hash = $request->password;

            if ($do_username != '' and $do_hash != '' ) {
                # code...
                $make_hash = Hash::make($do_hash);
                $register = New User();

                $register->username = $do_username;
                $register->password = $make_hash;

                $register->save();

                return User::all();
            }
        }
    }

    public function hello()
    {
        # code...
        return "ok";
    }
}
