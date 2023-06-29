<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactCRUD;

class ContactCRUDController extends Controller
{
    public function index()
    {
        $contacts = ContactCRUD::all();
        return view('contact.index', ['contacts' => $contacts]);
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $contact = ContactCRUD::create($request->all());
        return redirect()->route('contact.index')->with('success', 'Contact created successfully.');
    }

    public function edit($id)
    {
        $contact = ContactCRUD::find($id);
        if (!$contact) {
            return redirect()->route('contact.index')->with('error', 'Contact not found.');
        }
        return view('contact.edit', ['contact' => $contact]);
    }

    public function update(Request $request, $id)
    {
        $contact = ContactCRUD::find($id);
        if (!$contact) {
            return redirect()->route('contact.index')->with('error', 'Contact not found.');
        }
        $contact->update($request->all());
        return redirect()->route('contact.index')->with('success', 'Contact updated successfully.');
    }

    public function destroy($id)
    {
        $contact = ContactCRUD::find($id);
        if (!$contact) {
            return redirect()->route('contact.index')->with('error', 'Contact not found.');
        }
        $contact->delete();
        return redirect()->route('contact.index')->with('success', 'Contact deleted successfully.');
    }
}
