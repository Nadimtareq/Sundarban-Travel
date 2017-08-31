<?php

namespace App\Modules\Frontend\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Frontend\Basicinfo;
use App\Model\Frontend\Common_pack;
use App\Model\Frontend\Common_cat;
use App\Model\Frontend\Gallery;
use App\Model\Frontend\Feedback;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $basic=Basicinfo::find(1);
         $common=Common_pack::all();
         $gallery=Gallery::all();
         /*return $gallery;*/
         $com_cat=Common_cat::all();
          
        return view('frontend::index',compact('basic','common','com_cat','gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $fed=Feedback::where('status','=',0)->first();
        //dd($fed->status);

        if($fed->status===0){


        $feedback =new Feedback();
    
        $feedback->fullname=$request->name;
        $feedback->email=$request->email;
        $feedback->phone=$request->phone;
        $feedback->subject=$request->subject;     
        $feedback->commonpack_id=$request->package; 
        $feedback->message=$request->message;
        $feedback->save();
         return Redirect::back()->with('message','send message');
        }
        
         

        /*else{
             return Redirect::back()->with('message','not send message');
        }*/
        
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
        //
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
        //
    }

    
   public function visit(){
    
    return view('frontend::show');

   }

    public function destroy($id)
    {
        //
    }
}
