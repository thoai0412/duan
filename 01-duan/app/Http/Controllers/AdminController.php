<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use Illuminate\Support\Facades\Auth\Admin;

class AdminController extends Controller
{

    public function loginAdmin()
    {

        return view ('login');
        // dd(Hash::make('123456'));

    }
    public function postLoginAdmin(Request $request)
    {
        $remember = $request->has('remember_me') ? true : false;
        $data = [
            'email' => $request->email,
            'password'=> $request->password
        ];
        if(Auth::attempt($data, $remember)){
            return redirect()->to('home');
        };
    }
}
