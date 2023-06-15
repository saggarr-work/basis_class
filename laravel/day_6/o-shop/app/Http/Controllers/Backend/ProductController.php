<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static function index(){
        return view('backend.add-product');
    }
    public static function store(Request $r){
        return $r;
    }
}
