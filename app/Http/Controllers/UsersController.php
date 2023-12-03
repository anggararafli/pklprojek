<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    function index()
    {
    return view('login.index');
    }

    public function login(Request $request) {
        if(Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('guru.index');
        }
        return redirect()->route('login');
    }
}
