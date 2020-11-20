<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public functions create () {
        return view ('posts.create');
    }
}
