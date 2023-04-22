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
        // return dd($request->all());
        $request->validate([
            'email' => 'required|min:5|max:255',
            'password' => 'required|min:5|max:255'
        ]);

        if(!auth()->attempt(['email' => $request->email, 'password' => $request->password])){
            session()->flash('error' , 'Email or password is invalid!');
            return back();

        }else{
            auth()->attempt(['email' =>$request->eamil, 'password' => $request->password],$request->remember);
            session()->flash('success' , 'Welcome to admin page!');
            return redirect('admin');
        }
    }
}
