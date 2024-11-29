<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        $bookings = Booking::all();
        return view('Admin.pages.booking.manage', compact('bookings'));
    }

    public function create(){
        return view("Admin.pages.booking.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_sub_title' => 'required|string',
            'book_head_title' => 'required|string',
            'book_title' => 'required|string',
            'book_des' => 'required|string',
            'card_title' => 'required|string',
            'cart_des' => 'required|string',
            'all_people' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png'
        ]);
    
        // Handle Image Upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $imagePath = 'images/booking';
    
            if (!file_exists(public_path($imagePath))) {
                mkdir(public_path($imagePath), 0777, true);
            }
    
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path($imagePath), $imageName);
        }
    
        // Store the booking data in the database
        Booking::create([
            'book_sub_title' => $request->book_sub_title,
            'book_head_title' => $request->book_head_title,
            'image' => $imageName ? "$imagePath/$imageName" : null,
            'book_title' => $request->book_title,
            'book_des' => $request->book_des,
            'card_title' => $request->card_title,
            'cart_des' => $request->cart_des,
            'all_people' => $request->all_people,
        ]);
        return redirect()->route('booking.manage')->with('success', 'booking created successfully!');
    }

    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        return view('Admin.pages.booking.edit', compact('booking'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'book_sub_title' => 'required|string',
            'book_head_title' => 'required|string',
            'book_title' => 'required|string',
            'book_des' => 'required|string',
            'card_title' => 'required|string',
            'cart_des' => 'required|string',
            'all_people' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png'
        ]);

        $booking = Booking::findOrFail($id);

        // Handle Image Upload
        $imageName = $booking->image; 
        $imagePath = 'images/booking'; 

        if ($request->hasFile('image')) {
            if (!file_exists(public_path($imagePath))) {
                mkdir(public_path($imagePath), 0777, true);
            }

            $imageName = time().'.'.$request->image->extension();

            // Save the uploaded image
            $request->image->move(public_path($imagePath), $imageName);

            $imageName = "$imagePath/$imageName";
        }

        $booking->update([
            'book_sub_title' => $request->book_sub_title,
            'book_head_title' => $request->book_head_title,
            'image' => $imageName,
            'book_title' => $request->book_title,
            'book_des' => $request->book_des,
            'card_title' => $request->card_title,
            'cart_des' => $request->cart_des,
            'all_people' => $request->all_people,
        ]);

        return redirect()->route('booking.manage')->with('success', 'booking updated successfully!');
    }


    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        if ($booking->image && file_exists(public_path($booking->image))) {
            unlink(public_path($booking->image));
        }
        $booking->delete();
        return redirect()->route('booking.manage')->with('success', 'booking deleted successfully!');
    }
}
