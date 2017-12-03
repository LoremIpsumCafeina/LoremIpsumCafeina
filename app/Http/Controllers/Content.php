<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Content extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function content(){
        return view('content.content');
    }
}
