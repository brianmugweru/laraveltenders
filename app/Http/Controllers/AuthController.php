<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
  public function login()
  {
    return view('login');
  }

  public function handlelogin(Request $request)
  {
    $this -> validate($request, User::$login_validation_rules);
    $data = $request->only('email','password');
    if(\Auth::attempt($data)){
      return redirect()->intended('dashboard');
    }
    return back()->withInput()->withErrors(['email'=>'Username or password is Wrong']);

  }

  public function logout(){
    \Auth::logout();
    return redirect()->route('login');
  }
}
