<?php

namespace App\Http\Controllers;

use App\Models\NIN;
use App\Models\User;
use App\Models\Visa;
use App\Models\Passport;
use Illuminate\Http\Request;


class Users extends Controller
{
    public function registration()
    {
        
        return view('pages.user.registration');
    }

    public function login()
    {
        return view('pages.user.login');
    }

    public function mydata()
    {
        $users = User::where('role_as', '!=', 1)->get();
        $totalUsers = User::where('role_as', '!=', 1)->count();
        $totalPassport = Passport::count();
        $totalVisa = Visa::count();
        $totalNin = NIN::count();
        return view('pages.admin.adminDashboard', compact('users', 'totalUsers', 'totalPassport', 'totalVisa', 'totalNin'));


    }






}
