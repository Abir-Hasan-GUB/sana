<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Contact::orderBy('is_seen', 'asc')->get();

        return view('backend.pages.messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'industry' => 'required|string|max:255',
            'message' => 'required|string',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Store the data
        Contact::create([
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'industry' => $request->input('industry'),
            'message' => $request->input('message'),
            'is_seen' => 0, // Default to unseen
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the contact message
        $contact = Contact::findOrFail($id);

        // Mark the message as seen
        $contact->update(['is_seen' => 1]);

        // Return the view with the contact data
        return view('backend.pages.messages.show' , compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the contact message
        $contact = Contact::findOrFail($id);

        // Update the message
        $contact->update([
            'is_seen' => $request->input('is_seen', $contact->is_seen), // Default to current value
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Message updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
