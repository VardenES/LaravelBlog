<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Notifications\InboxMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Admin;

class ContactController extends Controller
{

    public function show()
    {
        return view('contact');
    }

    public function mailToAdmin(ContactFormRequest $message, Admin $admin)
    {
        // send the admin a notification
        $admin->notify(new InboxMessage($message));
        // redirect the user back
        return redirect()->back()->with('message', 'Hemos recibido tu mensaje!');
    }

/*
    public function create()
    {
    	return view('contact.create');
    }

    public function store(Request $request)
    {
    	$contact = [];

    	$contact['name'] = $request->get('name');
    	$contact['email'] = $request->get('email');
    	$contact['msg'] = $request->get('msg');

    	// Mail delivery logic goes here
    	flash('Tu mensaje ha sido enviado!')->success();

    	return redirect()->route('contact.create');

    }
*/    
}
