<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class Homecontroller extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if (Auth::user()->usertype=='0')
            {
                    return view('user.home'); 
            }
            else
            {
                return view('admin.home');
            }
        }
    }
}
