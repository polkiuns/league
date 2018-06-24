<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactsController extends Controller
{
    public function store(Request $request)
    {
    	$contact = new Contact;
    	$contact->name = $request->name;
    	$contact->email = $request->email;
    	$contact->affair = $request->asunto;
    	$contact->body = $request->body;
    	$contact->save();

    	return back()->with('flash' , 'Mensaje creado correctamente');
    }
}
