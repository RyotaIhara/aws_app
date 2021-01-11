<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('types.index', ['types' => $types]);
    }

    public function create(Request $request)
    {
        return view('types.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, Type::$rules);
        $type = new Type;
        $form = $request->all();
        unset($form['_token']);
        $type->fill($form)->save();
        return redirect('/types');
    }

    public function edit(Type $type){
        return view('types.edit', ['type' => $type]);
    }

    public function update(Request $request, Type $type)
    {
        $this->validate($request, Type::$rules);
        $form = $request->all();
        unset($form['_token']);
        $type->fill($form)->save();
        return redirect('/types');
    }

    public function destroy($id)
    {
        Type::find($id)->delete();
        return redirect('/types');
    }
}
