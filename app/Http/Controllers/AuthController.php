<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function respon_post(Request $request)
    {
        // dd($request->all()); seperti var_dump
        $first  = $request["first"];
        $last   = $request["last"];
        $data   = array('first' => $first, 'last' => $last);
        return view('home', $data);
    }
}
