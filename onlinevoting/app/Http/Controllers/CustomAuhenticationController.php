<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuhenticationController extends Controller
{
    //
    public function C_Registration(){


        return view('auth.CandidateRegistration');
    }
}
