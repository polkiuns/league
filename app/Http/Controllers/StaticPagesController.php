<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Blog;

class StaticPagesController extends Controller
{
    public function index()
    {
        $blogs = Blog::all()->take(3);
    	return view('index' , compact('blogs'));
    }

    public function contact()
    {
    	return view('contact');
    }
    
    public function about()
    {
    	return view('about');
    }
    
    public function blogs(Request $request)
    {
        $categories = Category::pluck('name' , 'id');


        if(Category::find($request->category))
            {
                $blogs = Blog::ofCategory($request->category)->paginate('20');
                $scopeName = Category::where('id' , $request->category)->first();
            }
        else
        {
            $blogs = Blog::paginate('20');            
        }


        return view('blogs' , compact('blogs' , 'categories' , 'scopeName'));
    }


}
