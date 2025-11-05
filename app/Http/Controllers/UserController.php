<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        // return $users;

        return view('users', compact('users'));
    }

    public function create(){
        User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => '123456',
        ]);
    }
}
