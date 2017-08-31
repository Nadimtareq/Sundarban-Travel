<?php

namespace App\Model\Frontend;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";

    protected $fillable = array('*');
    

   public function user(){
   	return $this->belongsTo('App\Model\Frontend\Users','users_id');

   }


    public function commpack(){
    	return $this->belongsTo('App\Model\Frontend\Common_pack','commonpack_id');
    }


    public function grfare(){
    	return $this->belongsTo('App\Model\Frontend\Groupfare','groupfare_id');
    }

   public function sppackage (){

    	return $this->belongsTo('App\Model\Frontend\Specialpackage','specialpackage_id');
    }
   
}
