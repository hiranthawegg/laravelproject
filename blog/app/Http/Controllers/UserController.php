<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UserController extends Controller{


    public function  RegisterUser(Request $request){

        $table = new User();

        $table->first_name = $request->input('firstname');
        $table->last_name = $request->input('lastname');
        $table->email = $request->input('email');
        $table->password = $request->input('password');

        $table->save();
        return "data saved";
    }
}
