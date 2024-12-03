<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
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

    public function showappointment()
    {
        $data=appointment::all();
        return view('admin.showappointment', compact('data'));
    }

    public function approved($id)
    {
        $data=appointment::find($id);
        $data->status='Approved';
        $data->save();
        
        return redirect()->back();
    }

    public function cancelled($id)
    {
        $data=appointment::find($id);
        $data->status='Cancelled';
        $data->save();
        
        return redirect()->back();
    }

    public function showdoctor()
    {
        $data = doctor::all();
        return view('admin.showdoctor', compact('data'));
    }

    public function deletedoctor($id)
    {
        $data=doctor::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function updatedoctor($id)
    {
        $data = doctor::find($id);
        return view('admin.updatedoctor', compact('data'));
    }

    public function editdoctor(Request $request, $id)
    {
        $doctor = doctor::find($id);

        $doctor->name=$request->name;
        $doctor->room=$request->room;
        $doctor->Specialty=$request->Specialty;
        $doctor->contact=$request->contact;
        $doctor->name=$request->name;

        $image=$request->file;

        if($image)
        {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        
        $request->file->move('doctorimage', $imagename);
        $doctor->image=$imagename;
        }

        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Details Updated Successfully');
    }

}
