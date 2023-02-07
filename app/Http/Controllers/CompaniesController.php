<?php

namespace App\Http\Controllers;

use App\Models\Companiedetail;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function create()
    {
        return view('companies.create');
    }

    public function index(){
        $companiedetails=Companiedetail::latest()->paginate(10);
        return view('companies.index',compact('companiedetails'));

    }

    public function store(Request $request)
    {
        $companiedetail=new Companiedetail();
        $companiedetail->id=$request->companiedetail;
        $companiedetail->name=$request->name;
        $companiedetail->email=$request->email;
        $companiedetail->website=$request->website;


         if ($request->hasFile('image')){
            $file=$request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move(public_path('/storage/companiedetail/'),$filename);
            $companiedetail->image= $filename;

        }
        $companiedetail->save();
        return redirect()->back();

    }


    public function edit($id)

    {
        $category= Companiedetail::findOrFail($id);
        return view('companies.edit',compact('category'));

    }


    public function update(Request $request){
        $category_id=$request->category_id;

        $request->validate([
            'name' => 'required|unique:companiedetails',
            'email' => 'required',
            'website' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',

        ]);
        {
            $category_id=$request->category_id;
            $cat_image=$request->file('image');
             $img_name=hexdec(uniqid()).'.'. $cat_image->getClientOriginalExtension();
             $request->image->move(public_path('/storage/companiedetail/'),$img_name);
             $img_url='/storage/companiedetail/'.$img_name;
        }

        Companiedetail::findOrFail($category_id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'website'=>$request->website,
            'image'=>$img_url,

        ]);
        return redirect()->back();

    }


    public function delete($id)
    {

        Companiedetail::findOrFail($id)->delete();
        return redirect()->back()->with('message','Category Deleted');

         }



}



