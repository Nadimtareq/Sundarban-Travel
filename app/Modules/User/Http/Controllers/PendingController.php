<?php

namespace App\Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Frontend\Users;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class PendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $pending=Users::where([['status','=','0'],['usertype','=','2']])->get();
       
          //dd($pending->name); 
        return view ('user::pending.index',compact('pending'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $pending=Users::find($id);
        return view('user::pending.edit',compact('pending'));
    }

    
    public function update(Request $request, $id)
    {
        $pending=Users::find($id);
        $pending->name=$request->title;
        $pending->email=$request->email;
        $pending->phone=$request->phone;
        $pending->created_at=$request->date;
        $pending->update();
        return Redirect::route('pending')->with('create','pending updated');

    }
    
    public function pending($id){

         $pending=Users::where('status', $id)->get();
         $pending=Users::find($id);
         $pending->status=0;
         $pending->update();
        return Redirect::route('pending')->with('create','confirmed');
        
    }

    
    public function delete($id)
    {
       $pending=Users::find($id);
       $pending->delete();
       return redirect()->back()->with('delete','pending Deleted');
    }
}
