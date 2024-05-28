<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;

class ImageAdminController extends Controller
{
    public function dashboard()
    {
        // Fetch pending images for admin approval
        $pendingImages = Image::where('approved', false)->get();
        return view('adminDashbord', compact('pendingImages'));
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function approveImage($id)
    {
        $image = Image::findOrFail($id);
        $image->approved = true;
        $image->save();
        return redirect()->route('admin.dashboard')->with('success', 'Image approved successfully.');
    }

    public function deleteImage($id)
    {
        $image = Image::findOrFail($id);
        $image->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Image deleted successfully.');
    }
    
}
