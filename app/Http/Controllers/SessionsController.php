<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create(){
        return view('sessions.create');
    }
    public function store(){
     $attr =   request()->validate([
         'email'=>'required|email',
         'password'=>'required'

        ]);
     if(auth()->attempt($attr)){
         return redirect('/')->with('success','Welcome Back !');
     }
     throw ValidationException::withMessages([
         'email'=>'Your porvided credentials could not be verified'
     ]);
    }
    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success','Goodbye, See you');
    }
}
