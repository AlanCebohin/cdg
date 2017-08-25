<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StockController extends Controller
{
	public function update(Request $request, $id)
	{
		$stock = App\Stock::find($id);
        $stock->quantity = $request->quantity;
        $stock->save;
    }
}