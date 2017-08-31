<?php

namespace App\Model\Frontend;

use Illuminate\Database\Eloquent\Model;

class Specialpackage_customer extends Model
{
    protected $table = "specialpackage_customer";

    protected $fillable = array('*');

    public function sppackage (){

    	return $this->belongsTo('App\Model\Frontend\Specialpackage','specialpackage_id');
    }

    public function user(){
    	
   	return $this->belongsTo('App\Model\Frontend\Users','users_id');

   }
}
