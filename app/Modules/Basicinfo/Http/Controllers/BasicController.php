<?php

namespace App\Modules\Basicinfo\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Frontend\Basicinfo;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class BasicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $basic=Basicinfo::first();
        //dd($basic);
        return view('basicinfo::create')->with('basic', $basic);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {      
         $find=Basicinfo::where('id',$id )->first();
          if(empty($find)){

         $basic= new Basicinfo ();
         $basic->address=$request->address;
         $basic->phone=$request->phone;
         $basic->email=$request->email;
         $basic->save();   
        /*$a = Basicinfo::updateOrCreate(
                ['id' => $id],
                ['address' =>$request->address,
                    'phone' => $request->phone,
                    'email' =>$request->email ]
            );*/
            return Redirect::back( )->with('message', 'Successfully Store');
          }

         else{
           $find=Basicinfo::first();
          /* if(!is_null($find)){*/
           $find->address=$request->address;
           $find->phone=$request->phone;
           $find->email=$request->email;
           $find->update();   
          /* }*/
           
         }
         return Redirect::back( )->with('message', 'Successfully updated');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
