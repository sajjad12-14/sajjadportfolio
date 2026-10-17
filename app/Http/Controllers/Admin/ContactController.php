<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();

        return view('Admin.Contacts.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        return view('Admin.Contacts.show', compact('contact'));
    }

    public function markAsRead(Contact $contact)
    {
        $contact->update([
            'is_read' => true,
        ]);

        return redirect()
            ->route('admin.contacts.index')
            ->with('success', 'Message marked as read.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()
            ->route('admin.contacts.index')
            ->with('success', 'Message deleted successfully.');
    }
}
