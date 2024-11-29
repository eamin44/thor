<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Herosection;
use Illuminate\Http\Request;

class HerosectionController extends Controller
{
    public function index(){
        $herosections = Herosection::all();
        return view('Admin.pages.Herosection.manage', compact('herosections', ));
    }

    public function create(){
        return view("Admin.pages.Herosection.create");
    }

    public function showFrontend() {
        // Fetch all hero sections
        $herosections = Herosection::all(); // Adjust as needed for your use case
    
        return view('Frontend.pages.main', compact('herosections')); // Pass the variable to the view
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'subtitle' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'btn_txt' => 'required|string',
            'btn_url' => 'required|string',
            'btntwo_url' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png'
        ]);
    
        // Handle Image Upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $imagePath = 'images/hero';
    
            if (!file_exists(public_path($imagePath))) {
                mkdir(public_path($imagePath), 0777, true);
            }
    
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path($imagePath), $imageName);
        }
    
        // Store the hero data in the database
        Herosection::create([
            'subtitle' => $request->subtitle,
            'title' => $request->title,
            'description' => $request->description,
            'btn_txt' => $request->btn_txt,
            'image' => $imageName ? "$imagePath/$imageName" : null,
            'btn_url' => $request->btn_url,
            'btntwo_url' => $request->btntwo_url,
        ]);
        return redirect()->route('hero.manage')->with('success', 'hero created successfully!');
    }


    public function edit($id)
    {
        $hero = Herosection::findOrFail($id);
        return view('Admin.pages.herosection.edit', compact('hero'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'subtitle' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'btn_txt' => 'required|string',
            'btn_url' => 'required|string',
            'btntwo_url' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png'
        ]);
    
        // Find the hero record
        $hero = Herosection::findOrFail($id);
    
        // Store the current image path
        $currentImage = $hero->image; // Corrected from 'ser_img' to 'image'
        $imagePath = 'images/hero'; 
    
        // Handle Image Upload
        if ($request->hasFile('image')) {
            // Create directory if it doesn't exist
            if (!file_exists(public_path($imagePath))) {
                mkdir(public_path($imagePath), 0777, true);
            }
    
            // Generate a new image name and move the uploaded file
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path($imagePath), $imageName);
    
            // Set the image path
            $imageName = "$imagePath/$imageName";
        } else {
            // No new image uploaded, keep the current image
            $imageName = $currentImage; // Retain the old image path
        }
    
        // Update the hero record
        $hero->update([
            'subtitle' => $request->subtitle,
            'title' => $request->title,
            'description' => $request->description,
            'btn_txt' => $request->btn_txt,
            'image' => $imageName, // Set the final image path (new or current)
            'btn_url' => $request->btn_url,
            'btntwo_url' => $request->btntwo_url,
        ]);
    
        return redirect()->route('hero.manage')->with('success', 'Hero updated successfully!');
    }
    

    public function destroy($id)
    {
        $hero = Herosection::findOrFail($id);
        if ($hero->ser_img && file_exists(public_path($hero->ser_img))) {
            unlink(public_path($hero->ser_img));
        }
        $hero->delete();
        return redirect()->route('hero.manage')->with('success', 'hero deleted successfully!');
    }

}
