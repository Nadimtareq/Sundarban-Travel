<?php

namespace App\Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Frontend\Users;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
class ConfirmedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $confirm=Users::where('status','=',1)->get();
       return view('user::confirmed.index',compact('confirm'));

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
    public function confirm($id)
    {
        $confirm=Users::where('status', $id)->get();
        //$confirm1=Users::where('status','=', 1)->get();  
        $confirm=Users::find($id);
        $confirm->status=1;
        $confirm->update();
        return Redirect::route('confirmed')->with('create','confirmed');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $confirm=Users::find($id);
        return view('user::confirmed.edit',compact('confirm'));
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
        $confirm=Users::find($id);
        $confirm->name=$request->title;
        $confirm->email=$request->email;
        $confirm->phone=$request->phone;
        $confirm->created_at=$request->date;
        $confirm->update();
        return Redirect::route('confirmed')->with('create','pending updated');

    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $confirm=Users::find($id);
        $confirm->delete();
        return redirect()->back()->with('delete','confirmed Deleted');
    }
}
