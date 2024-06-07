<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    //
    public function show()
    {
        if(Auth::check()){
            return redirect()->route('home.index');
        }
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
    
        if (!Auth::validate($credentials)) {
            if(empty($credentials['username'])){
                if(empty($credentials['email'])){
                    return redirect()->back()->withErrors(['username' => 'Debe ingresar un username o email']);
                }else{
                    $user = \App\Models\User::where('email', $credentials['email'])->first();
                }
            }else{
                $user = \App\Models\User::where('username', $credentials['username'])->first();
            }
            if (!$user) {
                return redirect()->back()->withErrors(['username' => 'El nombre de usuario no existe.']);
            }
            
            return redirect()->back()->withErrors(['password' => 'La contraseña es incorrecta.']);
        }
    
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
    
        return $this->authenticated($request, $user);
    }
    

    protected function authenticated(Request $request, $user) 
    {
        return redirect()->route('home.index');
    }
}