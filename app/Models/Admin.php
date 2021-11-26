<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class Admin extends Authenticatable
{

    use HasFactory;

    protected $table = 'admins';
    public $timestamps = true;
    protected $fillable = array('username', 'email', 'password', 'phone');
    protected $hidden = array('password');


}
