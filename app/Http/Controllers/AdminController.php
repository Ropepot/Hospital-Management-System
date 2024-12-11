<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;
use Notifications;
use App\Notifications\SendEmailNotification;

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

    // public function emailview($id)
    // {
    //     $data=appointment::find($id);
    //     return view('admin.email_view', compact('data'));
    // }

    // public function sendemail(Request $request, $id)
    // {
    // $data = appointment::find($id);

    // $details = [
    //     'greeting' => $request->greeting,
    //     'body' => $request->body,
    //     'endpart' => $request->endpart,
    // ];

    // Notifications::send($data, new SendEmailNotification($details));

    // return redirect()->back()->with('message', 'Email sent successfully');
    // }

    public function showinvoice()
    {
        $data=appointment::all();
        return view('admin.showinvoice', compact('data'));
    }

    
    public function report($id)
    {
        $appoint = appointment::find($id);
        return view('admin.report', compact('appoint'));
    }
    
    public function generateReport(Request $request, $id)
    {
        

        $appoint = appointment::find($id);

        
        
        $appoint->name = $request->name;
        $appoint->doctor = $request->doctor;
        $appoint->contact_number = $request->contact;
        $appoint->Remarks = $request->Report;
        
        $appoint->save();

        
        return redirect()->back()->with('message', 'Report generated successfully!');
    }

    public function billing($id)
    {
        $appoint = appointment::find($id);
        return view('admin.billing', compact('appoint'));
    }

    public function generateBill(Request $request, $id)
    {
        

        $appoint = appointment::find($id);

        
        
        $appoint->name = $request->name;
        $appoint->doctor = $request->doctor;
        $appoint->contact_number = $request->contact;
        $appoint->Billing = $request->Billing;
        
        $appoint->save();

        
        return redirect()->back()->with('message', 'Billing generated successfully!');
    }

    public function all_Users()
    {
       
        $data=user::all();
        $appoint=appointment::all();
        return view('admin.all_users', compact('data', 'appoint'));
    }

    public function showPatientHistory($id)
{
    
    $user = User::find($id);

    
    if (!$user) {
        return redirect()->back()->with('error', 'User not found.');
    }

    
    $appoint = $user->appointments; 

   
    return view('admin.showPatientHistory', compact('appoint'));
}
    public function deleteUser($id)
    {
        $data=user::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function deleteAppointment($id)
    {
        $data=appointment::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function dashboard()
    {
       
        $data=user::all();
        $appoint=appointment::all();
        $doctor=doctor::all();
        return view('admin.dashboard', compact('data', 'appoint','doctor'));
    }
    

    

   





}

