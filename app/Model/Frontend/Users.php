<?php

namespace App\Model\Frontend;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "users";

    protected $fillable = array('*');
}
