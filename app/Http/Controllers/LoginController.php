<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{

  //function index untuk view login
  public function index(){
      return view('login.index', [
        'title' => 'Log In'
      ]);
  }

  //function cek login
  public function cekLogin(Request $request){
    
    //validassi data
    $validateData = $request->validate([
        'email' => ['required'],
        'password' => ['required']
    ]);

    //cek jika email dan password ada yang cocok dalam database pada tabel users
    if(Auth::attempt($validateData)){
      $request->session()->regenerate();
      return redirect()->intended('/')->with('success', 'Log In Success!');
    }

  }

  //function logout
  public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/login')->with('success', 'Berhasil Log Out!');
}

}
