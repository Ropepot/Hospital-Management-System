<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'room' => 'required|string|max:50',
            'contact' => 'required|string|max:15',
            'Specialty' => 'required|string',
            'file' => 'required|mimes:jpg,jpeg,png|max:2048', // Max size 2MB
        ]);

        
        $doctor = new Doctor();

        
        $image = $request->file('file');
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move('doctorimage', $imagename);

        
        $doctor->image = $imagename;
        $doctor->name = $request->name;
        $doctor->room = $request->room;
        $doctor->contact = $request->contact;
        $doctor->Specialty = $request->Specialty;

        
        $doctor->save();

        
        return redirect()->back()->with('message','Doctor added successfully!');
    }
}
