<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //

    public function show(){
        if(Auth::check()){
            return redirect()->route('home.index');
        }
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        $request->validate([
            // Valida el maximo de los inputs text
            'name' => 'required|string|max:255', 
            'username' => 'required|string|max:255', 
            'email' => 'required|string|max:255', 
            'password' => 'required|string|max:255', 
        ]);
        $user = User::create($request->validated());
        auth()->login($user);
        return redirect('/home')->with('success', "Account successfully registered.");
        /*
        $user = new User;
         $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->setPassword($request->password);
        $user->save();
        return redirect('/asdasd')->with('success', "Account successfully registered."); */

    }
}