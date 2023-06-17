<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static function create(){
        return view('backend.add-product');
    }
    public static function store(Request $request){
        $product = new Product();
        $product->title     = $request->title;
        $product->desc      = $request->desc;
        $product->price     = $request->price;
        $product->color     = $request->color;
        $product->size      = $request->size;
        $product->image     = $request->image;
        $product->save();
        return back()->with('notification', 'product added successfully');
    }
    public function index(){
        $products = Product::latest()->get();
        return view('backend.manage-product', ['products'=> $products]);
    }
}
