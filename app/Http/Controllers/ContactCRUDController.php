<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactCRUD;

class ContactCRUDController extends Controller
{
    public function index()
    {
        $contacts = ContactCRUD::all();
        return view('contactAdmin.index', ['contacts' => $contacts]);
    }

    public function create()
    {
        return view('contactAdmin.create');
    }

    public function store(Request $request)
    {
        $contact = ContactCRUD::create($request->all());
        return redirect('admin/contact')->with('success', 'Contact created successfully.');
    }

    public function edit($id)
    {
        $contact = ContactCRUD::find($id);
        if (!$contact) {
            return redirect('contactAdmin.index')->with('error', 'Contact not found.');
        }
        return view('contactAdmin.edit', ['contact' => $contact]);
    }

    public function update(Request $request, $id)
    {
        $contact = ContactCRUD::find($id);
        if (!$contact) {
            return redirect('contactAdmin.index')->with('error', 'Contact not found.');
        }
        $contact->update($request->all());
        return redirect('admin/contact')->with('success', 'Contact updated successfully.');
    }

    public function destroy($id)
    {
        $contact = ContactCRUD::find($id);
        if (!$contact) {
            return redirect('admin/contact');
        }
        $contact->delete();
        return redirect('admin/contact');
    }
}
