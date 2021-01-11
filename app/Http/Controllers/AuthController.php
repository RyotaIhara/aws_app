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
            $param = ['message' => 'ログインしています。（' . Auth::user()->name . '）'];
        } else {
            $param = ['message' => 'ログインしてください'];
        }
        return view('auth.login', $param);
    }

    public function postAuth(Request $request)
    {
        $name = $request->name;
        $password = $request->password;
        if (Auth::attempt(['name' => $name,
            'password' => $password])) {
            $msg = 'ログインしました。（' . Auth::user()->name . '）';
        } else {
            $msg = 'ログインに失敗しました';
        }
        return view('auth.login', ['message' => $msg]);
    }

    public function logout(Request $request)
    {
        if (Auth::check())
        {
            Auth::logout();
            $param = ['message' => 'ログインしてください。'];
        } else {
            $param = ['message' => 'ログインしていません'];
        }
        return view('auth.login', $param);
    }
}
