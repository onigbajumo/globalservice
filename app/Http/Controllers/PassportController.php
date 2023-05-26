<?php

namespace App\Http\Controllers;

use App\Models\Passport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PassportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function passport()
    {
        $passport = Passport::all();
        
        return view('passport.index')->with('passport', $passport);
    }

    
    public function createPass()
    {
        return view('passport.create');
    }

    public function storePass(Request $request)
    {

        $request->validate([

            'email' => 'required',

            'title' => 'required',
            'lastName' => 'required',
            'firstName' => 'required',
            'middleName' => 'required',

            'contactNumber' => 'required',
            'maritalStatus' => 'required',
            'hairColor' => 'required',
            'eyeColor' => 'required',
            'identificationMarks' => 'required',
            'height' => 'required',



            
        ]);
        
        $passport = New Passport;
        $passport->user_id = Auth::user()->id;
        $passport->email = $request->input('email');
        $passport->title = $request->input('title');
        $passport->lastName = $request->input('lastName');
        $passport->firstName = $request->input('firstName');
        $passport->middleName = $request->input('middleName');
        $passport->contactNumber = $request->input('contactNumber');
        $passport->maritalStatus = $request->input('maritalStatus');
        $passport->hairColor = $request->input('hairColor');
        $passport->eyeColor = $request->input('eyeColor');
        $passport->identificationMarks = $request->input('identificationMarks');
        $passport->height = $request->input('height');
        $passport->save();
        return redirect('user')->with('status', 'Addedd successfully');
    }

    /**
     * Display the specified resource.
     */
    public function showPass(string $id)
    {
        $passport = Passport::where('user_id', $id)->first();
        return view('passport.show')->with('passport', $passport);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
