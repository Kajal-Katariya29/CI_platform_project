<?php

namespace App\Http\Controllers;

use App\Models\Company;
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
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'address' => 'required|max:25',
        ]);

           $company=new Company;
           $company->name=$request->get('name');
           $company->email=$request->get('email');
           $company->address=$request->get('address');
           $company->save();
        //Company::create($request->all());

        return redirect('/display');
        //  echo "Data send Sucessfully....";    
    
    }
    function display(Request $request){
        $companies=Company::all();
        return view('display',['companies'=>$companies]);
        // return redirect('show');
    }

    function edit(Request $request, $id){
       $companies=Company::find($id);
       //dd($companies->name);
       return view('edit',['companies'=>$companies]);
    }
    
    function update(Request $request, Company $company,$id){
        $companies=Company::find($id);
        $company->name=$request->get('name');
        $company->email=$request->get('email');
        $company->address=$request->get('address');
        $company->save();

        return redirect('display');
     }
   
     function destroy(Request $request, $id){
        $companies=Company::find($id);
        $companies->delete();
        return redirect('display');
     }

     
    
}
