<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::orderByDesc('id')->take(10)->get();
        $categories = Category::all();
        return view('index', compact('posts', 'categories'));
    }

    public function postShow($id){
        $posts = Post::findOrFail($id);
        $categories = Category::all();
        return view('postShow', compact('posts', 'categories'));
    }

    public function postcate(Category $category){
        $categories = Category::all();
        $posts = Post::where('category_id',  $category->id)->get();
        return view('postcate', compact('categories', 'posts'));
    }

    public function search(Request $request)
    {
        $query = $request->input('s'); // Lấy giá trị của query string 's'

        // Tìm kiếm trong bảng posts, bạn có thể thay đổi thành bảng và cột bạn cần
        $posts = Post::where('title', 'LIKE', "%{$query}%")->get();
        $categories = Category::all();
        return view('search', compact('posts','categories'));
    }

}
