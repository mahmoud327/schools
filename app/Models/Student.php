<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Student extends Model 
{
    use SoftDeletes,HasFactory;

    protected $table = 'students';
    public $timestamps = true;
    protected $fillable = array('name', 'school_id','order');

    public function school(){
        return $this->belongsto('App\Models\School');
    }


}