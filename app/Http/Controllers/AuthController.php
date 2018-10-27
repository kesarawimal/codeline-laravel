<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request) {
        $auth = new User();
        $auth->name = $request->name;
        $auth->email = $request->email;
        $auth->password = $request->password;
        $auth->save();
        Auth::login($auth);
        return redirect('films');
    }
    public function login(Request $request) {
        $auth = User::where('email', $request->email)->first();

        if ($auth->password === $request->password) {
            Auth::login($auth);
            return redirect('films');
        }
    }
}
