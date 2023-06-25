<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginUser extends Controller
{
  public function index()
  {
    return view('user.login');
  }

  public function process(Request $request)
  {
    $request->validate([
      'email' => 'required',
      'password' => 'required'
    ]);

    $credentials = $request->only('email', 'password');
    $credentials['role'] = 'user';
    if (Auth::attempt($credentials)) {
      return redirect()->route('user.index');
    } else {
      return redirect('user/login')->with('error_message', 'wrong email or password');
    }
  }

  public function logout()
  {
    Session::flush();
    Auth::logout();

    return redirect()->route('user.login');
  }
}
