<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model 
{

    protected $table = 'rooms';
    public $timestamps = true;
    protected $fillable = array('room_number', 'number_of_bed','is_busy');


}