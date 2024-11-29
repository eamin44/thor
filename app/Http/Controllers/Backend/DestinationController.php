<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view('Admin.pages.destination.manage', compact('destinations'));
    }

    public function create()
    {
        return view("Admin.pages.destination.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'des_sub_title'  => 'required|string',
            'des_head_title' => 'required|string',
            'des_card_title' => 'required|string',
            'price'          => 'required',
            'days_trip'      => 'required|string',
            'image'          => 'nullable|image|mimes:jpg,jpeg,png'
        ]);

        // Handle Image Upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $imagePath = 'images/destination';

            if (!file_exists(public_path($imagePath))) {
                mkdir(public_path($imagePath), 0777, true);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path($imagePath), $imageName);
        }

        // Store the destination data in the database
        Destination::create([
            'des_sub_title' => $request->des_sub_title,
            'des_head_title' => $request->des_head_title,
            'image' => $imageName ? "$imagePath/$imageName" : null,
            'des_card_title' => $request->des_card_title,
            'price' => $request->price,
            'days_trip' => $request->days_trip,
        ]);
        return redirect()->route('destination.manage')->with('success', 'destination created successfully!');
    }

    public function edit($id)
    {
        $destination = Destination::findOrFail($id);
        return view('Admin.pages.destination.edit', compact('destination'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'des_sub_title'  => 'required|string',
            'des_head_title' => 'required|string',
            'des_card_title' => 'required|string',
            'price'          => 'required',
            'days_trip'      => 'required|string',
            'image'          => 'nullable|image|mimes:jpg,jpeg,png'
        ]);

        $destination = Destination::findOrFail($id);

        // Handle Image Upload
        $imageName = $destination->image; 
        $imagePath = 'images/destination'; 

        if ($request->hasFile('image')) {
            if (!file_exists(public_path($imagePath))) {
                mkdir(public_path($imagePath), 0777, true);
            }

            $imageName = time().'.'.$request->image->extension();

            // Save the uploaded image
            $request->image->move(public_path($imagePath), $imageName);

            $imageName = "$imagePath/$imageName";
        }

        $destination->update([
            'des_sub_title' => $request->des_sub_title,
            'des_head_title' => $request->des_head_title,
            'image' => $imageName,
            'des_card_title' => $request->des_card_title,
            'price' => $request->price,
            'days_trip' => $request->days_trip,
        ]);

        return redirect()->route('destination.manage')->with('success', 'destination updated successfully!');
    }


    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);
        if ($destination->image && file_exists(public_path($destination->image))) {
            unlink(public_path($destination->image));
        }
        $destination->delete();
        return redirect()->route('destination.manage')->with('success', 'destination deleted successfully!');
    }
}
