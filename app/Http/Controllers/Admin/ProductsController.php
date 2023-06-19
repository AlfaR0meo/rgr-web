<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Http\Requests\ProductFormRequest;

class ProductsController extends Controller {
    public function get() {
        $products = Product::all();
        $isAdmin = session("isAdmin");
        $login = session("login");
        return view('admin/products', compact('products', 'isAdmin', 'login'));
    }

    public function post(ProductFormRequest $request) {
        $product = new Product();

        $product->name = $request->input('name');
        $product->text = $request->input('text');
        $product->cost = $request->input('cost');

        $product->save();
        
        $file = $request->file('image');

        if ($file != null) {
            $filename = $product->id . "." . $request->file('image')->extension();
            $product->image_path = "/img/products/" . $filename;
            $file->storeAs("img/products", $filename);

            $product->save();
        }

        $products = Product::all();
        $isAdmin = session("isAdmin");
        $login = session("login");
        return view('admin/products', compact('products', 'isAdmin', 'login'));
    }
    
}
