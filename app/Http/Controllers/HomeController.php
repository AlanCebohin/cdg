<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	$stock = Stock::all();
        return view('front.index', compact('products', 'stock'));
    }
}
