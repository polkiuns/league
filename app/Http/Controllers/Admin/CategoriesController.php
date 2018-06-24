<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
class CategoriesController extends Controller
{
    public function index()
    {
    	$categories = Category::all();
    	return view('admin.categories.index' , compact('categories'));
    }
    
    public function create()
    {
    	return view('admin.categories.create');
    }
    
    public function edit(Category $category)
    {
        return view('admin.categories.edit' , compact('category'));
    }
    
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|min:5|max:50',
            'description' => 'required|min:10|max:255'
        ]);

        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('admin.categories.edit' , compact('category'))->with('flash' , 'Categoria actualizada correctamente');        
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'name' => 'required|min:5|max:50',
    		'description' => 'required|min:10|max:255'
    	]);

    	$category = new Category;
    	$category->name = $request->name;
    	$category->description = $request->description;
    	$category->save();

    	return back()->with('flash' , 'Categoria insertada correctamente');
    }

    public function delete(Category $category)
    {
        $category->delete();

        return back()->with('flash' , 'Categoria eliminada correctamente');
    }
}
