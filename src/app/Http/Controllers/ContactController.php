<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'inquiry_type', 'content']);
        return view('confirm', ['contact' => $contact]);
    }
    public function store(ContactRequest $request)
    {
    $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'inquiry_type', 'content']);
    Contact::create($contact);
    return view('thanks');
    }
    public function delete(Request $request)
    {
        $contact = Contact::find($request->id);
        return view('delete', ['contact' => $contact]);
    }
    public function remove(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/');
    }
}
