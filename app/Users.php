<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'clock_out', 'clock_in','break_start','break_end'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
}
