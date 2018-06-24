<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;
class BlogsController extends Controller
{

    public function index()
    {
        $blogs = Blog::where('user_id' , auth()->user()->id)->get();
        $categories = Category::all();
        return view('blogs.index' , compact('blogs' , 'categories'));
    }
    public function show(Blog $blog)
    {
    	$categories = Category::pluck('name' , 'id');
    	return view('blogs.show' , compact('blog' , 'categories'));
    }

    public function create()
    {
    	$categories = Category::pluck('name' , 'id');
    	return view('blogs.create' , compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:10',
            'category_id' => 'required',
            'body' => 'required|min:10'
        ]);

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->category_id = $request->category_id;
        $blog->user_id = Auth()->user()->id;
        $blog->body = $request->body;
        $blog->save();

        return back()->with('flash' , 'Entrada creada correctamente');
    }

    public function edit(Blog $blog)
    {
        $this->authorize('view', $blog);

        $categories = Category::pluck('name' , 'id');
        return view('blogs.edit' , compact('categories' , 'blog'));       
    }
   
    public function update(Request $request, Blog $blog)
    {

        $this->authorize('update', $blog);

        $request->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:10',
            'category_id' => 'required',
            'body' => 'required|min:10'
        ]);

        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->category_id = $request->category_id;
        $blog->user_id = Auth()->user()->id;
        $blog->body = $request->body;
        $blog->save();

        $categories = Category::pluck('name' , 'id');

        return redirect()->route('blogs.edit' , compact('blog' , 'categories'))->with('flash' , 'Entrada actualizada correctamente');   
    }

    public function delete(Blog $blog)
    {

        $this->authorize('delete', $blog);

        $blog->delete();

        return back()->with('flash' , 'Blog eliminado correctamente');
    }
}
