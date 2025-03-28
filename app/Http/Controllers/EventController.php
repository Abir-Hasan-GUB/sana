<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventGallery;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('backend.pages.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'date_time' => 'required|date',
    //         'location' => 'required|string|max:255',
    //         'total_seat' => 'required|integer|min:1',
    //         'about_event' => 'required|string',
    //         'images' => 'required|array',
    //         'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB per image
    //     ]);

    //     // Create the event
    //     $event = Event::create([
    //         'date_time' => $request->date_time,
    //         'location' => $request->location,
    //         'total_seat' => $request->total_seat,
    //         'about_event' => $request->about_event,
    //     ]);

    //     // Handle file uploads
    //     if ($request->hasFile('images')) {
    //         foreach ($request->file('images') as $image) {
    //             $path = $image->store('event_galleries', 'public'); // Store in storage/app/public/event_galleries
    //             EventGallery::create([
    //                 'event_id' => $event->id,
    //                 'image_path' => $path,
    //             ]);
    //         }
    //     }

    //     return redirect()->route('event.index')->with('success', 'Event created successfully!');
    // }

    public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'title' => 'required|string',
        'date_time' => 'required|date',
        'location' => 'required|string|max:255',
        'total_seat' => 'required|integer|min:1',
        'about_event' => 'required|string',
        'banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048', // Banner validation
        'images' => 'required|array',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:5048', // Max 2MB per image
    ]);

    // Upload the banner
    $bannerPath = $request->file('banner')->store('event_banners', 'public'); // Store in storage/app/public/event_banners

    // Create the event
    $event = Event::create([
        'title' => $request->title,
        'date_time' => $request->date_time,
        'location' => $request->location,
        'total_seat' => $request->total_seat,
        'about_event' => $request->about_event,
        'banner' => $bannerPath, // Save the banner path
    ]);

    // Handle file uploads for the gallery
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('event_galleries', 'public'); // Store in storage/app/public/event_galleries
            EventGallery::create([
                'event_id' => $event->id,
                'image_path' => $path,
            ]);
        }
    }

    return redirect()->route('event.index')->with('success', 'Event created successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::find($id);
        // dd($event);
        return view('frontend.pages.events.show', compact('event'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
