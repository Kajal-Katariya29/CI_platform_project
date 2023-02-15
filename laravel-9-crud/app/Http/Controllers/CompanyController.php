<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    function show()
    {
        return view('company');
    }
    function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required|max:4',
            'email' => 'required|email|unique:users',
            'address' => 'required|max:25',
        ]);
    }
}
