<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    public function create(Request $request)
    {
        // For Validation
        $request->validate([
            'id'=>'required | max:2',
            'name'=>'required | min:5',
            'email'=>'required | email',
            'password'=>'required | min:4'
        ]);

        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        // Eloquent Model for inserting the Data into the database
        User::create([
            'id'=>$id,
            'name'=>$name,
            'email'=>$email,
            'password'=>$password
        ]);

        return view('welcome');
    }

    // Read Operation =====
    public function read()
    {
        return "Readed anything";
    }
}
