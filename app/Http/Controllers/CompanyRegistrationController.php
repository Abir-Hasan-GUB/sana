<?php

namespace App\Http\Controllers;

use App\Models\CompanyRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class CompanyRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = CompanyRegistration::all();

        return view('backend.pages.companies.index', compact('companies'));
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
            'email' => 'required|email|unique:company_registrations,email',
            'name' => 'required|string|max:255',
            'category_id' => 'required',
            'mobile' => 'nullable|string|max:20',
            'business-location' => 'required|string|max:255',
            'business-name' => 'required|string|max:255',
            'abn-acn' => 'required|string|max:50',
            'position' => 'required|string|max:255',
            'business-age' => 'required|string|max:50',
            'website' => 'nullable|url',
            'facebook' => 'nullable|url',
            'authorize' => 'required|in:yes,no',
            'success-story' => 'nullable|string',
            'special-offer' => 'nullable|string',
            'special-instructions' => 'nullable|string',
            'company_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image
        ];

        // Custom error messages (optional)
        $messages = [
            'email.unique' => 'This email is already registered.',
            'authorize.in' => 'You must authorize the submission.',
            'company_banner.image' => 'The file must be an image.',
            'company_banner.max' => 'The image must not exceed 2MB.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Handle file upload
        $bannerPath = null;
        if ($request->hasFile('company_banner')) {
            $bannerPath = $request->file('company_banner')->store('company_banners', 'public'); // Save to storage/app/public/company_banners
        }

        // Store the data
        CompanyRegistration::create([
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'mobile' => $request->input('mobile'),
            'business_location' => $request->input('business-location'),
            'business_name' => $request->input('business-name'),
            'abn_acn' => $request->input('abn-acn'),
            'position' => $request->input('position'),
            'business_age' => $request->input('business-age'),
            'website' => $request->input('website'),
            'facebook' => $request->input('facebook'),
            'authorize' => $request->input('authorize'),
            'success_story' => $request->input('success-story'),
            'special_offer' => $request->input('special-offer'),
            'special_instructions' => $request->input('special-instructions'),
            'is_approved' => 1, // Default to unapproved
            'company_banner' => $bannerPath, // Save the file path
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Your registration has been submitted successfully!');
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
