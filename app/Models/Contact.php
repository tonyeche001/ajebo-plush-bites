<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    Protected $fillable=[
        'name',
        'email',
        'phone',
        'subject',
        'message',
    ];
}
