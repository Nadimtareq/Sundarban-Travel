<?php

namespace App\Modules\Commonpack\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Frontend\Common_cat;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $comcat=Common_cat::all();
        return view ('commonpack::index')->with('comcat',$comcat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
	
	    $comcat=Common_cat::all();
		//dd($comcat);
        return  view('commonpack::create')->with('comcat',$comcat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $comcat =new Common_cat();
	   $comcat->title=$request->title;
	   $comcat->save();
        return Redirect::route('commonpack')->with('message','successfully added');
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
        $comcat=Common_cat::find($id);
        return  view('commonpack::edit')->with('comcat',$comcat);
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
        $comcat=Common_cat::find($id);
        $comcat->title=$request->title;
        $comcat->update();
        return Redirect::route('commonpack')->with('message','successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $comcat=Common_cat::find($id);
        $comcat->delete(); 
        return Redirect::back()->with('message','successfully deleted');
    }
}
