<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function getAuth(Request $request)
    {
        if (Auth::check())
        {
            $param = ['message' => 'ログインしています。（' . Auth::user()->user_name . '）'];
        } else {
            $param = ['message' => 'ログインしてください'];
        }
        return view('auth.login', $param);
    }

    public function postAuth(Request $request)
    {
        $user_name = $request->user_name;
        $password = $request->password;
        if (Auth::attempt(['user_name' => $user_name,
            'password' => $password])) {
            return redirect('/stocks');
        } else {
            $msg = 'ログインに失敗しました';
            return view('auth.login', ['message' => $msg]);
        }
        
    }

    public function logout(Request $request)
    {
        if (Auth::check())
        {
            Auth::logout();
        }

        $param = ['message' => 'ログインしてください。'];
        return view('auth.login', $param);
    }
}
