<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:root');
    }

    public function index()
    {
    	return view('admin.index');
    }

    public function contact()
    {
    	$contacts = Contact::all();
    	return view('admin.contact', compact('contacts'));
    }

    public function contactDelete(Contact $contact)
    {
    	$contact->delete();
    	return back()->with('flash' , 'Mensaje eliminado correctamente');
    }
}
