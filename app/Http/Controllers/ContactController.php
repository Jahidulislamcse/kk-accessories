<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Services\ContactService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected ContactService $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function index()
    {
        $data = $this->contactService->getContactData();

        return view('contact', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Message::create($request->only('name','email','message'));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function markAsRead($id)
    {
        $message = Message::findOrFail($id);
        $message->status = 'read';
        $message->save();

        return redirect()->back()->with('success', 'Message marked as read.');
    }

    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();

        return redirect()->back()->with('success', 'Message deleted successfully.');
    }
}
