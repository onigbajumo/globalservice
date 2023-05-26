<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function general()
    {
        $general = General::all();
        return view('general.index', compact('general'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function createGen()
    {
        return view('general.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeGen(Request $request)
    {


        
        $request->validate([

            'email' => 'required',
            'applicationType' => 'required',
            'passportNumber' => 'required',
            'passportBookletType' => 'required',
            'title' => 'required',
            'surname' => 'required',
            'firstName' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'maritalStatus' => 'required',
            'occupation' => 'required',
            'motherMaidenName' => 'required',
            'ninNumber' => 'required',



            
        ]);



        $general = New General;
        $general->user_id = Auth::id();
        $general->email = $request->input('email');
        $general->applicationType = $request->input('applicationType');
        $general->passportNumber = $request->input('passportNumber');
        $general->passportBookletType = $request->input('passportBookletType');
        $general->title = $request->input('title');
        $general->surname = $request->input('surname');
        $general->firstName = $request->input('firstName');
        $general->middleName = $request->input('middleName');
        $general->dob = $request->input('dob');
        $general->placeOfBirth = $request->input('placeOfBirth');
        $general->gender = $request->input('gender');
        $general->maritalStatus = $request->input('maritalStatus');
        $general->occupation = $request->input('occupation');
        $general->motherMaidenName = $request->input('motherMaidenName');
        $general->ninNumber = $request->input('ninNumber');
        $general->save();

        return redirect('user')->with('status', 'Application submited');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $general = General::where('user_id', $id)->first();
        return view('pages.user.userDashboard')->with('general', $general);
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
