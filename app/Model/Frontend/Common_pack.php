<?php

namespace App\Model\Frontend;

use Illuminate\Database\Eloquent\Model;

class Common_pack extends Model
{
    protected $table = "common_pack";

    protected $fillable = array('*');


    public function compack_cat(){
    	return $this->belongsTo('App\Model\Frontend\Common_cat','commoncat_id');
    }
}
