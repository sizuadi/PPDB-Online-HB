<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function stepOne()
    {
        return view('stepOne');
    }

    public function stepTwo(Request $request)
    {
        // validate step one form data

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            // more fields here
        ]);

        // save step one form data to session
        session(['stepOneData' => $validatedData]);

        return view('stepTwo');
    }

    public function stepThree(Request $request)
    {
        // validate step two form data

        $validatedData = $request->validate([
            'phone' => 'required',
            'address' => 'required',
            // more fields here
        ]);

        // save step two form data to session
        session(['stepTwoData' => $validatedData]);

        return view('stepThree');
    }

    public function submit(Request $request)
    {
        // get all form data from session
        $stepOneData = session('stepOneData');
        $stepTwoData = session('stepTwoData');
        $stepThreeData = $request->all();

        // save all form data to database
        // ...

        return view('confirmation');
    }
}
