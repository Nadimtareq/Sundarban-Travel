<?php

namespace App\Modules\Commonpack\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Frontend\Common_pack;
use App\Model\Frontend\Common_cat;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class CommonpackgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $compkge=Common_pack::all();
         return view ('commonpack::commonpackage.index',compact('compkge'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compkge=Common_pack::all();
        $com_cat=Common_cat::all();
        return view ('commonpack::commonpackage.create',compact('compkge','com_cat'));
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
        $attach_file = $request->img_url->store('upload/common/');

        $compkge= new Common_pack();
        $compkge->commoncat_id=$request->category;
        $compkge->title=$request->title;
        $compkge->price=$request->price;
        $compkge->summary=$request->summary;
        /*$fare->img_url=$request->img_url;*/
        $compkge->img_url=$attach_file;
        ///return $attach_file;
          $compkge->saveOrFail();

            Input::file('img_url')->move('upload/common/', $attach_file); // uploading file to given path
            Session::flash('info', 'inserted successfully');
             return Redirect::route('commonpackge');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compkge=Common_pack::find($id);
        $com_cat=Common_cat::all();
        return view ('commonpack::commonpackage.edit',compact('compkge','com_cat')); 
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
         
        $attach_file = $request->img_url->store('upload/common/');
        $compkge=Common_pack::find($id);
        $compkge->commoncat_id=$request->category;
        $compkge->title=$request->title;
        $compkge->price=$request->price;
        $compkge->summary=$request->summary;
        /*$group->img_url=$request->img_url;*/
        $compkge->img_url=$attach_file;
        $compkge->update();

          Input::file('img_url')->move('upload/common/', $attach_file); // uploading file to given path
           Session::flash('info', 'updated successfully');
           return Redirect::route('commonpackge');
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
        $compkge=Common_pack::find($id);
        $compkge->dlete();
        return Redirect::back()->with('message', 'Successfully Deleted ');  
       
    }
}
