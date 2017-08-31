<?php

namespace App\Modules\Groupfare\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Frontend\Groupfare_cat;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class GroupcatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grop_cat=Groupfare_cat::all();
        return view('groupfare::groupcat.index')->with('grop_cat',$grop_cat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $grop_cat=Groupfare_cat::all();
        return view('groupfare::groupcat.create')->with('grop_cat',$grop_cat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comcat =new Groupfare_cat();
        $comcat->title=$request->title;
        $comcat->save();
        return Redirect::route('groupfare/cat')->with('message','successfully added');
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
         $grop_cat = Groupfare_cat::find($id);
         return view('groupfare::groupcat.edit')->with('grop_cat',$grop_cat);

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
        $grop_cat = Groupfare_cat::find($id);;
        $grop_cat->title=$request->title;
        $grop_cat->save();
        return Redirect::route('groupfare/cat')->with('message','successfully added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $grop_cat = Groupfare_cat::find($id);
        $grop_cat->save();
         return Redirect::back()->with('message','successfully delete');

    }
}
