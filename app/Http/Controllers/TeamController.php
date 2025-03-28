<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('backend.pages.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validation rules
    $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'twitter' => 'nullable|url', // Validate as URL
        'facebook' => 'nullable|url', // Validate as URL
        'linkedin' => 'nullable|url', // Validate as URL
        'email' => 'nullable|email', // Validate as URL
    ];

    // Validate the request
    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // Handle file upload
    $logoPath = null;
    if ($request->hasFile('logo')) {
        $logoPath = $request->file('logo')->store('team_logos', 'public');
    }

    // Store the data
    Team::create([
        'name' => $request->input('name'),
        'slug' => Str::slug($request->input('name')),
        'description' => $request->input('description'),
        'logo' => $logoPath,
        'twitter' => $request->input('twitter'),
        'facebook' => $request->input('facebook'),
        'linkedin' => $request->input('linkedin'),
        'email' => $request->input('email'),
    ]);

    // Redirect with success message
    return redirect()->back()->with('success', 'Team created successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, $id)
{
    // Find the team
    $team = Team::findOrFail($id);

    // Validation rules
    $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'twitter' => 'nullable|url', // Validate as URL
        'facebook' => 'nullable|url', // Validate as URL
        'linkedin' => 'nullable|url', // Validate as URL
        'email' => 'nullable|email', // Validate as URL
    ];

    // Validate the request
    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // Handle file upload
    $logoPath = $team->logo; // Keep existing logo if no new one is uploaded
    if ($request->hasFile('logo')) {
        // Delete old logo if it exists
        if ($team->logo && file_exists(storage_path('app/public/' . $team->logo))) {
            unlink(storage_path('app/public/' . $team->logo));
        }
        $logoPath = $request->file('logo')->store('team_logos', 'public');
    }

    // Update the team
    $team->update([
        'name' => $request->input('name'),
        'slug' => Str::slug($request->input('name')),
        'description' => $request->input('description'),
        'logo' => $logoPath,
        'twitter' => $request->input('twitter'),
        'facebook' => $request->input('facebook'),
        'linkedin' => $request->input('linkedin'),
        'email' => $request->input('linkedin'),
    ]);

    // Redirect with success message
    return redirect()->back()->with('success', 'Team updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
