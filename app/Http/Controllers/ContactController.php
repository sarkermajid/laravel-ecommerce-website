<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact.index');
    }

    public function message(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with('message','Message sent successfully');
    }

    public function contactMessage()
    {
        $contactMessages = Contact::orderBy('id','desc')->get();
        return view('admin.contact.message',compact('contactMessages'));
    }

    public function contactMessageView($id)
    {
        $contactMessage = Contact::find($id);
        return view('admin.contact.view',compact('contactMessage'));
    }

    public function contactMessageDelete(Request $request)
    {
        $contactMessage = Contact::find($request->message_id);
        $contactMessage->delete();
        return response()->json([
            'status' => 'success',
        ]);
    }
}
