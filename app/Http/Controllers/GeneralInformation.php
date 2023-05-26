<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralInformation extends Controller
{
    public function general()
    {
        return view('pages.user.general');
    }
}
