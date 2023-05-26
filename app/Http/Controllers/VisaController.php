<?php

namespace App\Http\Controllers;

use App\Models\Visa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisaController extends Controller
{
    public function visa()
    {
        $visa = Visa::all();
        return view('visa.index')->with('visa', $visa);
        

    }


    public function create()
    {
        return view('visa.create');
    }


   

    public function store(Request $request)
    {


        $request->validate([




        ]);


        $visa = New Visa;
        $visa->user_id = Auth::id();
        $visa->nationality = $request->input('nationality');
        $visa->passport_type = $request->input('passport_type');
        $visa->visa_type = $request->input('visa_type');
        $visa->visa_class = $request->input('visa_class');
        $visa->title = $request->input('title');
        $visa->surname = $request->input('surname');
        $visa->first_name = $request->input('first_name');
        $visa->middle_name = $request->input('middle_name');
        $visa->dob = $request->input('dob');
        $visa->pofB = $request->input('pofB');
        $visa->gender = $request->input('gender');
        $visa->marital_status = $request->input('marital_status');
        $visa->emailAddress = $request->input('emailAddress');
        $visa->phoneNumber = $request->input('phoneNumber');
        $visa->passportNumber = $request->input('passportNumber');
        $visa->passportExpiryDate = $request->input('passportExpiryDate');
        $visa->previousNationality = $request->input('previousNationality');
        $visa->occupation = $request->input('occupation');
        $visa->save();

        return redirect('user')->with('status', 'Application submited');
    }

    public function show($user_id)
    {
        $visa = Visa::find($user_id);
        return view('visa.show')->with('visa', $visa);
    }
}
