<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    protected $redirectTo = '/admin/products';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
    	$products = Products::all()->paginate(15);
    	return view('admin.products.index', compact('products'));
    }
}
