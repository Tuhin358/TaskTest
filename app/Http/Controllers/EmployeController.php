<?php

namespace App\Http\Controllers;

use App\Models\Companiedetail;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{

    public function create()
    {
        $companiedetails=Companiedetail::all();
        return view('employe.create',compact('companiedetails'));
    }

    public function index(){
        $employes=Employe::latest()->paginate(10);;
        $companiedetails=Companiedetail::all();
        return view('employe.index',compact('employes'));

    }

    public function store(Request $request)
    {
        $employe=new Employe();
        $employe->id=$request->employe;
        $employe->first_name=$request->first_name;
        $employe->last_name=$request->last_name;
        $employe->email=$request->email;
        $employe->phone=$request->phone;
        $employe->company=$request->company;


        $employe->save();

        return redirect()->back();

    }


    public function edit($id)

    {
         $employe= Employe::findOrFail($id);
        return view('employe.edit',compact('employe'));

    }


    public function update(Request $request){
        $employe_id=$request->employe_id;

        $request->validate([
            'first_name' => 'required|unique:employes',
            'last_name' => 'required',
            'email' => 'required',
            'phone' =>'required',
            'company' =>'required',

        ]);

        Employe::findOrFail($employe_id)->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'company'=>$request->company,

        ]);

        return redirect()->back();

    }


    public function delete($id)
    {

        Employe::findOrFail($id)->delete();
        return redirect()->back()->with('message','Category Deleted');

         }

}
