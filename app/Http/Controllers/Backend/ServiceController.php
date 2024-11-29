<?php

namespace App\Http\Controllers\Backend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    //
    public function index(){
        $services = Service::all();
        return view('Admin.pages.Service.manage', compact('services'));
    }

    public function create(){
        return view("Admin.pages.Service.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'ser_name' => 'required|string',
            'ser_title' => 'required|string',
            'ser_card_title' => 'required|string',
            'ser_card_des' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png'
        ]);
    
        // Handle Image Upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $imagePath = 'images/services';
    
            if (!file_exists(public_path($imagePath))) {
                mkdir(public_path($imagePath), 0777, true);
            }
    
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path($imagePath), $imageName);
        }
    
        // Store the service data in the database
        Service::create([
            'ser_name' => $request->ser_name,
            'ser_title' => $request->ser_title,
            'ser_img' => $imageName ? "$imagePath/$imageName" : null,
            'ser_card_title' => $request->ser_card_title,
            'ser_card_des' => $request->ser_card_des,
        ]);
        return redirect()->route('service.manage')->with('success', 'Service created successfully!');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('Admin.pages.service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ser_name' => 'required|string',
            'ser_title' => 'required|string',
            'ser_card_title' => 'required|string',
            'ser_card_des' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $service = Service::findOrFail($id);

        // Handle Image Upload
        $imageName = $service->ser_img; 
        $imagePath = 'images/services'; 

        if ($request->hasFile('image')) {
            if (!file_exists(public_path($imagePath))) {
                mkdir(public_path($imagePath), 0777, true);
            }

            $imageName = time().'.'.$request->image->extension();

            // Save the uploaded image
            $request->image->move(public_path($imagePath), $imageName);

            $imageName = "$imagePath/$imageName";
        }

        $service->update([
            'ser_name' => $request->ser_name,
            'ser_title' => $request->ser_title,
            'ser_img' => $imageName,
            'ser_card_title' => $request->ser_card_title,
            'ser_card_des' => $request->ser_card_des,
        ]);

        return redirect()->route('service.manage')->with('success', 'Service updated successfully!');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        if ($service->ser_img && file_exists(public_path($service->ser_img))) {
            unlink(public_path($service->ser_img));
        }
        $service->delete();
        return redirect()->route('service.manage')->with('success', 'Service deleted successfully!');
    }
    
    
}
