<?php

namespace Kevinkone\Contact\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Kevinkone\Contact\Models\Contact;
use Kevinkone\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    //

    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        // Send Email
        $this->validate($request,
        [
            "name"=>"required|string",
            "email"=>"required|string",
            "message"=>"required|string",
        ]);

        

        Mail::to(config('contact.send_email_to'))->send(new ContactMailable(m:$request->message,name:$request->name));
        Contact::create($request->all());
        $response = ["message"=>"Mail are stored successfully !"];
        return Response()->json($response);
    }
}
