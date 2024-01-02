<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Auth;
// use Symfony\Component\HttpFoundation\Response;
// use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function register(Request $request)
    {


       return  User::create([
            'name' => $request->input(key:'name'),
            'email' => $request->input(key:'email'),
            'password' => Hash::make($request->input(key:'password')),
            'photo' => $request->input(key:'photo'),
            'matricule' => $request->input(key:'matricule'),
            // 'role' => $request->input(key:'role'),
            'role'=> $request->input(key: 'role', default: 'user')
        ]);

    }


    public function user()
    {
        return 'user auth';
    }
}
