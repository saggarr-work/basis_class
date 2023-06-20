<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('backend.product.add');
    }
    public function store(Request $request){
        $product = new Product();
        $product->title = $request->title;
        $product->desc = $request->desc;
        $product->price = $request->price;

        $image = $request->image;
        $folder = 'product-images/';
        $imgName = $image->getClientOriginalname();

        $image->move($folder, $imgName);
        $product->image = $folder.$imgName;
        $product->save();
        return back()->with('msg', 'Product added successfully!');
    }
}
