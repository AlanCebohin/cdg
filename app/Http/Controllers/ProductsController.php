<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show
    {
    	$products=Products::all();
    	$products_variants = Variants::all();
    	$stock = Stock::all();
    	return view('front.products', compact("products", "products_variants", "stock"));
    }
}
