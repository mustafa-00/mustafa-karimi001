<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|min:10|max:255',
            'passwrod' => 'required|min:5|max:255'
        ]);
        // return dd($request->all());

        if(!auth()->attempt(['email' => $request->email, 'password' => $request->password])){
            return back();

        }else{
            auth()->attempt(['email' =>$request->eamil, 'password' => $request->password],$request->remember);
            return redirect('admin');
        }
    }
}
