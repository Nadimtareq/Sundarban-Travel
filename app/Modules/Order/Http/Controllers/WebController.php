<?php

namespace App\Modules\Order\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Frontend\Order;
use App\Model\Frontend\Users;
use App\Model\Frontend\Common_pack;
use App\Model\Frontend\Groupfare;
use App\Model\Frontend\Specialpackage;
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
     return view ('order::order.index');
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        $order=Order::all();
        $user=Users::where([['status','=','1'],['usertype','=','2']])->get();
        /*$common=Common_pack::select('title')->get();
        //return response()->json($common);
        $group=Groupfare::select('title')->get();
        //return response()->json($group); 
        $package=Specialpackage::select('title')->get();*/
        //return response()->json($package);
           
        return view ('order::order.create',compact('order','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     



         $order= new Order();

         $order->users_id=$request->user;
         if ($request->type_1==1) {
             $order->commonpack_id=$request->package;
         }
         if ($request->type_1==2) {
             $order->groupfare_id=$request->package;
         }
         if ($request->type_1==3) {
             $order->specialpackage_id=$request->package;
         }
         $order->message=$request->message;
         $order->save();
         return Redirect::route('order/pending');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id==1){
          $common=Common_pack::all();

         $option = "";

         foreach ($common as $value) {
             # code...
       
            $option .="<option value='".$value->id."'>";
            $option .=$value->title;
            $option .="</option>";
           }

         // return $option;
  
          return response()->json($common);  
        }
        elseif($id==2) {
         $group=Groupfare::all();
         $option = "";

         foreach ($group as $value) {
             # code...
       
            $option .="<option value='".$value->id."'>";
            $option .=$value->title;
            $option .="</option>";
           }

         // return $option;
      
        return response()->json($group);
        }
         elseif($id==3){
         $package=Specialpackage::all();
         $option = "";

         foreach ($package as $value) {
             # code...
       
            $option .="<option value='".$value->id."'>";
            $option .=$value->title;
            $option .="</option>";
           }

         // return $option;
           return response()->json($package);
         }
        
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


    public function confirm ($id){
        
    }

   /* public function commonpack (Request $request){

        $id  = $request->id;

    }
*/
}
