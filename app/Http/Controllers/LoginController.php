<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function register()
    {
        return view('index/register');
    }

    public function login()
    {
        return view('index/login');
    }
}
