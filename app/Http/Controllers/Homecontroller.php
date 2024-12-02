<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;

use App\Models\Appointment;


class Homecontroller extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if (Auth::user()->usertype=='0')
            {
                    $doctor = doctor::all(); 
                    return view('user.home', compact('doctor')); 
            }
            else
            {
                return view('admin.home');
            }
        }

        else
        {
            return redirect()->back();
        }
    }


            public function index()
        {
            if(Auth::id())
            {
                return redirect('home');
            }
            else
            {
            $doctor = doctor::all(); 
            return view('user.home', compact('doctor')); 
            }
        }


        public function appointment(Request $request)
        {
            $data = new appointment;

            $data->name=$request->name;
            $data->email=$request->email;
            $data->date=$request->date;
            $data->contact_number=$request->number;
            $data->message=$request->message;
            $data->doctor=$request->doctor    ;
            $data->status="In progress";

            if(Auth::id())
            {
            $data->user_id=Auth::user()->id;
            }

            $data->save();

            return redirect()->back()->with('message', 'Appointment submitted. We will contact you shortly.');
        }

}
