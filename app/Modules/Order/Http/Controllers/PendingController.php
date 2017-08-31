<?php

namespace App\Modules\Order\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Frontend\Order;
use App\Model\Frontend\Common_pack;
use App\Model\Frontend\Groupfare;
use App\Model\Frontend\Specialpackage;
use App\Model\Frontend\Users;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
class PendingController extends Controller
{
    
    public function index()
    {    
        $order_pen=Order::all();
         //$order_pen->commonpack_id;
       // return $order_pen;
        return view ('order::pending.index',compact('order_pen'));
    }

    
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $order_pen=Order::find($id);
        $com=Common_pack::all();
        $sp=Specialpackage::all();
        $gp=Groupfare::all();
        $user=Users::all();
        return view ('order::pending.edit',compact('order_pen','user','com','sp','gp'));
    }

                              
    public function update(Request $request, $id)
    {    
        //dd($request->all()); 
        $order_pen=Order::find($id);
         
        $order_pen->users_id=$request->user;
        if ($request->type_1==1) {
        $order_pen->commonpack_id=$request->package;
    }
     
    if ($request->type_1==2) {
        $order_pen->groupfare_id=$request->package;
    }

     if ($request->type_1==3) {
        $order_pen->specialpackage_id=$request->package;
    }
        $order_pen->update();
         return Redirect::route('order/pending');
    }

    
    public function delete($id)
    {
        $order_pen=Order::find($id);
        $order_pen->delete();
        return Redirect::back()->with('message','successfully delete');

    }
}
