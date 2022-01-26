<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class School extends Model
{

    use SoftDeletes,HasFactory;

    protected $table = 'schools';
    public $timestamps = true;
    protected $fillable = array('name', 'status');

    public function students()
    {
        return $this->hasmany('App\Models\Student');
    }


}
