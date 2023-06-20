<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        return view('backend.category.add');
    }
    public function store(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return back()->with('msg', 'Category added successfully!');
    }
    public function index(Request $request){
        $categories = Category::all();
        return view('backend.category.manage', ['categories'=>$categories]);
    }
}
