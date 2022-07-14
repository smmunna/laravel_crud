<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return"Okkay";
    }
}
