<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('blogs.index', compact('blogs'));
    }

    public function detail($id) 
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.detail', compact('blog'));
    }
}
