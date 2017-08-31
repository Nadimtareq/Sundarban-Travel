<?php

namespace App\Model\Frontend;

use Illuminate\Database\Eloquent\Model;

class Groupfare extends Model
{
    protected $table = "groupfare";

    protected $fillable = array('*');

    public function groupfare_ct() {
    	return $this->belongsTo('App\Model\Frontend\Groupfare_cat','groupfarecat_id');
    }
}
