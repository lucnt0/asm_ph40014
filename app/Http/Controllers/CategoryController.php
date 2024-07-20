<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('index' , compact('categories'));
    }

    public function postcate($id)
    {
        $categories = Category::with('post')->findOrFail($id);
        return view('postcate', compact('categories'));
    }
}
