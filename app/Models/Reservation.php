<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    Protected $fillable=[
        'name',
        'email',
        'phone',
        'guests',
        'date',
        'time',
        'message',
        'status'
    ];

}
