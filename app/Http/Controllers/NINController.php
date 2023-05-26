<?php

namespace App\Http\Controllers;

use App\Models\NIN;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NINController extends Controller
{
    public function create()
    {
        return view('nin.create');
    }

    public function nin()
    {
        $n_i_n_s = NIN::all();
        return view('nin.index', compact('n_i_n_s'));
    }

    public function store(Request $request)
    {
        $n_i_n_s = New NIN;
        $n_i_n_s->user_id = Auth::id();
        $n_i_n_s->email = $request->input('email');
        $n_i_n_s->bvn = $request->input('bvn');
        $n_i_n_s->appointmentDate = $request->input('appointmentDate');
        $n_i_n_s->appointmentLocation = $request->input('appointmentLocation');
        $n_i_n_s->appointmentTime = $request->input('appointmentTime');
        $n_i_n_s->ukMobileNumber = $request->input('ukMobileNumber');
        $n_i_n_s->title = $request->input('title');
        $n_i_n_s->lastName = $request->input('lastName');
        $n_i_n_s->firstName = $request->input('firstName');
        $n_i_n_s->middleName = $request->input('middleName');
        $n_i_n_s->otherName = $request->input('otherName');
        $n_i_n_s->maidenName = $request->input('maidenName');
        $n_i_n_s->permanentAddress = $request->input('permanentAddress');
        $n_i_n_s->dob = $request->input('dob');
        $n_i_n_s->countryOfBirth = $request->input('countryOfBirth');
        $n_i_n_s->stateOfBirth = $request->input('stateOfBirth');
        $n_i_n_s->stateOfOrigin = $request->input('stateOfOrigin');
        $n_i_n_s->lgaOfOrigin = $request->input('lgaOfOrigin');
        $n_i_n_s->townOfOrigin = $request->input('townOfOrigin');
        $n_i_n_s->gender = $request->input('gender');
        $n_i_n_s->height = $request->input('height');
        $n_i_n_s->nationality = $request->input('nationality');
        $n_i_n_s->residenceStatus = $request->input('residenceStatus');
        $n_i_n_s->maritalStatus = $request->input('maritalStatus');
        $n_i_n_s->religion = $request->input('religion');
        $n_i_n_s->telephoneNumber = $request->input('telephoneNumber');
        $n_i_n_s->guardianSurname = $request->input('guardianSurname');
        $n_i_n_s->guardianFirstName = $request->input('guardianFirstName');
        $n_i_n_s->guardianMiddleName = $request->input('guardianMiddleName');
        $n_i_n_s->guardianNin = $request->input('guardianNin');
        $n_i_n_s->save();

        return redirect('mydata')->with('status', 'Application submited');
    }
}
