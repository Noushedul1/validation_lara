<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function formvalidation()
    {
        return view('form');
    }
    function validation(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required | max: 5'
        ]);
        dd($request->all());
    }
}
