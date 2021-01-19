<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin_auth', ['except' => ['create', 'store']]);
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function create(Request $request)
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, User::$rules);
        $user = new User;
        $form = $request->all();
        $form['password'] = Hash::make($request->password);
        unset($form['_token']);
        $user->fill($form)->save();
        return redirect('/users');
    }

    public function edit(User $user){
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request, User::$rules);
        $form = $request->all();
        $form['password'] = Hash::make($request->password);
        unset($form['_token']);
        $user->fill($form)->save();
        return redirect('/users');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('/users');
    }
}
