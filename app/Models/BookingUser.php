<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class BookingUser extends Authenticatable
{

    use HasFactory;

    protected $table = 'booking_users';
    public $timestamps = true;
    protected $fillable = array('to_date', 'from_date', 'price','user_id');

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


}
