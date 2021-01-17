<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

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
        $stock = new Stock;
        $this->validate($request, Stock::$rules);
        // user_idとtype_idでuniqueチェックを行う
        if ($stock->uniqueCheck($request->user_id, $request->type_id))
        {
            $messages = new MessageBag;
            $types = Type::all();
            $users = User::all();
            $messages->add('', '同ユーザーで、同種別のデータが存在します');

            return redirect()->back()->withErrors($messages);
        };
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
        $this->validate($request, Stock::$rules);
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
