<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Http\Requests\ProductFormRequest;

class ProductsController extends Controller {
    public function get() {
        $products = Product::all();

        return view('admin/products', compact("products"));
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

        $product = Product::all();
        return view('admin/news', compact('news'));
    }
    
}
