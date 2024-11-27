<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctors;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        // Validate input data
        $request->validate([
            'name' => 'required|string|max:255',
            'room' => 'required|string|max:50',
            'contact' => 'required|string|max:15',
            'Specialty' => 'required|string',
            'file' => 'required|mimes:jpg,jpeg,png|max:2048', // Max size 2MB
        ]);

        // Create a new Doctor instance
        $doctor = new Doctors();

        // Handle file upload
        $image = $request->file('file');
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move('doctorimage', $imagename);

        // Assign data to model properties
        $doctor->image = $imagename;
        $doctor->name = $request->name;
        $doctor->room = $request->room;
        $doctor->contact = $request->contact;
        $doctor->Specialty = $request->Specialty;

        // Save to database
        $doctor->save();

        // Redirect back with success message
        return redirect()->back()->with('message', 'Doctor added successfully!');
    }
}
