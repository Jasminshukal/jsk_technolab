<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserinfoController extends Controller
{
    public function login(Request $request)
    {
        $validatedData =$request->validate([
            'phone' => 'required|max:10|min:10',
            'password' => 'required',
            ]);
        dd($request);
    }
}
