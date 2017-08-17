<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    	$products = Products::all();
    	$products_variants = Variants::all();
    	$stock = Stock::all();
        return view('front.index', ["products" => $products, "products_variants" => $products_variants, "stock" => $stock]);
    }
}
