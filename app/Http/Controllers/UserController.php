<?php

namespace App\Http\Controllers;
use App\Models\Users; // Corrected the model name to 'User'
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = Users::where('email', $request->email)->first(); 

        if ($user && Hash::check($request->password, $user->password)) {
             Session::put('user_id', $user->id);
             return redirect('/')->with('message', 'Login successful');
        }

        return redirect('/login-page')->withErrors([
            'message' => 'Login failed'
        ]);
    }
    public function logout()
    {
        Session::forget('user_id');
        return redirect('/login-page')->with('message', 'Logged out successfully');
    }

}
