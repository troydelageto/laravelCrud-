<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Middleware\RequirePassword;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){


        //validation
        // dd($request->email);

        $this->validate($request,[
            'name'=>'required|max:222',
            'phoneNumber'=>'required|max:222',
            'email'=>'required|email|max:222',
            'password'=>'required|confirmed|max:225',
            // 'password'=>'required|max:222'

        ]);

        // dd('store');

        // store the new user

        User::create([
            'name'=>$request->name,
            'phoneNumber'=>$request->phoneNumber,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        // sign in user
        return redirect()->route('dashboard');


        // redirect

    }
}
