<?php

namespace App\Modules\Groupfare\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Frontend\Groupfare;
use App\Model\Frontend\Groupfare_cat;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use League\Flysystem\Exception;
class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
          $group=Groupfare::all();
          //dd( $group);
         return view ('groupfare::index',compact('group'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $group=Groupfare::all();
         $group_cat=Groupfare_cat::all();
         //dd($group_cat);
        return view ('groupfare::create',compact('group','group_cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
       // dd($request->all());
        if ($request->hasFile('img_url')) {
        $attach_file = $request->img_url->store('upload/images/');

        $fare= new Groupfare();
        $fare->groupfarecat_id=$request->category;
        $fare->title=$request->title;
        $fare->price=$request->price;
        $fare->summary=$request->summary;
        /*$fare->img_url=$request->img_url;*/
        $fare->img_url=$attach_file;
        ///return $attach_file;
          $fare->saveOrFail();

            Input::file('img_url')->move('upload/images/', $attach_file); // uploading file to given path
            Session::flash('info', 'inserted successfully');
            return Redirect::route('groupfare');
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
        $group=Groupfare::find($id);
        $group_cat=Groupfare_cat::all();
        return view ('groupfare::edit',compact('group','group_cat'));
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
         
        $attach_file = $request->img_url->store('upload/images/');
        $group=Groupfare::find($id);
        $group->groupfarecat_id=$request->category;
        $group->title=$request->title;
        $group->price=$request->price;
        $group->summary=$request->summary;
        /*$group->img_url=$request->img_url;*/
        $group->img_url=$attach_file;
        $group->update();

          Input::file('img_url')->move('upload/images/', $attach_file); // uploading file to given path
           Session::flash('info', 'updated successfully');
           return Redirect::route('groupfare');
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
        $group=Groupfare::find($id);
        $group->delete();
        return Redirect::back()->with('message','Successfully Deleted ');
    }
}
