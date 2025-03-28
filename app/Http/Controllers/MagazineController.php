<?php

namespace App\Http\Controllers;

use App\Models\Magazine;
use Illuminate\Http\Exceptions\PostTooLargeException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class MagazineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $magazines = Magazine::latest()->paginate(10);
        return view('backend.pages.magazine.index', compact('magazines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.magazine.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    //     public function store(Request $request)
    // {
    //     try {
    //         $request->validate([
    //             'title' => 'required|string|max:255',
    //             'pdf_file' => 'required|mimes:pdf|max:102400', // 100MB
    //             'banner' => 'required|image|mimes:jpg,jpeg,png|max:2048', // 2MB
    //         ]);

    //         // Store the PDF manually using move()
    //         $pdfFile = $request->file('pdf_file');
    //         $pdfPath = 'magazines/' . time() . '_' . $pdfFile->getClientOriginalName();
    //         $pdfFile->move(storage_path('app/public/magazines'), $pdfPath);

    //         // Store the banner
    //         $bannerPath = $request->file('banner')->store('banners', 'public');

    //         Magazine::create([
    //             'title' => $request->title,
    //             'pdf_file' => 'magazines/' . basename($pdfPath),
    //             'banner' => $bannerPath,
    //         ]);

    //         return redirect()->route('magazines.index')->with('success', 'Magazine uploaded successfully.');
    //     } catch (PostTooLargeException $e) {
    //         return redirect()->back()->with('error', 'The file is too large. Maximum allowed size is 100MB.');
    //     } catch (\Exception $e) {
    //         return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
    //     }
    // }


    /**
     * Display the specified resource.
     */
    public function show(Magazine $magazine)
    {
        return Storage::disk('public')->download($magazine->pdf_file);
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
    public function destroy(Magazine $magazine)
    {
        Storage::disk('public')->delete([$magazine->pdf_file, $magazine->banner]);
        $magazine->delete();

        return redirect()->route('magazines.index')->with('success', 'Magazine deleted successfully.');
    }

    public function download(Magazine $magazine)
    {
        return Storage::disk('public')->download($magazine->pdf_file);
    }

    public function chunkUpload(Request $request)
    {
        try {
            // Check if the request contains a file
            if (!$request->hasFile('file')) {
                return response()->json(['error' => 'No file received'], 400);
            }

            // Validate the uploaded file
            $request->validate([
                'file' => 'required|file|mimes:pdf|max:102400', // Max 100MB
            ]);

            // Retrieve the original file name
            $originalFileName = $request->file('file')->getClientOriginalName();

            // Make the file name unique by adding a timestamp or UUID
            $uniqueFileName = time() . '_' . $originalFileName;

            // Store the file with the unique name
            $filePath = $request->file('file')->storeAs('magazines', $uniqueFileName, 'public');

            // Store the file path and title (original name) in the Magazine table
            Magazine::create([
                'title' => $originalFileName,  // Using the original name as the title
                'pdf_file' => 'magazines/' . $uniqueFileName,  // Storing the file with the unique name
                'banner' => $request->input('banner') ?? null,  // Assuming you may also want to handle banner here
            ]);

            return response()->json([
                'message' => 'Upload successful!',
                'file_path' => asset('storage/' . $filePath),
            ]);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Upload error: ' . $e->getMessage());

            // Return a JSON error response
            return response()->json(['error' => 'Upload failed: ' . $e->getMessage()], 500);
        }
    }
}
