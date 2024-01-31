<?php

namespace App\Http\Controllers;

use App\Models\FarmRecord;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function register()
    {
        return view('Auth.register');
    }
    public function index()
    {
        return view('Homepage.index');
    }
    public function login()
    {
        return view('Auth.login');
    }

    public function weather()
    {
        return view('Homepage.weather');
    }

    public function about()
    {
        return view('Homepage.about');
    }

    public function visualization()
    {
        $data=FarmRecord::all();
        return view('Homepage.graph', compact('data'));

    }


}
