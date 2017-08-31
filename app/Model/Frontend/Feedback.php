<?php

namespace App\Model\Frontend;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "feedback";

    protected $fillable = array('*');


    public function common_pack(){
    	return $this->belongsTo('App\Model\Frontend\common_pack','commonpack_id');
    }
}
