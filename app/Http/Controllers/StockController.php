<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();
        return view('stocks.index', ['stocks' => $stocks]);
    }

    public function create(Request $request)
    {
        $types = Type::all();
        $users = User::all();
        return view('stocks.create', ['users' => $users, 'types' => $types]);
    }

    public function store(Request $request)
    {
        //$this->validate($request, Stock::$rules);
        $stock = new Stock;
        $form = $request->all();
        unset($form['_token']);
        $stock->fill($form)->save();
        return redirect('/stocks');
    }

    public function edit(Stock $stock){
        $types = Type::all();
        $users = User::all();
        return view('stocks.edit', 
            ['stock' => $stock,
             'users' => $users, 
             'types' => $types
            ]);
    }

    public function update(Request $request, Stock $stock)
    {
        //$this->validate($request, Stock::$rules);
        $form = $request->all();
        unset($form['_token']);
        $stock->fill($form)->save();
        return redirect('/stocks');
    }

    public function destroy($id)
    {
        Stock::find($id)->delete();
        return redirect('/stocks');
    }
}
