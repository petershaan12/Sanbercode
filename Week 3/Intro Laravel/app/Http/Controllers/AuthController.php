<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() 
    {
        return view('form');
    }
    public function form(Request $request) 
    {
        $first = $request->First_name;
        $last = $request->Last_name;
        // dd($first, $last)

        return view('welcome',  compact('first', 'last'));
    }
}