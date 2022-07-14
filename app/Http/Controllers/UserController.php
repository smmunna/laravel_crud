<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //Insert into the database
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
        $data = User::all();
        return view('crud.read',['data'=>$data]);
    }

    // Update Operation ====
    public function update($id)
    {
        $data = User::select('id','name','email','password')->where('id','=',$id)->get();
        return view('crud.edit',['data'=>$data]);
    }
    public function edit(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;

        // Update query with eloquent Model
        User::where('id','=',$id)->update([
            'id'=>$id,
            'name'=>$name,
            'email'=>$email
        ]);

    return redirect()->action([UserController::class, 'read']);
    
    }
}
