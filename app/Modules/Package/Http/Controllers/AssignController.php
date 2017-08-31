<?php

namespace App\Modules\Package\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Frontend\Specialpackage;
use App\Model\Frontend\Specialpackage_customer;
use App\Model\Frontend\Users;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class AssignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ass_pack=Specialpackage_customer::all();
        return view ('package::assign.index',compact('ass_pack'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assign=Specialpackage::all();
        $user=Users::where([['status','=','1'],['usertype','=','2']])->get();
         //return $user;
        return view ('package::assign.create',compact('assign','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ass=new Specialpackage_customer();
        $ass->specialpackage_id=$request->package;
        $ass->users_id=$request->assign;
        $ass->save();
        return Redirect::route('assign')->with('create','assign Created');
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
        //$ass=Specialpackage::find($id);
        $ass=Specialpackage_customer::find($id);
       // return $ass;
        $assign=Specialpackage::all();
        $user=Users::all();
        return view ('package::assign.edit',compact('ass','user','assign')); 
    }

    
    public function update(Request $request, $id)
    {
        $ass=Specialpackage_customer::find($id);
        $ass->specialpackage_id=$request->package;
        $ass->users_id=$request->assign;
        $ass->save();
        return Redirect::route('assign')->with('edit','assign Created');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $ass=Specialpackage_customer::find($id);
        $ass->delete();
        return redirect()->back()->with('delete',' Deleted');
    }
}
