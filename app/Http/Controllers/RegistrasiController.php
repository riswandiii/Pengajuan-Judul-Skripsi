<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use App\Models\User;

class RegistrasiController extends Controller
{
    public function index(){
        return view('registrasi.index', [
            'title' => 'Registration'
        ]);
    }

    public function registrasi(Request $request){
        
        //validasi data
        $validateData = $request->validate([
            'name' => ['required', 'min:5', 'max:255'],
            'nama_lengkap' => ['required', 'min:5', 'max:255'],
            'stb' => ['required', 'min:6', 'max:7'],
            'jurusan' => ['required'],
            'angkatan' => ['required'],
            'email' => ['required', 'min:5', 'max:255', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success', 'Registrasi Success!');

    }
}
