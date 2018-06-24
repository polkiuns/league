<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Blog;
class BlogsController extends Controller
{
	public function index()
	{
		$blogs = Blog::all();
		return view('admin.blogs.index' , compact('blogs'));
	}

	public function create()
	{
		$categories = Category::pluck('name' , 'id');
		return view('admin.blogs.create' , compact('categories'));
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
		$categories = Category::pluck('name' , 'id');
		return view('admin.blogs.edit' , compact('blog' , 'categories'));
	}

	public function update(Request $request, Blog $blog)
	{
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

        return redirect()->route('admin.blogs.edit' , compact('blog' , 'categories'))->with('flash' , 'Categoria actualizada correctamente');  	
	}

	public function delete(Blog $blog)
	{
		$blog->delete();

		return back()->with('flash' , 'Blog eliminado correctamente');
	}
}
