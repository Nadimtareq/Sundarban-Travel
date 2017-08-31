<?php

namespace App\Modules\Package\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Frontend\Specialpackage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pack=Specialpackage::all();
        return view ('package::index',compact('pack'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pack=Specialpackage::all();
        return view ('package::create',compact('pack'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if ($request->hasFile('img_url')) {
        $attach_file = $request->img_url->store('upload/image/');

        $package= new Specialpackage();
        $package->title=$request->title;
        $package->price=$request->price;
        $package->summary=$request->summary;
        $package->img_url=$attach_file;
        $package->save();

          Input::file('img_url')->move('upload/image/', $attach_file); // uploading file to given path
            Session::flash('info', 'inserted successfully');
            return Redirect::route('package');
         }  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
      $package=Specialpackage::find($id);
     return view ('package::edit',compact('package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        if ($request->hasFile('img_url')) {
        $attach_file = $request->img_url->store('upload/image/'); 

        $package=Specialpackage::find($id) ;
        $package->title=$request->title;
        $package->price=$request->price;
        $package->summary=$request->summary;
        $package->img_url=$attach_file;
        $package->update();

         Input::file('img_url')->move('upload/image/', $attach_file); // uploading file to given path
            Session::flash('info', 'updated successfully');
            return Redirect::route('package');
         }  
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $package=Specialpackage::find($id);
        $package->delete();
        return redirect()->back()->with('delete','package Deleted');
    }
}
