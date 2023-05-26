<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index()
    {
        
        if(Auth::user()->role_as == '1')
        {
            return redirect('/admin')->with('status', 'Welcome Admin');

        }
        elseif(Auth::user()->role_as == '0');
        {
            return redirect('/user')->with('status', 'Logged in Successful');
        }
    }

    public function about()
    {
        return view('layouts.about');
    }

    public function admin()
    {
        return view('pages.admin.adminDashboard');
    }

    public function user()
    {
        return view('pages.user.userDashboard');
    }

    public function personal()
    {
        return view('pages.user.personal');
    }


    
  



   

    public function userDashboard()
    {
        return view('pages.user.userDashboard');
    }

    public function adminDashboard()
    {
        return view('pages.admin.adminDashboard');
    }


    
}
