<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{

    public function loginAdmin()
    {
        if(auth()->check()){
            return redirect()->to('home');
        }
        return view ('login');

    }
    public function postLoginAdmin(Request $request)
    {
        $remember = $request->has('remember_me') ? true : false;
        $data = [
            'email' => $request->email,
            'password'=> $request->password
        ];
        dd($data);
        if(Auth::attempt($data, $remember)){
            return redirect()->to('home');
        };
    }
}
