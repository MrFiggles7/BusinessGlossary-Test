<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Request;



class UsersController extends Controller{


    //Get all Users
    public function getUsers(){
        $users = User::all();

        return response()->json($users);
    }

    //Post new User
    public function postNewUser(){
        $user = new User();

        $user->name = Request::get('name');
        $user->password = Request::get('password');
        $user->email = Request::get('email');

        $user->save();

        return response()->json($user, 201);
    }
}
