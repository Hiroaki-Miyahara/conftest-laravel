<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function inquiry()
    {
        return view('inquiry');
    }
    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'detail', 'content']);
        return view('confirm', compact('contact'));
    }
    public function store(Request $request)
    {
        $contact = $request->only(['name', 'gender', 'email', 'tel', 'address', 'building', 'detail', 'content']);
        Contact::create($contact);
        return view('thanks');
    }
}
