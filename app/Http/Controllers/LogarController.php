<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LogarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function logar(Request $request){
       $user = DB::table('users')->get()->toArray();

       if($request->input('email') == $user[1]->email && $request->input('password') == $user[1]->password){
            return view('content.content');
       } else {
            Redirect::back();
       }
    }
}
