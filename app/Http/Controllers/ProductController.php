<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index',['products' =>$products] );
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable|string',
        ]);
    
        if (!$data) {
            return back()->withErrors($validator)->withInput();
        }
    
        Product::create($data);
    
        return redirect()->route('product.index');
    }
    
}
