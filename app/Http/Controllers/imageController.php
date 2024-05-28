<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function gallery()
    {
        $images = Image::where('approved', true)->get(); // Only approved images are displayed
        return view('gallery', compact('images'));
    }

    public function showImages($page)
    {
        $images = Image::where('location', $page)
                   ->where('approved', true) // Only approved images are displayed
                   ->get();
        return view($page, compact('images'));
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048', // Allow only JPEG, PNG, JPG, GIF files
            'description' => 'required|string|max:255',
        ]);

        // Assuming admin approval is required, set 'approved' to false by default
        $approved = false;

        // Check if user is authenticated and is an admin
        if ($request->user() && $request->user()->role === 'admin') {
            $approved = true; // Set 'approved' to true if user is an admin
        }

        $imagePath = $request->file('image')->store('public/images');

        $image = new Image();
        $image->user_id = auth()->user()->id;
        $image->name = $request->file('image')->getClientOriginalName();
        $image->path = str_replace('public/', '', $imagePath); // Adjust path for storage:link
        $image->description = $request->description;
        $image->location = $request->input('page');
        $image->approved = $approved; // Set the 'approved' flag
        $image->save();

        return redirect()->back()->with('success', 'Image uploaded successfully.');
    }

    public function deleteImage($id)
    {
        $image = Image::findOrFail($id);

        // Check if the user is authorized to delete the image
        if (auth()->user()->id != $image->user_id && auth()->user()->role !== 'admin') {
            return redirect()->back()->with('error', 'You are not authorized to delete this image.');
        }

        // Delete the image file from storage
        Storage::delete('public/' . $image->path);

        // Delete the image record from the database
        $image->delete();

        return redirect()->back()->with('success', 'Image deleted successfully.');
    }
}
