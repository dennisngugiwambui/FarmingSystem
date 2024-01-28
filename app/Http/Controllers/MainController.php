<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function register()
    {
        return view('Auth.register');
    }
    public function index()
    {
        return view('welcome');
    }
    public function login()
    {
        return view('Auth.login');
    }
}
