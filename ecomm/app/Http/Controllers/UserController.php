<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Middleware\UserAuth;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user= User::where(["email"=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password)){
                return "usrename or pasword not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
