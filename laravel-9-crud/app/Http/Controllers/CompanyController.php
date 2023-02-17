<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    function show()
    {
        return view('companies.company');
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

           if ($request->hasFile('image')) {
            $image = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('image'), $image);
              }
           $data = $request->all();
           $data['image'] = $image;
    
           Company::create($data, $request->post());


          //Company::create($request->all());

        return redirect('/companies.display')->with('success','Company has been created successfully.');
        //  echo "Data send Sucessfully....";    
    
    }
    function display(Request $request){
        $companies=Company::all();
        $companies = Company::orderBy('id','desc')->paginate(5);
        return view('companies.display',['companies'=>$companies,'user' => Auth::user()]);
        // return redirect('show');
    }

    function edit(Request $request, $id){
       $companies=Company::find($id);
       //dd($companies->name);
       return view('companies.edit',['companies'=>$companies]);
    }
    
    function update(Request $request, Company $company,$id){
        $companies=Company::find($id);
        $company->name=$request->get('name');
        $company->email=$request->get('email');
        $company->address=$request->get('address');
        $company->save();

        if ($request->hasFile('image')) {
            $image = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('image'), $image);
        }
        $data = $request->all();
        $data['image'] = $image;

        $company->fill( $data,$request->post())->save();

        return redirect('display')->with('success','Company Has Been updated successfully');;
     }
   
     function destroy(Request $request, $id){
        $companies=Company::find($id);
        $companies->delete();
        return redirect('display')->with('success','Company has been deleted successfully');
     }    
     function back()
     {
         return redirect('display');
     }
}
