<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StocksController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function create()
    {
        return view('admin.stocks.create');
    }

    public function store(Request $request)
    {
        $product = Product::create(request()->all());
        $product-> save();
    }

    public function update(Request $request)
	{
		$stock = App\Stock::find($id);
        $stock->quantity = $request->quantity;
        $stock->save;
    }
}
